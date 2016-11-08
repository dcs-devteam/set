<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			show_403_error();
		}
		$this->load->model('office_model');
		$this->load->model('student_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after set/admin/student.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all students enrolled in classes of the office of user.
 */
	public function view() {
		$view_data = array(
			'students' => $this->student_model->get_by_office($this->office_id),
			);

		$data['body_content'] = $this->load->view('contents/admin/student/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays all temporary passwords of students enrolled in classes of the office of user.
 */
	public function password() {
		$view_data = array(
			'passwords' => $this->student_model->get_temp_passwords($this->office_id),
			);

		$data['body_content'] = $this->load->view('contents/admin/student/password',$view_data,TRUE);
		$this->parser->parse('layouts/passwords', $data);
	}

/**
 * Displays the temporary password for given SAIS ID.
 * @param  int $sais_id valid SAIS ID
 */
	public function temp_password($sais_id = FALSE) {
		$student = $this->student_model->get_by_sais_id($sais_id);
		$temp_password_result = $this->student_model->get_temp_password($student->sais_id);
		$message = 'Temporary password for student '.$student->last_name.', '.$student->first_name.' ('.$student->sais_id.') is: <b>'.$temp_password_result->password.'</b>';
		$success = TRUE;
		$error = '';
		$temp_password_data = array('message' => $message, 'error' => $error, 'success' => $success);
		$data['body_content'] = $this->load->view('contents/admin/student/function_result',$temp_password_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}


/**
 * Displays the reset password confirmation form for a given SAIS ID.
 * Calls the reset_student_password function and displays whether the function
 * was successful or not.
 * @param  int $sais_id	valid SAIS ID
 */
	public function reset_password($sais_id = FALSE) {
		$student = $this->student_model->get_by_sais_id($sais_id);
		if ($student === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Student Exists',
				'error_message' => 'Record for the given SAIS ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through reset-password-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$reset_password_confirm_data = array(
					'student' => $student
					);

				$data['body_content'] = $this->load->view('contents/admin/student/reset_password_confirm',$reset_password_confirm_data,TRUE);
			} else {
				$reset_password_result = $this->reset_student_password($sais_id);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($reset_password_result) {
					$temp_password_result = $this->student_model->get_temp_password($student->sais_id);
					$message = 'Student password successfully reset. Temporary password for student '.$student->last_name.', '.$student->first_name.' is: <b>'.$temp_password_result->password.'</b>';
					$success = TRUE;
				} else {
					$message = 'Student password reset failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$reset_password_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/student/function_result',$reset_password_data,TRUE);
			}
		}

		$this->parser->parse('layouts/default', $data);
	}


/**
 * Passes the SAIS ID to student_model->reset_password for password reset
 * @param  int $sais_id	valid SAIS ID
 * @return boolean 				TRUE if password was successfully reset. Else, FALSE.
 */
	private function reset_student_password($sais_id = FALSE) {
		if ($this->student_model->reset_password($sais_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Reset all passwords of students enrolled in current classes of the office of user.
 */
	public function reset_passwords() {
		//must go through end-confirm form
		$confirm = $this->input->post('confirm');

		if ($confirm !== 'TRUE') {
			//confirmation dialog
			$data['body_content'] = $this->load->view('contents/admin/student/reset_passwords', '',TRUE);
		} else {
			$reset_passwords_result = $this->student_model->reset_passwords($this->office_id);

			$message = '';
			$error = '';
			$success = FALSE;
			if ($reset_passwords_result) {
				$message = 'Passwords are successfully reset.';
				$success = TRUE;
			} else {
				$message = 'Password resets failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$reset_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/student/function_result',$reset_data,TRUE);
		}
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file student.php */
/* Location: ./application/controllers/admin/student.php */