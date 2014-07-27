<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Access_code_model extends CI_Model {

	public function __construct() {
		parent::__construct();
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
}

/* End of file access_code_model.php */
/* Location: ./application/models/access_code_model.php */