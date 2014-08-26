<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluator extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as evaluator
		if (empty($this->session->userdata('role'))) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'evaluator') {
			$message_403 = 'You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.';
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
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