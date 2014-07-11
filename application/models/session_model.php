<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Session_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

/**
*	Get user details from database
*
*	@param	string 	$username must exist
*	@param	string 	$password
*
*	@return	array		query result on success, else FALSE
*/
	function login($username, $password) {
		$this->db->select('user_id, username, first_name, last_name, email_address, account_type');
		$this->db->from('user');
		$this->db->where('username', $username);
		// $this->db->where('password', MD5($password));
		$this->db->where('password', $password);
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