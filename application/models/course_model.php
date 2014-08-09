<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Course_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_by_office($office_id) {
		$this->db->where('office_id', $office_id);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	public function get_name($course_id) {
		$this->db->select('course_name');
		$this->db->where('course_id', $course_id);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->row()->course_name;
		}	else {
			return FALSE;
		}
	}

	public function get_id($course_name) {
		$this->db->select('course_id');
		$this->db->where('course_name', $course_name);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->row()->course_id;
		}	else {
			return FALSE;
		}
	}

	public function course_exists($course_name) {
		$this->db->where('course_name', $course_name);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if ($query->num_rows() == 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}

	public function add($course_name, $office_id) {
		$data = array(
			'course_name' => $course_name,
			'office_id' => $office_id
		);		
		$this->db->insert('course',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}
}

/* End of file course_model.php */
/* Location: ./application/models/course_model.php */