<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Session_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

/**
*	Get user details from database
*
*	@param	string 	$email must exist
*	@param	string 	$password
*
*	@return	array		query result on success, else FALSE
*/
	function login($email, $password) {
		$this->db->select('user_id, email_address, first_name, last_name, email_address, role, office_id');
		$this->db->from('user');
		$this->db->where('email_address', $email);
		$this->db->where('password', MD5($password));
		// $this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() == 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}
}

/* End of file session_model.php */
/* Location: ./application/models/session_model.php */