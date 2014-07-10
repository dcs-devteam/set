<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {
	public function index() {
		$view_data['username'] = 'LName, FName';

		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/teacher/home',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file teacher.php */
/* Location: ./application/controllers/teacher/teacher.php */