<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evaluator_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_evaluator($class_id) {
		$this->db->from('class_evaluator');
		$this->db->where('class_id',$class_id);
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	function add($class_id, $evaluator_id) {
		$data = array(
			'class_id' => $class_id,
			'evaluator_id' => $evaluator_id
			);
		if ($this->get_evaluator($class_id)) {
			$this->db->where('class_id',$class_id);
			$result = $this->db->update('class_evaluator',$data);
		} else {
			$result = $this->db->insert('class_evaluator',$data);
		}

		return $result;
	}

	function delete($class_id, $evaluator_id) {
		$this->db->trans_start();
		$data = array(
			'class_id' => $class_id,
			'evaluator_id' => $evaluator_id
			);
		$result = $this->db->delete('class_evaluator',$data);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file evaluator_model.php */
/* Location: ./application/models/evaluator_model.php */