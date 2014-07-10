<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	public function index() {
		$view_data['username'] = '2011-12345';

		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/student/home',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin/admin.php */