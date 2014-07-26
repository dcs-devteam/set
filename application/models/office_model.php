<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Office_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get($id = FALSE) {
		$this->db->from('office');
		if ($id !== FALSE) {
			$this->db->where('office_id',$id);
			$this->db->limit(1);

			$query = $this->db->get();
			if($query->num_rows() >= 1) {
				return $query->row();
			}	else {
				return FALSE;
			}
		} else {
			$this->db->where('office_id', $id);

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

/* End of file office_model.php */
/* Location: ./application/models/office_model.php */