<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			show_403_error();
		}
		$this->load->model('office_model');
		$this->load->model('student_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after set/admin/student.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all students enrolled in classes of the office of user.
 */
	public function view() {
		$view_data = array(
			'students' => $this->student_model->get_by_office($this->office_id),
			);

		$data['body_content'] = $this->load->view('contents/admin/student/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays all temporary passwords of students enrolled in classes of the office of user.
 */
	public function password() {
		$view_data = array(
			'passwords' => $this->student_model->get_temp_passwords($this->office_id),
			);

		$data['body_content'] = $this->load->view('contents/admin/student/password',$view_data,TRUE);
		$this->parser->parse('layouts/passwords', $data);
	}
}

/* End of file student.php */
/* Location: ./application/controllers/admin/student.php */