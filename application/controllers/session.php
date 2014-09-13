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
		echo 'LOGGING OUT...';

		$this->session->sess_destroy();
		redirect(base_url('login'),'refresh');
	}

/**
 * Displays the Access Code form and runs form validation.
 * Redirects students to their respective evaluation forms
 * after successful code verification.
 */
	public function code() {
		//destroy session if already present
		if ($this->session->userdata('access_code')) {
			$this->session->sess_destroy();
		}

		$this->load->library('form_validation');

		//validation rules. password validation calls the verify login function
		$this->form_validation->set_rules('code', 'Access Code', 'trim|required|xss_clean|callback_active_class|callback_code_exists|callback_is_not_used');

		if ($this->form_validation->run() == FALSE) {
			//get email errors
			$code_error = form_error('code','<p class="text-danger">','</p>');
			$this->session->set_flashdata('code_error', $code_error);
			//code for data repopulation
			$this->session->set_flashdata('code', $this->input->post('code'));

			redirect(base_url());
		} else {
			$this->redirect_to_form();
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
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
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
 * Form Validation rule. Checks if class for given code
 * is open for evaluation.
 * @param  string $code value of code field in access code form
 * @return boolean			TRUE if class open for evaluation. Else, FALSE.
 */
	public function active_class($code) {
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}

		$this->load->model('class_model');
		$this->load->model('access_code_model');
		$class_id = $this->access_code_model->get_class_id($code);
		echo $code.' '.$class_id;
		if (is_numeric($class_id)) {
			if ($this->class_model->is_active($class_id)) {
				return TRUE;
			} else {
				$this->form_validation->set_message('active_class','Invalid access code.');
				// $this->form_validation->set_message('active_class','Evaluation for this class is not yet enabled.');
				return FALSE;
			}
		}
	}

/**
 * Form Validation rule. Checks if code is valid and exists
 * in the database.
 * @param  string $code	value of code field in access code form
 * @return boolean			TRUE if code exists in the database. Else, FALSE.
 */
	public function code_exists($code) {
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}
		
		$result = $this->access_code_model->code_exists($code);
		if ($result) {
			return TRUE;
		} else {
			$this->form_validation->set_message('code_exists','Invalid access code.');
			return FALSE;
		}
	}

/**
 * Final Form Validation rule for access codes. Checks if code is not
 * already used for evaluation and creates a session for the student.
 * @param  string  $code	value of code field in access code form
 * @return boolean				TRUE if code not already used. Else, FALSE.
 */
	public function is_not_used($code) {
		if(empty($this->form_validation)) {
			show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
		}
		
		if (!($this->access_code_model->is_used($code))) {
			$result = $this->access_code_model->get_by_code($code);
			//verify success, session creation
			$sess_array = array(
				'class_id' => $result->class_id,
				'access_code' => $result->access_code,
				);
			$this->session->set_userdata($sess_array);
			return TRUE;
		} else {
			$this->form_validation->set_message('is_not_used','Access code is already used.');
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