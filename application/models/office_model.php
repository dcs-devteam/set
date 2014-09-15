<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Office_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Returns all offices.
 * @return object		office row (as object) found. else, FALSE.
 */
	public function get() {
		$this->db->from('office');
		$this->db->order_by("name", "asc");

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns an office given its ID.
 * @param  int $id	valid office ID
 * @return object		office row (as object) found. else, FALSE.
 */
	public function get_by_id($id) {
		$this->db->from('office');
		$this->db->where('office_id',$id);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns an office, given a name.
 * @param  string $name valid office name
 * @return object       office row if found. else, FALSE.
 */
	public function get_by_name($name) {
		$this->db->where('name',$name);
		$this->db->limit(1);

		$query = $this->db->get('office');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Inserts office.
 * @param string $name
 * @return boolean 							TRUE if successfully inserted
 * 														  FALSE if insert failed
 */
	public function add($name) {
		$data = array(
			'name' => $name,
		);

		$this->db->insert('office',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

/**
 * Updates office.
 * @param string $name
 * @return boolean 							TRUE if successfully inserted
 * 														  FALSE if insert failed
 */
	public function edit($name, $office_id) {
		$data = array(
			'name' => $name,
		);

		$this->db->where('office_id', $office_id);
		$this->db->update('office',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes office.
 * @param  int $office_id	valid office ID.
 * @return boolean			TRUE is delete successful. Else, FALSE.
 */
	public function delete($office_id) {
		$this->db->trans_start();

		$result = $this->db->delete('office',array('office_id' => $office_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file office_model.php */
/* Location: ./application/models/office_model.php */