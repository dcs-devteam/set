<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as student
		if ($this->session->userdata('account_type') !== 's') {
			$message_403 = "You don't have permission to access the url you are trying to reach.";
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
	}
	public function index() {
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/student/home','',TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file student.php */
/* Location: ./application/controllers/student.php */