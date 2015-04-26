<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Returns all students.
 * @return object		student row (as object) found. else, FALSE.
 */
	public function get() {
		$this->db->from('student');
		$this->db->order_by("last_name", "asc");

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns an student given its ID.
 * @param  int $id	valid student ID
 * @return object		student row (as object) found. else, FALSE.
 */
	public function get_by_id($id) {
		$this->db->from('student');
		$this->db->where('student_id',$id);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns an student given its SAIS ID.
 * @param  int $id	valid SAIS ID
 * @return object		student row (as object) found. else, FALSE.
 */
	public function get_by_sais_id($id) {
		$this->db->from('student');
		$this->db->where('sais_id',$id);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Inserts student.
 * @param string $sais_id
 * @param string $first_name
 * @param string last_name
 * @param string password
 * @return boolean 							student_id if successfully inserted
 * 														  FALSE if insert failed
 */
	public function add($sais_id, $first_name, $last_name, $password) {
		$this->db->trans_start();

		$data = array(
			'sais_id' => $sais_id,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'password' => $password,
		);

		$student = $this->get_by_sais_id($sais_id);
		if (!$student) {
			$this->db->insert('student',$data);
			$student_id = $this->db->insert_id();
		} else {
			$student_id = $student->student_id;
			unset($data['password']);
			$this->db->where('student_id', $student_id);
			$this->db->update('student',$data);
		}

		$this->db->trans_complete();
		if ($this->db->trans_status()) {
			return $student_id;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes student.
 * @param  int $sais_id	valid sais_id ID.
 * @return boolean			TRUE is delete successful. Else, FALSE.
 */
	public function delete($sais_id) {
		$this->db->trans_start();

		$result = $this->db->delete('student',array('sais_id' => $sais_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Changes student password.
 * @param int $sais_id			valid sais_id
 * @param string $password	
 * @return int 							TRUE if edit successful
 * 													FALSE if edit failed
 */
	public function change_password($sais_id, $password) {
		$data = array(
			'password' => MD5($password)
		);

		$this->db->where('sais_id', $sais_id);
		$this->db->update('student',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Checks if password is the same as in the database.
 * @param		string $password
 * @return	boolean 					TRUE if passwords are the same. Else, FALSE.
 */
	public function same_passwords($sais_id, $password) {
		$this->db->where('sais_id', $sais_id);
		$this->db->where('password', MD5($password));
		$this->db->limit(1);

		$query = $this->db->get('student');

		if($query->num_rows() >= 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}
}

/* End of file office_model.php */
/* Location: ./application/models/office_model.php */