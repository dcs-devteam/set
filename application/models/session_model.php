<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Session_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
*	Get user details from database
*
*	@param	string 	$email 		must exist
*	@param	string 	$password
*
*	@return	array		query result on success, else FALSE
*/
	public function login($email, $password) {
		$this->db->select('user_id, email_address, first_name, last_name, email_address, role, office_id');
		$this->db->from('user');
		$this->db->where('email_address', $email);
		$this->db->where('password', MD5($password));
		// $this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
*	Get student details from database
*
*	@param	string 	$student_number 		must exist
*	@param	string 	$password
*
*	@return	array		query result on success, else FALSE
*/
	public function student_login($student_number, $password) {
		$this->db->select('student_id, student_number, first_name, last_name');
		$this->db->from('student');
		$this->db->where('student_number', $student_number);
		$this->db->where('password', MD5($password));
		// $this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}
}

/* End of file session_model.php */
/* Location: ./application/models/session_model.php */