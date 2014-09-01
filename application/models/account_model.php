<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Returns user row.
 * @param  int $id	valid user ID
 * @return object		teacher row (as object)
 * 									FALSE if user not found
 */
	public function get_by_id($id) {
		$this->db->where('user_id',$id);
		$this->db->limit(1);

		$query = $this->db->get('user');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns all users given an office ID
 * @param  int $office_id	valid office ID
 * @return array					account rows (as object)
 * 												FALSE if user not found
 */
	public function get_by_office($office_id, $role) {
		if ($role === 'admin') {
			$this->db->select('user_id, email_address, first_name, last_name, email_address, role, office_id');
			$this->db->where('office_id', $office_id);

			$this->db->where_in('role', array('evaluator', 'staff'));

			$this->db->order_by('role', 'asc');
			$this->db->order_by('last_name', 'asc');
			$this->db->order_by('first_name', 'asc');

			$query = $this->db->get('user');

			if($query->num_rows() >= 1) {
				return $query->result();
			}	else {
				return FALSE;
			}
		}
	}

/**
 * Returns user ID given first and last names.
 * @param  string $first_name	valid first name
 * @param  string $last_name	valid last name
 * @return int								user ID
 */
	public function get_id($first_name, $last_name) {
		$this->db->where('first_name', $first_name);
		$this->db->where('last_name', $last_name);
		$this->db->limit(1);

		$query = $this->db->get('user');

		if($query->num_rows() >= 1) {
			return $query->row()->user_id;
		}	else {
			return FALSE;
		}
	}

/**
 * Inserts user.
 * @param string $first_name
 * @param string $last_name
 * @param string $email_address
 * @param string $password
 * @param string $role
 * @param int $office_id				valid office ID
 * @return int 									ID of successfully inserted teacher
 * 														  FALSE if insert failed
 */
	public function add($first_name, $last_name, $email_address, $password, $role, $office_id) {
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email_address' => $email_address,
			'password' => MD5($password),
			'role' => $role,
			'office_id' => $office_id
		);		
		$this->db->insert('user',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

/**
 * Edits user.
 * @param string $user_id				valid user ID
 * @param string $first_name
 * @param string $last_name
 * @param string $email_address
 * @param string $password
 * @param string $role
 * @param int $office_id				valid office ID
 * @return int 									TRUE if edit successful
 * 														  FALSE if edit failed
 */
	public function edit($user_id, $first_name, $last_name, $email_address, $password = FALSE, $role, $office_id) {
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email_address' => $email_address,
			'role' => $role,
			'office_id' => $office_id
		);
		if ($password !== FALSE ) {
			$old_account = $this->get_by_id($user_id);
			//don't update if password not changed
			if ($old_account->password == $password) {
				$data['password'] = $old_account->password;
			} else {
				$data['password'] = MD5($password);
			}
		}

		$this->db->where('user_id', $user_id);
		$this->db->update('user',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Changes user password.
 * @param int $user_id			valid user_id
 * @param string $password	
 * @return int 							TRUE if edit successful
 * 													FALSE if edit failed
 */
	public function change_password($user_id, $password) {
		$data = array(
			'password' => MD5($password)
		);

		$this->db->where('user_id', $user_id);
		$this->db->update('user',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes user.
 * @param  int $user_id	valid user ID.
 * @return boolean			TRUE is delete successful. Else, FALSE.
 */
	public function delete($user_id) {
		$this->db->trans_start();

		$result = $this->db->delete('user',array('user_id' => $user_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Checks if user exists.
 * @param  string $first_name
 * @param  string $last_name
 * @return boolean						TRUE if user exists. Else, FALSE.
 */
	public function user_exists($first_name, $last_name) {
		$this->db->where('first_name', $first_name);
		$this->db->where('last_name', $last_name);
		$this->db->limit(1);

		$query = $this->db->get('user');

		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Checks if email address exists.
 * @param  string $email_address
 * @return boolean						TRUE if email address exists. Else, FALSE.
 */
	public function email_exists($email_address) {
		$this->db->where('email_address', $email_address);
		$this->db->limit(1);

		$query = $this->db->get('user');

		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Checks if password is the same as in the database.
 * @param		string $password
 * @return	boolean 					TRUE if passwords are the same. Else, FALSE.
 */
	public function same_passwords($user_id, $password) {
		$this->db->where('password', MD5($password));
		$this->db->limit(1);

		$query = $this->db->get('user');

		if($query->num_rows() >= 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}
}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */