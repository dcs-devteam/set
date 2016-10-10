<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct() {
		parent::__construct();
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'superadmin') {
			show_403_error();
		}
		$this->load->model('office_model');
	}

/**
 * Default function when there is no URI segment after set/superadmin/evaluation.
 * Redirects to superadmin/office.
 */
	public function index() {
		redirect(base_url('superadmin/office'));
	}

/**
 * Starts the evaluation period.
 * @return void
 */
	public function start($office_id) {
		$this->office_model->start_evaluation($office_id);
		$this->index();
	}

/**
 * Ends the evaluation period.
 * @return void
 */
	public function end($office_id) {
		$this->office_model->end_evaluation($office_id);
		$this->index();
	}
}

/* End of file evaluation.php */
/* Location: ./application/controllers/superadmin/evaluation.php */
