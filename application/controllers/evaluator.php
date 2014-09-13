<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluator extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as evaluator
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'evaluator') {
			show_403_error();
		}
	}

/**
 * Redirect to admin/evaluation
 */
	public function index() {
		redirect(base_url('admin/evaluation'));
	}
}

/* End of file evaluator.php */
/* Location: ./application/controllers/evaluator.php */