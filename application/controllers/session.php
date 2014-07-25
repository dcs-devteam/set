<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('session_model');
    }	

	public function login() {
		//check whether user is already logged in
		if ($this->session->userdata('email')) {
			$this->redirect_to_home();
		}

		$this->load->library('form_validation');

		//validation rules. password validation calls the verify login function
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_verify_login');

		if ($this->form_validation->run() == FALSE) {
			//get email errors
			$email_error = form_error('email','<p class="text-error">','</p>');
			$this->session->set_flashdata('email_error', $email_error);
			//password errors
			$password_error = form_error('password','<p class="text-error">','</p>');
			$this->session->set_flashdata('password_error', $password_error);
			//pass email and password for data repopulation
			$this->session->set_flashdata('email', $this->input->post('email'));
			$this->session->set_flashdata('password', $this->input->post('password'));

			redirect(base_url('login'));
		} else {
			$this->redirect_to_home();
		}
	}

	public function logout()  {
		echo 'LOGGING OUT...';

		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}

	//runs when email and password are validated
	function verify_login($password) {
		$email = $this->input->post('email');
		$result = $this->session_model->login($email,$password);
		if($result) {
			//login success, session creation
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'user_id' => $row->user_id,
					'email_address' => $row->email_address,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'role' => $row->role,
					'office_id' => $row->office_id
					);
				$this->session->set_userdata($sess_array);
			}
			return TRUE;
		} else {
			$this->form_validation->set_message('verify_login','Invalid email or password.');
			return FALSE;
		}
	}

	//accepts role string and redirects to role's home
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
}
/* End of file session.php */
/* Location: ./application/controllers/session.php */