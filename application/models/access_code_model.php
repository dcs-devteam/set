<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Access_code_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function add($class_id, $access_code) {
		$this->load->model('class_model');
		if ($this->class_model->get_by_id($class_id)) {
			$data = array(
				'class_id' => $class_id,
				'access_code' => $access_code
				);
			$result = $this->db->insert('access_code',$data);
			return $this->db->affected_rows();
		} else {
			return FALSE;
		}
	}

	public function get_by_code($code) {
		$this->db->from('access_code');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	public function get_by_class($class_id) {
		$this->db->from('access_code');
		$this->db->where('class_id', $class_id);

		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	public function get_class_id($code) {
		$this->db->from('access_code');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row()->class_id;
		}	else {
			return FALSE;
		}
	}

	public function is_used($code) {
		$this->load->model('evaluation_model');
		$evaluation = $this->evaluation_model->get_by_access_code($code);

		if ($evaluation) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function code_exists($code) {
		$this->db->from('access_code');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}

	public function delete_by_class($class_id) {
		$this->db->trans_start();

		$result = $this->db->delete('access_code',array('class_id' => $class_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	public function delete_unused($class_id) {
		$codes = $this->get_by_class($class_id);
		$this->db->trans_start();

		//find unused codes
		$this->load->model('evaluation_model');

		$unused_codes = array();
		foreach ($codes as $code) {
			if (!$this->is_used($code->access_code)) {
				array_push($unused_codes, $code->access_code);
			}
		}

		$this->db->where_in('access_code', $unused_codes);

		$result = $this->db->delete('access_code');

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file access_code_model.php */
/* Location: ./application/models/access_code_model.php */