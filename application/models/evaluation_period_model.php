<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evaluation_period_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

/**
*	Get active evaluation period from the database.
* Returns false if no active period found.
*/
	function get_active() {
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

	function get($sem = FALSE, $year = FALSE) {
		$this->db->from('evaluation_period');
		if ($sem === FALSE OR $year === FALSE) {
			$this->db->order_by("is_active", "desc");
			$this->db->order_by("start_date", "asc");
			$this->db->order_by("is_done", "asc");

			$query = $this->db->get();

			if($query->num_rows() >= 1) {
				return $query->result();
			}	else {
				return FALSE;
			}
		} else {
			$this->db->where('year', $year);
			$this->db->where('semester', $sem);

			$query = $this->db->get();
			if($query->num_rows() >= 1) {
				return $query->row();
			}	else {
				return FALSE;
			}
		}
	}

	function get_by_id($id) {
		$this->db->from('evaluation_period');
		$this->db->where('evaluation_period_id', $id);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	function get_by_date($start_date, $end_date) {
		$this->db->from('evaluation_period');
		$this->db->where('start_date', $start_date);
		$this->db->where('end_date', $end_date);

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

	function date_overlaps($start_date, $end_date) {
		$this->db->from('evaluation_period');
		$this->db->where('end_date >=', $start_date);
		$this->db->where('start_date <=', $end_date);
		$this->db->order_by("start_date", "asc");

		$query = $this->db->get();
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

	function set($year, $sem, $start_date, $end_date, $is_active) {
		$data = array(
			'year' => $year,
			'semester' => $sem,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'is_active' => $is_active
			);
		$result = $this->db->insert('evaluation_period',$data);

		return $result;
	}

	function edit($id, $year, $sem, $start_date, $end_date, $is_active) {
		$data = array(
			'year' => $year,
			'semester' => $sem,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'is_active' => $is_active
			);
		if ($data['is_active']) {
			$data['is_done'] = FALSE;
		}
		$this->db->where('evaluation_period_id',$id);
		$result = $this->db->update('evaluation_period',$data);

		return $result;
	}

	function stop($id) {
		$stop_data = array(
			'is_active' => FALSE,
			'is_done' => TRUE
			);
		$this->db->where('evaluation_period_id',$id);
		$result = $this->db->update('evaluation_period',$stop_data);
		return $result;
	}

	function start($id) {
		$stop_data = array(
			'is_active' => TRUE,
			'is_done' => FALSE
			);
		$this->db->where('evaluation_period_id',$id);
		$result = $this->db->update('evaluation_period',$stop_data);
		return $result;
	}

	function delete($id) {
		$this->db->trans_start();
		$result = $this->db->delete('evaluation_period',array('evaluation_period_id' => $id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file evaluation_period_model.php */
/* Location: ./application/models/evaluation_period_model.php */