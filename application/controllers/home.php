<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$account_type = $this->session->userdata('account_type');
		if ($account_type === 'a') {
			redirect('admin');
		} else if ($account_type === 's') {
			redirect('student');
		} else if ($account_type === 't') {
			redirect('teacher');
		}
	}
	public function index() {
		$data['page_title'] = "eValuation";
		$data['body_content'] = $this->load->view('contents/home','',TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */