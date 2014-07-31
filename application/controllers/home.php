<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$role = $this->session->userdata('role');
		if ($role === 'admin') {
			redirect('admin');
		} else if ($role === 'staff') {
			redirect('staff');
		} else if ($role === 'evaluator') {
			redirect('evaluator');
		} else if ($role === 'superadmin') {
			redirect('superadmin');
		}
	}
	public function index() {
		$data['page_title'] = "eValuation";
		$data['body_content'] = $this->load->view('contents/code','',TRUE);
		$this->parser->parse('layouts/homepage', $data);
	public function login() {
		$data['page_title'] = "eValuation";
		$data['body_content'] = $this->load->view('contents/login','',TRUE);
		$this->parser->parse('layouts/homepage', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */