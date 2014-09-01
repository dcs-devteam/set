<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	function __construct() {
		parent::__construct();
		if (empty($this->session->userdata('role'))) {
			redirect(base_url());
		}
		$this->load->model('office_model');
		$this->load->model('account_model');
		$this->office_id = $this->session->userdata('office_id');		
		$this->user_id = $this->session->userdata('user_id');
	}

// TODO generate and decode login_string
/**
 * Displays the Edit Password form and calls form validation.
 * After successful form validation, it calls the change_password function that
 * passes the data for insertion to the database.
 * It then displays whether the change_password function is successful or not.
 */
	public function password($login_string = FALSE) {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'current_password',
				'label' => 'Current Password',
				'rules' => 'trim|required|xss_clean|callback_verify_password'
				),
			array(
				'field' => 'new_password',
				'label' => 'New Password',
				'rules' => 'trim|required|xss_clean|'
				),
			array(
				'field' => 'confirm_password',
				'label' => 'Confirm Password',
				'rules' => 'trim|required|xss_clean|callback_same_new_passwords'
				)
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/account/change_password','',TRUE);
		} else {
			//validation success, add account
			$password_result = $this->change_password($this->user_id);
			$message = '';
			$error = '';
			$success = FALSE;
			if ($password_result) {
				$message = 'Password was successfully changed.';
				$success = TRUE;
			} else {
				$message = 'Password change failed.';
				$error = $this->db->_error_message();
			}
			$password_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/account/function_result',$password_data,TRUE);
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes data to the account_model->change_password function for database update.
 * @param  int $user_id	valid user ID
 * @return boolean 			TRUE if account was successfully edited. Else, FALSE.
 */
	private function change_password($user_id) {
		$password = $this->input->post('new_password');

		$result = $this->account_model->change_password($user_id, $password);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. The given current password must be valid.
 * @param  string $current_password	value from the current_password field in form
 * @param  int $user_id			current user ID of account to be checked
 * @return boolean								TRUE if given value is valid. Else, FALSE.
 */
	public function verify_password($current_password) {
		$result = $this->account_model->same_passwords($this->user_id, $current_password);
		if ($result !== TRUE) {
			$this->form_validation->set_message('verify_password','Current Password value is incorrect.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Form Validation rule. The given new_password and confirm_password values must be the same.
 * @param  string $current_password	value from the current_password field in form
 * @param  int $user_id			current user ID of account to be checked
 * @return boolean								TRUE if given value is valid. Else, FALSE.
 */
	public function same_new_passwords($confirm_password) {
		$new_password = $this->input->post('new_password');
		if ($new_password !== $confirm_password) {
			$this->form_validation->set_message('same_new_passwords','The new passwords do not match.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

}

/* End of file account.php */
/* Location: ./application/controllers/account.php */