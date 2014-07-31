<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Class_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->model('course_model');
	}

/**
*	Get active class from the database.
* Returns false if no active class found.
*/
	function get_active($office_id) {
		$result = $this->course_model->get_by_office($office_id);
		$courses = array();
		foreach ($result as $key => $row) {
			$courses[$key] = $row->course_id;
		}
		$this->db->where_in('course_id', $courses);

		$this->db->where('is_active', TRUE);
		$this->db->where('is_done', FALSE);

		$query = $this->db->get('class');
		if($query->num_rows() >= 1) {
			$result = $query->result();

			//add class_name attribute
			foreach ($result as $key => $row) {
				$row->class_name = $this->course_model->get_name($row->course_id);
			}

			return $result;
		}	else {
			return FALSE;
		}
	}

	function get_done($office_id) {
		$result = $this->course_model->get_by_office($office_id);
		$courses = array();
		foreach ($result as $key => $row) {
			$courses[$key] = $row->course_id;
		}
		$this->db->where_in('course_id', $courses);

		$this->db->where('is_active', FALSE);
		$this->db->where('is_done', TRUE);

		$query = $this->db->get('class');
		if($query->num_rows() >= 1) {
			$result = $query->result();

			//add class_name attribute
			foreach ($result as $key => $row) {
				$row->class_name = $this->course_model->get_name($row->course_id);
			}

			return $result;
		}	else {
			return FALSE;
		}
	}

	function get_todo($office_id) {
		$result = $this->course_model->get_by_office($office_id);
		$courses = array();
		foreach ($result as $key => $row) {
			$courses[$key] = $row->course_id;
		}
		$this->db->where_in('course_id', $courses);

		$this->db->where('is_active', FALSE);
		$this->db->where('is_done', FALSE);

		$query = $this->db->get('class');
		if($query->num_rows() >= 1) {
			$result = $query->result();

			//add class_name attribute
			foreach ($result as $key => $row) {
				$row->class_name = $this->course_model->get_name($row->course_id);
			}

			return $result;
		}	else {
			return FALSE;
		}
	}

	function get($office_id) {
		$result = $this->course_model->get_by_office($office_id);
		$courses = array();
		foreach ($result as $key => $row) {
			$courses[$key] = $row->course_id;
		}
		$this->db->where_in('course_id', $courses);

		$this->db->order_by("year", "desc");
		$this->db->order_by("semester", "desc");

		$query = $this->db->get('class');
		if($query->num_rows() >= 1) {
			$result = $query->result();

			//add class_name attribute
			foreach ($result as $key => $row) {
				$row->class_name = $this->course_model->get_name($row->course_id);
			}

			return $result;
		}	else {
			return FALSE;
		}
	}

	function get_by_id($class_id) {
		$this->db->where('class_id', $class_id);
		$this->db->limit(1);

		$query = $this->db->get('class');

		if($query->num_rows() >= 1) {
			$result = $query->row();

			//add class_name attribute
			$result->class_name = $this->course_model->get_name($result->course_id);

			return $result;
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
		$this->db->trans_start();
		//delete evaluator
		$this->load->model('evaluator_model');
		$this->evaluator_model->delete($class_id, $evaluator_id);

		//delete all evaluation forms submitted
		$this->load->model('evaluation_model');
		$this->evaluation_model->delete_by_class($class_id);
		
		//delete all access codes
		$this->load->model('access_code_model');
		$this->access_code_model->delete_by_class($class_id);


		//update class
		$cancel_data = array(
			'is_active' => FALSE,
			'is_done' => FALSE
			);
		$this->db->where('class_id',$class_id);
		$this->db->update('class',$cancel_data);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	function is_active($class_id) {
		$this->db->select('is_active');
		$this->db->from('class');
		$this->db->where('class_id', $class_id);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->row()->is_active;
		}	else {
			return FALSE;
		}
	}
}

/* End of file class_model.php */
/* Location: ./application/models/class_model.php */