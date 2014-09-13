<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('office_model');
		$this->load->model('account_model');
		$this->office_id = $this->session->userdata('office_id');		
		$this->user_id = $this->session->userdata('user_id');
	}

/**
 * Displays the Edit Password form and calls form validation.
 * After successful form validation, it calls the change_password function that
 * passes the data for insertion to the database.
 * It then displays whether the change_password function is successful or not.
 */
	public function password() {
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		}
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
			//validation success, change password
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

		//old values
		$old_account = $this->account_model->get_by_id($user_id);

		$result = $this->account_model->change_password($user_id, $password);
		if ($result) {
			if (MD5($password) !== $old_account->password) {
				// send email
				$this->load->library('email');
				//TODO change to eValuation email
				$this->email->from('to_be_implemented@gmail.com');
				$this->email->reply_to('to_be_implemented@gmail.com');
				$this->email->to($old_account->email_address);
				$this->email->subject('eValuation Account Password Change');

				//email body
				$email_data = array(
					'account' => array(
						'first_name' => $old_account->first_name,
						'last_name' => $old_account->last_name,
						'email_address' => $old_account->email_address,
						'role' => $old_account->role,
						),
					);
				
				$this->email->message($this->load->view('contents/account/email_change_password',$email_data, TRUE));
				$this->email->send();

				// echo $this->email->print_debugger();
			}
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
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}
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
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}
		$new_password = $this->input->post('new_password');
		if ($new_password !== $confirm_password) {
			$this->form_validation->set_message('same_new_passwords','The new passwords do not match.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays reset password form and calls send_reset_email for the sending of email.
 */
	public function reset_password() {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'email_address',
				'label' => 'Email Address',
				'rules' => 'trim|required|xss_clean'
				)
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/account/reset_password','',TRUE);
		} else {
			//validation success, send email
			$this->send_reset_email();
			$data['body_content'] = $this->load->view('contents/account/reset_email_sent','',TRUE);
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Sends reset password link to email address provided in reset password form.
 */
	private function send_reset_email() {
		$email_address = $this->input->post('email_address');
		$account = $this->account_model->get_by_email($email_address);
		if ($account !== FALSE) {
			//email current address
			$this->load->library('email');
			$this->email->from($this->session->userdata('email_address'), $this->session->userdata('first_name').' '.$this->session->userdata('last_name').' (eValuation Administrator)');
			$this->email->reply_to($this->session->userdata('email_address'), $this->session->userdata('first_name').' '.$this->session->userdata('last_name').' (eValuation Administrator)');
			$this->email->to($email_address);
			$this->email->subject('eValuation Reset Password Request');

				//email body
				$email_data = array();
				if (!empty($account->user_id)) {
					$user_data = array(
						'user_id' => $account->user_id,
						'email_address' => $account->email_address
						);

					$this->load->library('encrypt');
					$email_data['user_string'] = base64_encode($this->encrypt->encode(serialize($user_data)));
				}

				$this->email->message($this->load->view('contents/account/email_reset_password',$email_data, TRUE));
			
			$this->email->send();

			// echo $this->email->print_debugger();
		} else {
			//add delay to look as if sending email
			sleep(3);
		}
	}

/**
 * Decodes user string and calls change_password with the new password.
 * @param  string $user_string encrypted string containing user_id and email_address
 */
	public function forgot_password($user_string = FALSE) {
		if ($user_string !== FALSE) {
			$this->load->library('encrypt');
			if (!$user_data = unserialize($this->encrypt->decode(base64_decode($user_string)))) {
				show_error('The value in the URL after .../forgot_password/ is invalid. Make sure that the value is correct before trying again.');
			}

			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
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
				$view_data = array(
					'user_string' => $user_string,
					'email_address' => $user_data['email_address']
					);
				$data['body_content'] = $this->load->view('contents/account/forgot_password',$view_data,TRUE);
			} else {
				//validation success, change password

				$password_result = $this->change_password($user_data['user_id']);
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
		} else {
			//display error
			show_error('The function needs to have a parameter. Make sure that the value is correct before trying again.');
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */