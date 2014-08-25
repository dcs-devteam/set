<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evaluator_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
/**
 * Returns evaluator of given class.
 * @param  int $class_id	valid class ID.
 * @return object					class_evaluator row (as object)
 * 												FALSE if evaluator not found
 */
	public function get_evaluator($class_id) {
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

/**
 * Links evaluator and class.
 * @param int $class_id			valid class ID
 * @param int $evaluator_id	valid user ID
 * @return boolean 					TRUE if insert successful. Else, FALSE.
 */
	public function add($class_id, $evaluator_id) {
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

/**
 * Unlinks evaluator and class.
 * @param  int $class_id			valid class ID
 * @param  int $evaluator_id	valid user ID
 * @return boolean						TRUE if delete successful. Else, FALSE.
 */
	public function delete($class_id, $evaluator_id) {
		$this->db->trans_start();
		$data = array(
			'class_id' => $class_id,
			'evaluator_id' => $evaluator_id
			);
		$result = $this->db->delete('class_evaluator',$data);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Checks if evaluator is currently conducting an evaluation.
 * @param  int $evaluator_id	valid user ID
 * @param  int $office_id			office ID of user
 * @return boolean						TRUE if evaluator has active evaluation. 
 *                            Else, FALSE.
 */
	public function has_active_evaluation($evaluator_id, $office_id) {
		$this->load->model('class_model');
		$classes = $this->class_model->get_active($office_id);
		if (!empty($classes)) {
			foreach ($classes as $class) {
				$result = $this->get_evaluator($class->class_id);
				if (!empty($result) && $result->evaluator_id === $evaluator_id) {
					return TRUE;
				}
			}
		}
		return FALSE;
	}
}

/* End of file evaluator_model.php */
/* Location: ./application/models/evaluator_model.php */