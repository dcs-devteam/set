<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yearsem extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as superadmin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'superadmin') {
			show_403_error();
		}
		$this->load->model('year_semester_model');
	}

/**
 * Default function when there is no URI segment after set/superadmin/yearsem.
 * Calls superadmin/view.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays list of year and semesters.
 */
	public function view() {
		$view_data = array(
			'current' => $this->year_semester_model->get_current(),
			'year_semesters' => $this->year_semester_model->get()
			);

		$data['body_content'] = $this->load->view('contents/superadmin/yearsem/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Add Year and Semester form and calls form validation.
 * After successful form validation, it calls the add_year_semester function that
 * passes the data for insertion to the database.
 * It then displays whether the add_year_semester function is successful or not.
 */
	public function add() {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'year',
				'label' => 'Academic Year',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'semester',
				'label' => 'Semester',
				'rules' => 'trim|required|xss_clean|callback_unique_year_and_semester'
				),
			array(
				'field' => 'start_date',
				'label' => 'Start Date',
				'rules' => 'trim|required|xss_clean|callback_valid_date'
				),
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$form_data = array(
				'semesters' => array(
					'1' => '1st Semester',
					'2' => '2nd Semester',
					'3' => 'Summer Semester'
					)
				);
			//years
			$form_data['years'] = array();
			$current_year = date("Y");
			for ($i=0; $i < 5; $i++) { 
				$form_data['years'][$current_year + $i] = format_year($current_year + $i);
			}
			$data['body_content'] = $this->load->view('contents/superadmin/yearsem/add',$form_data,TRUE);
		} else {
			//validation success, add yearsem
			$add_result = $this->add_year_semester();
			$message = '';
			$error = '';
			$success = FALSE;
			if ($add_result) {
				$message = 'Year and Semester was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Year and Semester add failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/superadmin/yearsem/function_result',$add_data,TRUE);
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes year, semester, and start_date to year_semester_model->add function for insertion
 * to the database.
 * @return boolean TRUE if year and semester was successfully added. Else, FALSE.
 */
	private function add_year_semester() {
		$year = $this->input->post('year');
		$semester = $this->input->post('semester');
		$start_date = $this->input->post('start_date');
		
		$result = $this->year_semester_model->add($year, $semester, $start_date);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given year and semester
 * must be unique and not found in the database.
 * @param  string $semester	value from the semester field in form
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function unique_year_and_semester($semester) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		$year = $this->input->post('year');

		$year_semester = $this->year_semester_model->get_by_year_semester($year, $semester);
		if ($year_semester) {
			$this->form_validation->set_message('unique_year_and_semester','The given year and semester already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Form Validation rule. The given start_date must be a valid date.
 * @param  string $start_date	value from the start_date field in form
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function valid_date($date) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		$format = 'Y-m-d';
		// $date = date($format, strtotime($start_date));
		$d = DateTime::createFromFormat($format, $date);
		// var_dump($d->format($format));
		if ($d && $d->format($format) == $date) {
			return TRUE;
		} else {
			$this->form_validation->set_message('valid_date','The given date is not valid.');
			return FALSE;
		}
	}

/**
 * Displays the Edit Year and Semester form and calls form validation.
 * Calls the edit_year_semester function after successful validation.
 * Displays also the function result of the edit_year_semester function.
 * @param  int $year			valid year
 * @param  int $semester	valid semester
 */
	public function edit($year = FALSE, $semester = FALSE) {
		$year_semester = $this->year_semester_model->get_by_year_semester($year, $semester);
		if ($year_semester === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Year and Semester Exists',
				'error_message' => 'Record for the given year and semester does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
				array(
					'field' => 'year',
					'label' => 'Academic Year',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'semester',
					'label' => 'Semester',
					'rules' => 'trim|required|xss_clean|callback_unique_new_year_and_semester['.$year.','.$semester.']'
					),
				array(
					'field' => 'start_date',
					'label' => 'Start Date',
					'rules' => 'trim|required|xss_clean|callback_valid_date'
					),
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'year_semester' => $year_semester,
					'semesters' => array(
						'1' => '1st Semester',
						'2' => '2nd Semester',
						'3' => 'Summer Semester'
						)
					);
				//years
				$edit_data['years'] = array();
				$current_year = date("Y");
				for ($i=0; $i < 5; $i++) { 
					$edit_data['years'][$current_year + $i] = format_year($current_year + $i);
				}
				$data['body_content'] = $this->load->view('contents/superadmin/yearsem/edit',$edit_data,TRUE);
			} else {
				//validation success, edit year and semester
				$edit_result = $this->edit_year_semester($year, $semester);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Year and semester was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Year and semester edit failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/superadmin/yearsem/function_result',$edit_data,TRUE);
			}
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes year, semester, and start_date to year_semester_model->edit function for database update.
 * @return boolean TRUE if year and semester was successfully edited. Else, FALSE.
 */
	private function edit_year_semester($old_year, $old_semester) {
		$year = $this->input->post('year');
		$semester = $this->input->post('semester');
		$start_date = $this->input->post('start_date');
		
		$result = $this->year_semester_model->edit($year, $semester, $start_date, $old_year, $old_semester);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given year and semester must be unique or 
 * the same as the year and semester of the entry to be edited.
 * @param  string $semester	value from the semester field in form
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function unique_new_year_and_semester($semester, $old_year_semester_string) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		$year = $this->input->post('year');

		$old_year_semester = array_map('trim',explode(",",$old_year_semester_string));
		$old_year = $old_year_semester[0];
		$old_semester = $old_year_semester[1];

		$year_semester = $this->year_semester_model->get_by_year_semester($year, $semester);
		if ($year_semester !== FALSE && !($old_year === $year OR $old_semester === $semester)) {
			$this->form_validation->set_message('unique_new_year_and_semester','The given year and semester already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the delete confirmation form for a given year and semester.
 * Calls the delete_year_semester function and displays whether the function
 * was successful or not.
 * @param  int $year			valid year
 * @param  int $semester	valid semester
 */
	public function delete($year = FALSE, $semester = FALSE) {
		$this->load->model('class_model');
		$year_semester = $this->year_semester_model->get_by_year_semester($year, $semester);
		if ($year_semester === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Year and Semester Exists',
				'error_message' => 'Record for the given year and semester does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($this->class_model->has_classes($year, $semester)) {
			//DB constraint: year and semester must not have any connected class.
			$error_data = array(
				'error_title' => 'Cannot Delete Year and Semester',
				'error_message' => 'The given year and semester ('.format_semester($semester).' Semester/A.Y. '.format_year($year).') has classes attached to it. To be able to delete a year and semester, no classes should be attached.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'year_semester' => $year_semester
					);

				$data['body_content'] = $this->load->view('contents/superadmin/yearsem/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_year_semester($year, $semester);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($delete_result) {
					$message = 'Year and semester was successfully deleted.';
					$success = TRUE;
				} else {
					$message = 'Year and semester delete failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/superadmin/yearsem/function_result',$delete_data,TRUE);
			}
		}

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the year and semester to year_semester_model->delete for database deletion
 * @param  int $year			valid year
 * @param  int $semester	valid semester
 * @return boolean 				TRUE if successfully deleted. Else, FALSE.
 */
	public function delete_year_semester($year, $semester) {
		if ($this->year_semester_model->delete($year, $semester)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Starts the evaluation period for given year and semester.
 * @param  int $year     valid year
 * @param  int $semester valid semester
 * @return void
 */
	public function start_evaluation($year, $semester) {
		$start_evaluation_result = $this->year_semester_model->start_evaluation($year, $semester);

		$message = '';
		$error = '';
		$success = FALSE;
		if ($start_evaluation_result) {
			$message = 'Evaluation for '.format_semester($semester).' Semester/A.Y. '.format_year($year).' was successfully enabled.';
			$success = TRUE;
		} else {
			$message = 'Evaluation enable for '.format_semester($semester).' Semester/A.Y. '.format_year($year).' failed.';
			if ($this->db->_error_message()) {
				$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
			}
		}
		$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
		$data['body_content'] = $this->load->view('contents/superadmin/yearsem/function_result',$delete_data,TRUE);

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Stops the evaluation period for given year and semester.
 * @param  int $year     valid year
 * @param  int $semester valid semester
 * @return void
 */
	public function stop_evaluation($year, $semester) {
		$stop_evaluation_result = $this->year_semester_model->stop_evaluation($year, $semester);

		$message = '';
		$error = '';
		$success = FALSE;
		if ($stop_evaluation_result) {
			$message = 'Evaluation for '.format_semester($semester).' Semester/A.Y. '.format_year($year).' was successfully disabled.';
			$success = TRUE;
		} else {
			$message = 'Evaluation disable for '.format_semester($semester).' Semester/A.Y. '.format_year($year).' failed.';
			if ($this->db->_error_message()) {
				$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
			}
		}
		$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
		$data['body_content'] = $this->load->view('contents/superadmin/yearsem/function_result',$delete_data,TRUE);

		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file yearsem.php */
/* Location: ./application/controllers/superadmin/yearsem.php */