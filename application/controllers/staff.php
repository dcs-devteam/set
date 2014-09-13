<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as staff
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'staff') {
			show_403_error();
		}
	}

/**
 * Redirect to admin/report
 */
	public function index() {
		redirect(base_url('admin/report'));
	}
}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */