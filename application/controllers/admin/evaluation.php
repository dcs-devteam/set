<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin' && $this->session->userdata('role') !== 'evaluator') {
			show_403_error();
		}
		$this->load->model('class_model');
		$this->load->model('office_model');
		$this->load->model('evaluator_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after evaluation/admin/evaluation.
 * Class the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays classes currently evaluated and classes to be evaluated
 * of the office of user.
 */
	public function view() {
		$this->load->model('teacher_model');
		$view_data = array(
			'classes_not_evaluated' => $this->class_model->get_todo($this->office_id),
			'classes_currently_evaluated' => $this->class_model->get_active($this->office_id),
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/evaluation/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Calls the start_evaluation function and displays whether the function
 * was successful or not.
 * Also generates access codes for the class after is was successfully
 * started.
 * @param  int $class_id	valid class ID
 */
	public function start($class_id) {
		$result = $this->class_model->get_by_id($class_id);
		//check if ID is valid
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($result->is_done == TRUE) {
			$error_data = array(
				'error_title' => 'Class Evaluation Already Done',
				'error_message' => 'You cannot start evaluation for this class because the evaluation is already done.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($result->is_active == TRUE) {
			$error_data = array(
				'error_title' => 'Class Evaluation Already Started',
				'error_message' => 'You cannot start evaluation for this class because the evaluation has already been started.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$start_result = $this->start_evaluation($class_id);
			$message = '';
			$error = '';
			$success = FALSE;
			if ($start_result) {
				$message = 'Class evaluation was successfully started.';
				$success = TRUE;

				//generate codes
				$this->generate_code($class_id);
			} else {
				$message = 'Class evaluation start failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$start_data = array('message' => $message, 'error' => $error, 'success' => $success, 'class_id' => $class_id);
			$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$start_data,TRUE);

		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the class ID and the user's ID to class_model->start_evaluation
 * to start evaluation for the given class.
 * @param  int $class_id	valid class ID
 * @return boolean				TRUE if start was successful. Else, FALSE.
 */
	private function start_evaluation($class_id) {
		if ($this->class_model->start_evaluation($class_id, $this->session->userdata('user_id'))) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Displays the Stop Evaluation confirmation dialog.
 * Calls the stop_evaluation function and displays whether the function
 * was successful or not.
 * @param  int $class_id	valid class ID
 */
	public function stop($class_id) {
		$this->load->model('evaluation_model');

		$result = $this->class_model->get_by_id($class_id);
		//check if ID is valid
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($result->is_active == FALSE OR $result->is_done == TRUE) {
			$error_data = array(
				'error_title' => 'Class Evaluation Not Active',
				'error_message' => 'You cannot stop evaluation for this class because it is not currently active.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if (!$this->evaluation_model->get_by_class($class_id)) {
			//prevent stop if no evaluation forms submitted
			$error_data = array(
				'error_title' => 'Class Evaluation Stop Not Allowed',
				'error_message' => 'There are no submitted evaluation forms. In order to generate the evaluation report, at least one evaluation form must be submitted.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		}	else {
			//must go through stop-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$stop_confirm_data = array(
					'class' => $result
					);

				$data['body_content'] = $this->load->view('contents/admin/evaluation/stop_confirm',$stop_confirm_data,TRUE);
			} else {
				$message = '';
				$error = '';
				$success = FALSE;

				$stop_result = $this->stop_evaluation($class_id);
				if ($stop_result) {
					$message = 'Class evaluation was successfully stopped.';
					$success = TRUE;
				} else {
					$message = 'Class evaluation stop failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}

				$stop_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$stop_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the class ID and the user's ID to class_model->stop_evaluation
 * to stop evaluation for the given class.
 * @param  int $class_id	valid class ID
 * @return boolean				TRUE if stop was successful. Else, FALSE.
 */
	private function stop_evaluation($class_id) {
		if ($this->class_model->stop_evaluation($class_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Displays the Cancel Evaluation confirmation dialog.
 * Calls the cancel_evaluation function and displays whether the function
 * was successful or not.
 * @param  int $class_id	valid class ID
 */
	public function cancel($class_id) {
		$result = $this->class_model->get_by_id($class_id);
		//check if ID is valid
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($result->is_active == FALSE OR $result->is_done == TRUE) {
			$error_data = array(
				'error_title' => 'Class Evaluation Not Active',
				'error_message' => 'You cannot cancel evaluation for this class because it is not currently active.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'class' => $result
					);

				$data['body_content'] = $this->load->view('contents/admin/evaluation/cancel_confirm',$delete_confirm_data,TRUE);
			} else {
				$cancel_result = $this->cancel_evaluation($class_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($cancel_result) {
					$message = 'Class evaluation was successfully canceled.';
					$success = TRUE;
				} else {
					$message = 'Class evaluation cancel failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$cancel_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$cancel_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the class ID and the user's ID to class_model->cancel_evaluation
 * to cancel evaluation for the given class.
 * @param  int $class_id	valid class ID
 * @return boolean				TRUE if cancel was successful. Else, FALSE.
 */
	private function cancel_evaluation($class_id) {
		if ($this->class_model->cancel_evaluation($class_id, $this->session->userdata('user_id'))) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Fetches access codes for a given class and generates a PDF file containing
 * the access codes.
 * @param  int $class_id	valid class ID
 * @return boolean				TRUE if pdf was successfully generated and temp files
 * 												deleted. Else, FALSE.
 */
	public function code($class_id) {
		$this->load->model('access_code_model');
		$class = $this->class_model->get_by_id($class_id);
		//check if ID is valid
		if ($class === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
			$data['page_title'] = "eValuation";
			$this->parser->parse('layouts/default', $data);
		} else if ($class->is_active == FALSE OR $class->is_done == TRUE) {
			$error_data = array(
				'error_title' => 'Class Evaluation Not Active',
				'error_message' => 'Evaluation for this class is not currently active. You are not allowed to generate access codes for this class.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
			$data['page_title'] = "eValuation";
			$this->parser->parse('layouts/default', $data);
		} else {
			$code_data['class'] = $class;
			$code_data['codes'] = $this->access_code_model->get_by_class($class_id);

			$data['body_content'] = $this->load->view('contents/admin/evaluation/code',$code_data,TRUE);
			$data['page_title'] = "eValuation";
			//render HTML page (for testing). comment out pdf_create line below.
			// $this->parser->parse('layouts/code', $data);


			//pdf
			$this->load->helper(array('wkhtmltopdf', 'file'));
			$html = $this->parser->parse('layouts/code', $data, TRUE);

			if (write_file('assets/temp/temp.php', $html)) {
				$filename = $class->year.'-'.format_semester($class->semester).' - '.$class->class_name.' '.$class->section;
				pdf_create($html, $filename);
				delete_files('assets/temp/');
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}

/**
 * Generate 16-character access codes for a given class.
 * @param  int $class_id	valid class ID
 * @return array					array containing generated codes
 */
	private function generate_code($class_id) {
		$this->load->model('access_code_model');
		$class = $this->class_model->get_by_id($class_id);

		$codes = array();

		//resulting length of code is $len * 2
		$len = 8;
		for ($i=0; $i < $class->number_of_students; $i++) {
			$codes[$i] = bin2hex(openssl_random_pseudo_bytes($len));
			//generate new code if code already exists
			while ($this->access_code_model->code_exists($codes[$i])) {
				$codes[$i] = bin2hex(openssl_random_pseudo_bytes($len));
			}
			$this->access_code_model->add($class->class_id, $codes[$i]);
		}

		return $codes;
	}
}

/* End of file evaluation.php */
/* Location: ./application/controllers/admin/evaluation.php */