<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Teacher_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get($id = FALSE) {
		$this->db->from('teacher');
		if ($id !== FALSE) {
			$this->db->where('teacher_id',$id);
			$this->db->limit(1);

			$query = $this->db->get();
			if($query->num_rows() >= 1) {
				return $query->row();
			}	else {
				return FALSE;
			}
		} else {
			$this->db->where('teacher_id', $id);

			$this->db->order_by("name", "asc");

			$query = $this->db->get();

			if($query->num_rows() >= 1) {
				return $query->result();
			}	else {
				return FALSE;
			}
		}
	}
}

/* End of file teacher_model.php */
/* Location: ./application/models/teacher_model.php */