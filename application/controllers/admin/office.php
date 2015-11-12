<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			show_403_error();
		}
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after set/admin/office.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays office details of user.
 */
	public function view() {
		$office = $this->office_model->get_by_id($this->office_id);
		$chair = null;
		if (!empty($office->chair_id)) {
			$chair = $this->teacher_model->get_by_id($office->chair_id);
		}

		$view_data = array(
			'office' => $office,
			'chair' => $chair
			);

		$data['body_content'] = $this->load->view('contents/admin/office/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Edit Office form and calls form validation.
 * After successful form validation, it calls the edit_office function that
 * passes the data for update to the database.
 * It then displays whether the edit_office function is successful or not.
 */
	public function edit($office_id = FALSE) {
		$office = $this->office_model->get_by_id($office_id);
		$chair = null;
		if (!empty($office->chair_id)) {
			$chair = $this->teacher_model->get_by_id($office->chair_id);
		}
		if ($office === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Office Exists',
				'error_message' => 'Record for the given office ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($office_id != $this->office_id) {
			$error_data = array(
				'error_title' => 'Office Edit Denied',
				'error_message' => 'You are not allowed to edit the details of offices you are not assigned to.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		}	else {
			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
				array(
					'field' => 'name',
					'label' => 'Office Name',
					'rules' => 'trim|required|xss_clean|callback_unique_new_office['.$office_id.']'
					),
				array(
					'field' => 'chair',
					'label' => 'Chair',
					'rules' => 'trim|required|xss_clean'
					)
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'office' => $office,
					'chair' => $chair,
					'teachers' => $this->teacher_model->get_by_office($office_id),
					);
				$data['body_content'] = $this->load->view('contents/admin/office/edit',$edit_data,TRUE);
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
				$data['body_content'] = $this->load->view('contents/admin/office/function_result',$edit_data,TRUE);
			}
		}


		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes data to the office_model->edit function for database update.
 * @param  int $office_id	valid office ID
 * @return boolean 				TRUE if office was successfully edited. Else, FALSE.
 */
	private function edit_office($office_id) {
		$office_name = $this->input->post('name');
		$chair = $this->input->post('chair');

		$chair_name = array_map('trim',explode(",",$chair));
		$first_name = $chair_name[1];
		$last_name = $chair_name[0];
		$chair_id = $this->teacher_model->get_id($first_name, $last_name);
		if (!$chair_id) {
			$chair_id = $this->teacher_model->add($first_name, $last_name, $this->office_id);
		}

		$result = $this->office_model->edit($office_name, $office_id, $chair_id);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given office_name
 * must be unique or the same as the office_name
 * of the current office to be edited.
 * @param  string $office_name	value from name field in form
 * @return boolean							TRUE if given combination is unique or the same as
 * 														  old values. Else, FALSE.
 */
	public function unique_new_office($office_name) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$result = $this->office_model->office_exists($office_name);
		if ($result !== FALSE && $result->office_id !== $this->office_id) {
			$this->form_validation->set_message('unique_new_office','Office with given office name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}

/* End of file office.php */
/* Location: ./application/controllers/admin/office.php */