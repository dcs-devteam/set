<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Teacher_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function get($id) {
		$this->db->where('teacher_id',$id);
		$this->db->limit(1);

		$query = $this->db->get('teacher');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	public function get_by_office($office_id) {
		$this->db->where('office_id', $office_id);

		$this->db->order_by("last_name", "asc");

		$query = $this->db->get('teacher');

		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	public function get_id($first_name, $last_name) {
		$this->db->where('first_name', $first_name);
		$this->db->where('last_name', $last_name);
		$this->db->limit(1);

		$query = $this->db->get('teacher');

		if($query->num_rows() >= 1) {
			return $query->row()->teacher_id;
		}	else {
			return FALSE;
		}
	}

	public function add($first_name, $last_name, $office_id) {
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'office_id' => $office_id
		);		
		$this->db->insert('teacher',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function teacher_exists($first_name, $last_name) {
		$this->db->where('first_name', $first_name);
		$this->db->where('last_name', $last_name);
		$this->db->limit(1);

		$query = $this->db->get('teacher');

		if($query->num_rows() >= 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}

}

/* End of file teacher_model.php */
/* Location: ./application/models/teacher_model.php */