<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('session_model');
	}	

/**
 * Displays the login form and runs form validation.
 * Redirects users to their respective homepages after
 * successful login.
 */
	public function login() {
		//check whether user is already logged in
		if ($this->session->userdata('email_address')) {
			$this->redirect_to_home();
		}

		$this->load->library('form_validation');

		//validation rules. password validation calls the verify login function
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_verify_login');

		if ($this->form_validation->run() == FALSE) {
			//get email errors
			$email_error = form_error('email','<p class="text-danger">','</p>');
			$this->session->set_flashdata('email_error', $email_error);
			//password errors
			$password_error = form_error('password','<p class="text-danger">','</p>');
			$this->session->set_flashdata('password_error', $password_error);
			//pass email and password for data repopulation
			$this->session->set_flashdata('email', $this->input->post('email'));
			$this->session->set_flashdata('password', $this->input->post('password'));

			redirect(base_url('login'));
		} else {
			$this->redirect_to_home();
		}
	}

/**
 * Destroys user's session.
 */
	public function logout()  {
		$redirect_url = base_url('login');
		if ($this->session->userdata('sais_id')) {
			$redirect_url = base_url();
		}

		$this->session->sess_destroy();
		redirect($redirect_url,'refresh');
	}

/**
 * Displays the Student Login form and runs form validation.
 * Redirects students to their respective evaluation forms
 * after successful code verification.
 */
	public function student_login() {
		//destroy session if already present
		if ($this->session->userdata('sais_id')) {
			$this->session->sess_destroy();
		}

		$this->load->library('form_validation');

		//validation rules. password validation calls the verify login function
		$this->form_validation->set_rules('sais_id', 'SAIS ID', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_verify_student_login');

		if ($this->form_validation->run() == FALSE) {
			//get student number errors
			$sais_id_error = form_error('sais_id','<p class="text-danger">','</p>');
			$this->session->set_flashdata('sais_id_error', $sais_id_error);
			//password errors
			$password_error = form_error('password','<p class="text-danger">','</p>');
			$this->session->set_flashdata('password_error', $password_error);
			//data repopulation
			$this->session->set_flashdata('sais_id', $this->input->post('sais_id'));
			$this->session->set_flashdata('password', $this->input->post('password'));

			redirect(base_url());
		} else {
			$this->redirect_to_student_home();
		}
	}

/**
 * Form Validation rule. Verifies login information and creates
 * a session for the user.
 * @param  string $password	value from password field in login form
 * @return boolean					TRUE if verification success. Else, FALSE.
 */
	public function verify_student_login($password) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$sais_id = $this->input->post('sais_id');
		$result = $this->session_model->student_login($sais_id,$password);
		if ($result) {
			//verify success, session creation
			$sess_array = array(
				'student_id' => $result->student_id,
				'sais_id' => $result->sais_id,
				'first_name' => $result->first_name,
				'last_name' => $result->last_name
				);
			$this->session->set_userdata($sess_array);
			return TRUE;
		} else {
			$this->form_validation->set_message('verify_student_login','Invalid student number or password.');
			return FALSE;
		}
	}

/**
 * Form Validation rule. Verifies login information and creates
 * a session for the user.
 * @param  string $password	value from password field in login form
 * @return boolean					TRUE if verification success. Else, FALSE.
 */
	public function verify_login($password) {
		if(empty($this->form_validation)) {
			show_403_error();
		}

		$email = $this->input->post('email');
		$result = $this->session_model->login($email,$password);
		if ($result) {
			//verify success, session creation
			$sess_array = array(
				'user_id' => $result->user_id,
				'email_address' => $result->email_address,
				'first_name' => $result->first_name,
				'last_name' => $result->last_name,
				'role' => $result->role,
				'office_id' => $result->office_id
				);
			$this->session->set_userdata($sess_array);
			return TRUE;
		} else {
			$this->form_validation->set_message('verify_login','Invalid email or password.');
			return FALSE;
		}
	}

/**
 * Redirects users to their respective homepages based
 * on their user roles.
 */
	private function redirect_to_home() {
		$role = $this->session->userdata('role');
		if ($role === 'admin') {
			redirect('admin');
		} else if ($role === 'staff') {
			redirect('staff');
		} else if ($role === 'evaluator') {
			redirect('evaluator');
		} else if ($role === 'superadmin') {
			redirect('superadmin');
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

/**
 * Redirects users to their respective homepages based
 * on their user roles.
 */
	private function redirect_to_student_home() {
		$sais_id = $this->session->userdata('sais_id');
		if (!empty($sais_id)) {
			redirect('student');
		} else {
			$this->session->sess_destroy();
			redirect(base_url(), 'refresh');
		}
	}

/**
 * Redirects students to the respective evaluation
 * forms based on the class ID.
 */
	private function redirect_to_form() {
		$class_id = $this->session->userdata('class_id');
		if (!empty($class_id)) {
			redirect('evaluation/evaluate');
		} else {
			$this->session->sess_destroy();
			redirect(base_url(),'refresh');
		}
	}
}
/* End of file session.php */
/* Location: ./application/controllers/session.php */