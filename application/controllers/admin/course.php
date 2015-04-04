<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			show_403_error();
		}
		$this->load->model('office_model');
		$this->load->model('course_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after set/admin/course.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all courses of the office of user.
 */
	public function view() {
		$view_data = array(
			'courses' => $this->course_model->get_by_office($this->office_id),
			);

		$data['body_content'] = $this->load->view('contents/admin/course/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Add Course form and calls form validation.
 * After successful form validation, it calls the add_course function that
 * passes the data for insertion to the database.
 * It then displays whether the add_course function is successful or not.
 */
	public function add() {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'course_name',
				'label' => 'Course Name',
				'rules' => 'trim|required|xss_clean|callback_unique_course'
				)
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/admin/course/add','',TRUE);
		} else {
			//validation success, add course
			$add_result = $this->add_course();
			$message = '';
			$error = '';
			$success = FALSE;
			if ($add_result) {
				$message = 'Course was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Course add failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/course/function_result',$add_data,TRUE);
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes course_name and office_id to course_model->add function for insertion
 * to the database.
 * @return boolean TRUE if course was successfully added. Else, FALSE.
 */
	private function add_course() {
		$course_name = $this->input->post('course_name');

		$result = $this->course_model->add($course_name, $this->office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given course_name
 * must be unique and not found in the database.
 * @param  string $course_name	value from the course_name field in form
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function unique_course($course_name) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$course_id = $this->course_model->get_id($course_name);
		if ($course_id) {
			$this->form_validation->set_message('unique_course','Course with given course name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the Edit Course form and calls form validation.
 * Calls the edit_course function after successful validation.
 * Displays also the function result of the edit_course function.
 * @param  int $course_id	valid course ID
 */
	public function edit($course_id = FALSE) {
		$course = $this->course_model->get_by_id($course_id);
		if ($course === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Course Exists',
				'error_message' => 'Record for the given course ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
				array(
					'field' => 'course_name',
					'label' => 'Course Name',
					'rules' => 'trim|required|xss_clean|callback_unique_new_course['.$course_id.']'
					)
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'course' => $course
					);
				$data['body_content'] = $this->load->view('contents/admin/course/edit',$edit_data,TRUE);
			} else {
				//validation success, edit course
				$edit_result = $this->edit_course($course_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Course was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Course edit failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/course/function_result',$edit_data,TRUE);
			}
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes data to the course_model->edit function for database update.
 * @param  int $course_id	valid course ID
 * @return boolean 				TRUE if course was successfully edited. Else, FALSE.
 */
	private function edit_course($course_id) {
		$course_name = $this->input->post('course_name');

		$result = $this->course_model->edit($course_id, $course_name, $this->office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given course_name
 * must be unique or the same as the course_name
 * of the current course to be edited.
 * @param  string $course_name	value from course_name field in form
 * @param  int $course_id				current course ID of course to be edited
 * @return boolean							TRUE if given combination is unique or the same as
 * 														  old values. Else, FALSE.
 */
	public function unique_new_course($course_name, $course_id) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$result = $this->course_model->course_exists($course_name);
		if ($result !== FALSE && $result->course_id !== $course_id) {
			$this->form_validation->set_message('unique_new_course','Course with given course name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the delete confirmation form for a given course.
 * Calls the delete_course function and displays whether the function
 * was successful or not.
 * @param  int $course_id	valid course ID
 */
	public function delete($course_id = FALSE) {
		$course = $this->course_model->get_by_id($course_id);
		if ($course === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Course Exists',
				'error_message' => 'Record for the given course ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'course' => $course
					);

				$data['body_content'] = $this->load->view('contents/admin/course/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_course($course_id);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($delete_result) {
					$message = 'Course was successfully deleted.';
					$success = TRUE;
				} else {
					$message = 'Course delete failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/course/function_result',$delete_data,TRUE);
			}
		}

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the course ID to course_model->delete for database deletion
 * @param  int $course_id	valid course ID
 * @return boolean 				TRUE if course was successfully deleted. Else, FALSE.
 */
	private function delete_course($course_id) {
		if ($this->course_model->delete($course_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file course.php */
/* Location: ./application/controllers/admin/course.php */