<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superadmin extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as superadmin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'superadmin') {
			show_403_error();
		}
	}

/**
 * Default function when there is no URI segment after evaluation/superadmin.
 * Redirects to superadmin/yearsem.
 */
	public function index() {
		redirect('superadmin/yearsem');
	}
}

/* End of file superadmin.php */
/* Location: ./application/controllers/superadmin/superadmin.php */