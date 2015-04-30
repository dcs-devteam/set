<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			show_403_error();
		}
		$this->load->model('office_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after set/admin/evaluation.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays controls for managing the evaluation period.
 */
	public function view() {
		$view_data = array(
			
			);

		$data['body_content'] = $this->load->view('contents/admin/evaluation/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Enables the evaluation period.
 * @return void
 */
	public function enable() {
		$enable_evaluation_result = $this->office_model->enable_evaluation($this->office_id);

		$message = '';
		$error = '';
		$success = FALSE;
		if ($enable_evaluation_result) {
			$message = 'Evaluation was successfully enabled.';
			$success = TRUE;
		} else {
			$message = 'Evaluation enable failed.';
			if ($this->db->_error_message()) {
				$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
			}
		}
		$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
		$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$delete_data,TRUE);

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Disables the evaluation period.
 * @return void
 */
	public function disable() {
		//must go through disable-confirm form
		$confirm = $this->input->post('confirm');

		if ($confirm !== 'TRUE') {
			//confirmation dialog
			$data['body_content'] = $this->load->view('contents/admin/evaluation/disable_confirm', '',TRUE);
		} else {
			$disable_evaluation_result = $this->office_model->disable_evaluation($this->office_id);

			$message = '';
			$error = '';
			$success = FALSE;
			if ($disable_evaluation_result) {
				$message = 'Evaluation was successfully disabled.';
				$success = TRUE;
			} else {
				$message = 'Evaluation disable failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$delete_data,TRUE);

		}

		$this->parser->parse('layouts/default', $data);
	}

/**
 * Marks the evaluation period as complete.
 * @return void
 */
	public function end() {
		//must go through end-confirm form
		$confirm = $this->input->post('confirm');

		if ($confirm !== 'TRUE') {
			//confirmation dialog
			$data['body_content'] = $this->load->view('contents/admin/evaluation/end_confirm', '',TRUE);
		} else {
			$end_evaluation_result = $this->office_model->end_evaluation($this->office_id);

			$message = '';
			$error = '';
			$success = FALSE;
			if ($end_evaluation_result) {
				$message = 'Evaluation was successfully marked as done.';
				$success = TRUE;
			} else {
				$message = 'Mark evaluation as done failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$delete_data,TRUE);
		}

		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file evaluation.php */
/* Location: ./application/controllers/admin/evaluation.php */