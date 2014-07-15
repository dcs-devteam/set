<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evaluation_period_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

/**
*	Get active evaluation period from the database.
* Returns false if no active period found.
*/
	function get_active_evaluation_period() {
		$this->db->from('evaluation_period');
		$this->db->where('is_active', TRUE);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	function get_evaluation_periods() {
		$query = $this->db->get('evaluation_period');
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

}

/* End of file evaluation_period_model.php */
/* Location: ./application/models/evaluation_period_model.php */