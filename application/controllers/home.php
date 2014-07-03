<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data['page_title'] = "eValuation";
		$data['body_content'] = $this->load->view('contents/home','',TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */