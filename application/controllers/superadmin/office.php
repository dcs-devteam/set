<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as superadmin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'superadmin') {
			show_403_error();
		}
		$this->load->model('office_model');
	}

/**
 * Default function when there is no URI segment after superadmin/office.
 * Calls office/view.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays list of offices.
 */
	public function view() {
		$view_data = array(
			'offices' => $this->office_model->get()
			);

		$data['body_content'] = $this->load->view('contents/superadmin/office/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Add Office form and calls form validation.
 * After successful form validation, it calls the add_office function that
 * passes the data for insertion to the database.
 * It then displays whether the add_office function is successful or not.
 */
	public function add() {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'name',
				'label' => 'Office Name',
				'rules' => 'trim|required|xss_clean|callback_unique_name'
				),
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/superadmin/office/add','',TRUE);
		} else {
			//validation success, add office
			$add_result = $this->add_office();
			$message = '';
			$error = '';
			$success = FALSE;
			if ($add_result) {
				$message = 'Office was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Office add failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/superadmin/office/function_result',$add_data,TRUE);
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes name to office_model->add function for insertion
 * to the database.
 * @return boolean TRUE if office was successfully added. Else, FALSE.
 */
	private function add_office() {
		$name = $this->input->post('name');
		
		$result = $this->office_model->add($name);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given name
 * must be unique and not found in the database.
 * @param  string $name	value from the name field in form
 * @return boolean						TRUE if given value is unique. Else, FALSE.
 */
	public function unique_name($name) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$office = $this->office_model->get_by_name($name);
		if ($office) {
			$this->form_validation->set_message('unique_name','The given office name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the Edit Office form and calls form validation.
 * Calls the edit_office function after successful validation.
 * Displays also the function result of the edit_office function.
 * @param  int $year			valid office id
 */
	public function edit($office_id = FALSE) {
		$office = $this->office_model->get_by_id($office_id);
		if ($office === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Office Exists',
				'error_message' => 'Record for the given office ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
				array(
					'field' => 'name',
					'label' => 'Office Name',
					'rules' => 'trim|required|xss_clean|callback_unique_new_name['.$office_id.']'
					)
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'office' => $office
					);
				$data['body_content'] = $this->load->view('contents/superadmin/office/edit',$edit_data,TRUE);
			} else {
				//validation success, edit office
				$edit_result = $this->edit_office($office_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Office was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Office edit failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/superadmin/office/function_result',$edit_data,TRUE);
			}
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes name to office_model->edit function for database update.
 * @return boolean TRUE if office was successfully edited. Else, FALSE.
 */
	private function edit_office($office_id) {
		$name = $this->input->post('name');
		
		$result = $this->office_model->edit($name, $office_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given office name must be unique or 
 * the same as the office name of the entry to be edited.
 * @param  string $name					value from the name field in form
 * @param  int 		$office_id		current office ID of office to be edited
 * @return boolean							TRUE if given value is unique. Else, FALSE.
 */
	public function unique_new_name($name, $office_id) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$office = $this->office_model->get_by_name($name);
		if ($office !== FALSE && $office->office_id !== $office_id) {
			$this->form_validation->set_message('unique_new_name','The given office name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

/**
 * Displays the delete confirmation form for a given office id.
 * Calls the delete_office function and displays whether the function
 * was successful or not.
 * @param  int $office_id			valid office id
 */
	public function delete($office_id = FALSE) {
		$office = $this->office_model->get_by_id($office_id);
		if ($office === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Office Exists',
				'error_message' => 'Record for the given office ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'office' => $office
					);

				$data['body_content'] = $this->load->view('contents/superadmin/office/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_office($office_id);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($delete_result) {
					$message = 'Office was successfully deleted.';
					$success = TRUE;
				} else {
					$message = 'Office delete failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/superadmin/office/function_result',$delete_data,TRUE);
			}
		}

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the office_id to office_model->delete for database deletion
 * @param  int $office_id			valid office id
 * @return boolean 				TRUE if successfully deleted. Else, FALSE.
 */
	public function delete_office($office_id) {
		if ($this->office_model->delete($office_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file office.php */
/* Location: ./application/controllers/superadmin/office.php */