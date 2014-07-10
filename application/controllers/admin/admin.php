<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index() {
		$view_data['username'] = 'Admin';

		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/evaluation',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin/admin.php */