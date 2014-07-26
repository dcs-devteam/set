<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Class_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

/**
*	Get active evaluation period from the database.
* Returns false if no active period found.
*/
	function get_active($office_id) {
		$this->db->from('class');
		$this->db->where('office_id', $office_id);
		$this->db->where('is_active', TRUE);
		$this->db->where('is_done', FALSE);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	function get_done($office_id) {
		$this->db->from('class');
		$this->db->where('office_id', $office_id);
		$this->db->where('is_active', FALSE);
		$this->db->where('is_done', TRUE);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	function get_todo($office_id) {
		$this->db->from('class');
		$this->db->where('office_id', $office_id);
		$this->db->where('is_active', FALSE);
		$this->db->where('is_done', FALSE);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	function get($office_id) {
		$this->db->from('class');
		$this->db->where('office_id', $office_id);

		$this->db->order_by("year", "desc");
		$this->db->order_by("semester", "desc");
		$this->db->order_by("class_name", "asc");

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	function get_by_id($class_id) {
		$this->db->from('class');
		$this->db->where('class_id', $class_id);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	function stop_evaluation($id) {
		$stop_data = array(
			'is_active' => FALSE,
			'is_done' => TRUE
			);
		$this->db->where('class_id',$id);
		$result = $this->db->update('class',$stop_data);
		return $result;
	}

	function start_evaluation($class_id, $evaluator_id) {
		$this->load->model('evaluator_model');
		$result = $this->evaluator_model->add($class_id, $evaluator_id);

		if ($result) {
			$start_data = array(
				'is_active' => TRUE,
				'is_done' => FALSE
				);
			$this->db->where('class_id',$class_id);
			$result2 = $this->db->update('class',$start_data);
			return $result2;
		} else {
			return FALSE;
		}
	}

//TODO delete submitted evaluation forms
	function cancel_evaluation($class_id, $evaluator_id) {
		$this->load->model('evaluator_model');
		$result = $this->evaluator_model->delete($class_id, $evaluator_id);

		if ($result) {
			$cancel_data = array(
				'is_active' => FALSE,
				'is_done' => FALSE
				);
			$this->db->where('class_id',$class_id);
			$result2 = $this->db->update('class',$cancel_data);
			return $result2;
		} else {
			return FALSE;
		}
	}


	// function get($sem = FALSE, $year = FALSE) {
	// 	$this->db->from('class');
	// 	if ($sem === FALSE OR $year === FALSE) {
	// 		$this->db->order_by("is_active", "desc");
	// 		$this->db->order_by("start_date", "asc");
	// 		$this->db->order_by("is_done", "asc");

	// 		$query = $this->db->get();

	// 		if($query->num_rows() >= 1) {
	// 			return $query->result();
	// 		}	else {
	// 			return FALSE;
	// 		}
	// 	} else {
	// 		$this->db->where('year', $year);
	// 		$this->db->where('semester', $sem);

	// 		$query = $this->db->get();
	// 		if($query->num_rows() >= 1) {
	// 			return $query->row();
	// 		}	else {
	// 			return FALSE;
	// 		}
	// 	}
	// }

	// function get_by_id($id) {
	// 	$this->db->from('evaluation_period');
	// 	$this->db->where('evaluation_period_id', $id);

	// 	$query = $this->db->get();
	// 	if($query->num_rows() >= 1) {
	// 		return $query->row();
	// 	}	else {
	// 		return FALSE;
	// 	}
	// }

	// function get_by_date($start_date, $end_date) {
	// 	$this->db->from('evaluation_period');
	// 	$this->db->where('start_date', $start_date);
	// 	$this->db->where('end_date', $end_date);

	// 	$query = $this->db->get();
	// 	if($query->num_rows() >= 1) {
	// 		return $query->row();
	// 	}	else {
	// 		return FALSE;
	// 	}
	// }

	// function date_overlaps($start_date, $end_date) {
	// 	$this->db->from('evaluation_period');
	// 	$this->db->where('end_date >=', $start_date);
	// 	$this->db->where('start_date <=', $end_date);
	// 	$this->db->order_by("start_date", "asc");

	// 	$query = $this->db->get();
	// 	if($query->num_rows() >= 1) {
	// 		return $query->result();
	// 	}	else {
	// 		return FALSE;
	// 	}
	// }

	// function set($year, $sem, $start_date, $end_date, $is_active) {
	// 	$data = array(
	// 		'year' => $year,
	// 		'semester' => $sem,
	// 		'start_date' => $start_date,
	// 		'end_date' => $end_date,
	// 		'is_active' => $is_active
	// 		);
	// 	$result = $this->db->insert('evaluation_period',$data);

	// 	return $result;
	// }

	// function edit($id, $year, $sem, $start_date, $end_date, $is_active) {
	// 	$data = array(
	// 		'year' => $year,
	// 		'semester' => $sem,
	// 		'start_date' => $start_date,
	// 		'end_date' => $end_date,
	// 		'is_active' => $is_active
	// 		);
	// 	if ($data['is_active']) {
	// 		$data['is_done'] = FALSE;
	// 	}
	// 	$this->db->where('evaluation_period_id',$id);
	// 	$result = $this->db->update('evaluation_period',$data);

	// 	return $result;
	// }

	// function delete($id) {
	// 	$this->db->trans_start();
	// 	$result = $this->db->delete('evaluation_period',array('evaluation_period_id' => $id));

	// 	$this->db->trans_complete();
	// 	return $this->db->trans_status();
	// }
}

/* End of file class_model.php */
/* Location: ./application/models/class_model.php */