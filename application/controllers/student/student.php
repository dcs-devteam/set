<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
		parent::__construct();
		//redirect when not logged in as student
		if (!$this->session->userdata('sais_id')) {
			redirect(base_url());
		}
	}

/**
 * Default function when there is no URI segment after set/student.
 * Redirects to student/class_list.
 */
	public function index() {
		redirect('student/class');
	}
}

/* End of file student.php */
/* Location: ./application/controllers/student/student.php */