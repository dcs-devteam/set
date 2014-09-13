<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			$message_403 = 'You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.';
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after evaluation/admin/teacher.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all teachers of the office of user.
 */
	public function view() {
		$view_data = array(
			'teachers' => $this->teacher_model->get_by_office($this->office_id),
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/teacher/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Add Teacher form and calls form validation.
 * After successful form validation, it calls the add_teacher function that
 * passes the data for insertion to the database.
 * It then displays whether the add_teacher function is successful or not.
 */
	public function add() {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'first_name',
				'label' => 'First Name',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'last_name',
				'label' => 'Last Name',
				'rules' => 'trim|required|xss_clean|callback_unique_teacher'
				)
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/admin/teacher/add','',TRUE);
		} else {
			//validation success, add teacher
			$add_result = $this->add_teacher();
			$message = '';
			$error = '';
			$success = FALSE;
			if ($add_result) {
				$message = 'Teacher was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Teacher add failed.';
				$error = $this->db->_error_message();
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/teacher/function_result',$add_data,TRUE);
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes first_name, last_name, and office_id to teacher_model->add function for insertion
 * to the database.
 * @return boolean TRUE if teacher was successfully added. Else, FALSE.
 */
	private function add_teacher() {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');

		$result = $this->teacher_model->add($first_name, $last_name, $this->office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given first_name and last_name
 * must be unique and not found in the database.
 * @param  string $last_name	value from the last_name field in form
 * @return boolean						TRUE if given combination is unique. Else, FALSE.
 */
	public function unique_teacher($last_name) {
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}
		$first_name = $this->input->post('first_name');

		$teacher_id = $this->teacher_model->get_id($first_name, $last_name);
		if ($teacher_id) {
			$this->form_validation->set_message('unique_teacher','Teacher with given first name and last name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the Edit Teacher form and calls form validation.
 * Calls the edit_teacher function after successful validation.
 * Displays also the function result of the edit_teacher function.
 * @param  int $teacher_id	valid teacher ID
 */
	public function edit($teacher_id) {
		$teacher = $this->teacher_model->get_by_id($teacher_id);
		if ($teacher === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Teacher Exists',
				'error_message' => 'Record for the given teacher ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
				array(
					'field' => 'first_name',
					'label' => 'First Name',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'last_name',
					'label' => 'Last Name',
					'rules' => 'trim|required|xss_clean|callback_unique_new_teacher['.$teacher_id.']'
					)
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'teacher' => $teacher
					);
				$data['body_content'] = $this->load->view('contents/admin/teacher/edit',$edit_data,TRUE);
			} else {
				//validation success, add teacher
				$edit_result = $this->edit_teacher($teacher_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Teacher was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Teacher edit failed.';
					$error = $this->db->_error_message();
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/teacher/function_result',$edit_data,TRUE);
			}
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes data to the teacher_model->edit function for database update.
 * @param  int $teacher_id	valid teacher ID
 * @return boolean 				TRUE if teacher was successfully edited. Else, FALSE.
 */
	private function edit_teacher($teacher_id) {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');

		$result = $this->teacher_model->edit($teacher_id, $first_name, $last_name, $this->office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given first_name and last_name
 * must be unique or the same as the first_name and last_name
 * of the current teacher to be edited.
 * @param  string $last_name	value from last_name field in form
 * @param  int $teacher_id		current teacher ID of teacher to be edited
 * @return boolean					TRUE if given combination is unique or the same as
 * 													old values. Else, FALSE.
 */
	public function unique_new_teacher($last_name, $teacher_id) {
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}
		$first_name = $this->input->post('first_name');

		$result = $this->teacher_model->teacher_exists($first_name, $last_name);
		if ($result !== FALSE && $result->teacher_id !== $teacher_id) {
			$this->form_validation->set_message('unique_new_teacher','Teacher with given first name and last name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the delete confirmation form for a given teacher.
 * Calls the delete_teacher function and displays whether the function
 * was successful or not.
 * @param  int $teacher_id	valid teacher ID
 */
	public function delete($teacher_id) {
		$teacher = $this->teacher_model->get_by_id($teacher_id);
		if ($teacher === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Teacher Exists',
				'error_message' => 'Record for the given teacher ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'teacher' => $teacher
					);

				$data['body_content'] = $this->load->view('contents/admin/teacher/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_teacher($teacher_id);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($delete_result) {
					$message = 'Teacher was successfully deleted.';
					$success = TRUE;
				} else {
					$message = 'Teacher delete failed.';
					$error = $this->db->_error_message();
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/teacher/function_result',$delete_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the teacher ID to teacher_model->delete for database deletion
 * @param  int $teacher_id	valid teacher ID
 * @return boolean 				TRUE if teacher was successfully deleted. Else, FALSE.
 */
	private function delete_teacher($teacher_id) {
		if ($this->teacher_model->delete($teacher_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file teacher.php */
/* Location: ./application/controllers/admin/teacher.php */