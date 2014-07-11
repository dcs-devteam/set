<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as teacher
		if ($this->session->userdata('account_type') !== 't') {
			$message_403 = "You don't have permission to access the url you are trying to reach.";
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
	}
	public function index() {
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/teacher/home','',TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file teacher.php */
/* Location: ./application/controllers/teacher.php */