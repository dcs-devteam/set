<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as superadmin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'superadmin') {
			show_403_error();
		}
		$this->load->model('account_model');
		$this->load->model('office_model');
	}

/**
 * Default function when there is no URI segment after superadmin/admin.
 * Calls admin/view.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays list of admins.
 */
	public function view() {
		$view_data = array(
			'admins' => $this->account_model->get_by_role('admin')
			);

		$data['body_content'] = $this->load->view('contents/superadmin/admin/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Add Admin form and calls form validation.
 * After successful form validation, it calls the add_admin function that
 * passes the data for insertion to the database.
 * It then displays whether the add_admin function is successful or not.
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
				'rules' => 'trim|required|xss_clean|callback_unique_name'
				),
			array(
				'field' => 'email_address',
				'label' => 'Email Address',
				'rules' => 'trim|required|xss_clean|valid_email|callback_unique_email'
				),
			array(
				'field' => 'office',
				'label' => 'Office',
				'rules' => 'trim|required|xss_clean'
				),
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$form_data = array(
				'offices' => $this->office_model->get()
				);
			$data['body_content'] = $this->load->view('contents/superadmin/admin/add',$form_data,TRUE);
		} else {
			//validation success, add admin
			$add_result = $this->add_admin();
			$message = '';
			$error = '';
			$success = FALSE;
			if ($add_result) {
				$message = 'Admin was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Admin add failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/superadmin/admin/function_result',$add_data,TRUE);
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes first_name, last_name, email_address, and office_id to account_model->add function for insertion
 * to the database.
 * @return boolean TRUE if account was successfully added. Else, FALSE.
 */
	private function add_admin() {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email_address = $this->input->post('email_address');
		$office_name = $this->input->post('office');
		$role = 'admin';

		//office - add if not exists
		$office = $this->office_model->get_by_name($office_name);
		if (!$office) {
			$office = $this->office_model->get_by_id($this->office_model->add($office_name));
		}

		//generate password
		$password = $this->generate_password($first_name, $last_name);
		
		$result = $this->account_model->add($first_name, $last_name, $email_address, $password, $role, $office->office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Random password generator.
 * @return string		password generated
 */
	private function generate_password($first_name, $last_name) {
		return mb_strtolower($first_name[0].$last_name);
	}

/**
 * Form Validation rule. A given first_name and last_name
 * must be unique and not found in the database.
 * @param  string $last_name	value from the last_name field in form
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function unique_name($last_name) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		$first_name = $this->input->post('first_name');

		$user_id = $this->account_model->get_id($first_name, $last_name);
		if ($user_id) {
			$this->form_validation->set_message('unique_name','Account with given first name and last name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Form Validation rule. A given email_address
 * must be unique and not found in the database.
 * @param  string $email_address	value from the email_address field in form
 * @return boolean								TRUE if given value is unique. Else, FALSE.
 */
	public function unique_email($email_address) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		if ($this->account_model->email_exists($email_address)) {
			$this->form_validation->set_message('unique_email','Account with given email address already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the Edit Admin form and calls form validation.
 * Calls the edit_admin function after successful validation.
 * Displays also the function result of the edit_admin function.
 * @param  int $user_id	valid user ID
 */
	public function edit($user_id = FALSE) {
		$this->load->model('evaluator_model');

		$admin = $this->account_model->get_by_id($user_id);
		if ($admin === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Account Exists',
				'error_message' => 'Record for the given account ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($this->evaluator_model->has_active_evaluation($user_id, $admin->office_id)) {
			$error_data = array(
				'error_title' => 'Edit Disallowed',
				'error_message' => 'User is currently conducting an evaluation. Wait until the evaluation has finished before editing the account.'
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
					'rules' => 'trim|required|xss_clean|callback_unique_new_name['.$user_id.']'
					),
				array(
					'field' => 'email_address',
					'label' => 'Email Address',
					'rules' => 'trim|required|xss_clean|valid_email|callback_unique_new_email['.$user_id.']'
					),
				array(
					'field' => 'office',
					'label' => 'Office',
					'rules' => 'trim|required|xss_clean'
					),
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'admin' => $admin,
					'offices' => $this->office_model->get()
					);
				$data['body_content'] = $this->load->view('contents/superadmin/admin/edit',$edit_data,TRUE);
			} else {
				//validation success, edit admin
				$edit_result = $this->edit_admin($user_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Account was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Account edit failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/superadmin/admin/function_result',$edit_data,TRUE);
			}
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes data to the account_model->edit function for database update.
 * @param  int $user_id	valid user ID
 * @return boolean 			TRUE if account was successfully edited. Else, FALSE.
 */
	private function edit_admin($user_id) {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email_address = $this->input->post('email_address');
		$password = FALSE;
		$role = 'admin';
		$office_name = $this->input->post('office');

		//office - add if not exists
		$office = $this->office_model->get_by_name($office_name);
		if (!$office) {
			$office = $this->office_model->get_by_id($this->office_model->add($office_name));
		}

		$result = $this->account_model->edit($user_id, $first_name, $last_name, $email_address, $password, $role, $office->office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given first_name and last_name
 * must be unique or the same as the first_name and last_name
 * of the current account to be edited.
 * @param  string $last_name	value from the last_name field in form
 * @param  int $user_id				current user ID of account to be edited
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function unique_new_name($last_name, $user_id) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		$first_name = $this->input->post('first_name');

		$result = $this->account_model->get_id($first_name, $last_name);
		if ($result !== FALSE && $result !== $user_id) {
			$this->form_validation->set_message('unique_new_name','Account with given first name and last name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Form Validation rule. A given email_address
 * must be unique or the same as the email_address
 * of the current account to be edited.
 * @param  string $email_address	value from the email_address field in form
 * @param  int $user_id						current user ID of account to be edited
 * @return boolean								TRUE if given value is unique. Else, FALSE.
 */
	public function unique_new_email($email_address, $user_id) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
		$result = $this->account_model->email_exists($email_address);
		if ($result !== FALSE && $result->user_id !== $user_id) {
			$this->form_validation->set_message('unique_new_email','Account with given email address already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the delete confirmation form for a given account.
 * Calls the delete_admin function and displays whether the function
 * was successful or not.
 * @param  int $user_id	valid user ID
 */
	public function delete($user_id = FALSE) {
		$this->load->model('evaluator_model');

		$admin = $this->account_model->get_by_id($user_id);
		if ($admin === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Account Exists',
				'error_message' => 'Record for the given account ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($this->evaluator_model->has_active_evaluation($user_id, $admin->office_id)) {
			$error_data = array(
				'error_title' => 'Delete Disallowed',
				'error_message' => 'User is currently conducting an evaluation. Wait until the evaluation has finished before deleting the account.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'admin' => $admin
					);

				$data['body_content'] = $this->load->view('contents/superadmin/admin/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_admin($user_id);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($delete_result) {
					$message = 'Account was successfully deleted.';
					$success = TRUE;
				} else {
					$message = 'Account delete failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/superadmin/admin/function_result',$delete_data,TRUE);
			}
		}

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the account ID to account_model->delete for database deletion
 * @param  int $user_id	valid user ID
 * @return boolean 				TRUE if account was successfully deleted. Else, FALSE.
 */
	private function delete_admin($user_id) {
		if ($this->account_model->delete($user_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/superadmin/admin.php */