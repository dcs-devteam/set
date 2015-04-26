<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student_class_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model('class_model');
		$this->load->model('year_semester_model');
		$this->load->model('evaluation_model');
	}


/**
 * Get list of all classes (past and present) where student is enrolled in
 * @param  int		student_id	valid student ID (primary key)
 * @return array									class rows (as object)
 * 																FALSE if no class found
 */
	public function get_classes($student_id) {
		$this->db->where('student_id', $student_id);

		$query = $this->db->get('student_class');
		if ($query->num_rows() >= 1) {
			$result = $query->result();
			//add class attributes
			foreach ($result as $key => $row) {
				$row->class_details = $this->class_model->get_by_id($row->class_id);
			}
			return $result;
		} else {
			return FALSE;
		}
	}


/**
 * Get list of current classes where student is enrolled in
 * @param  int		student_id	valid student ID (primary key)
 * @return array									class rows (as object)
 * 																FALSE if no class found
 */
	public function get_current_classes($student_id) {
		//get classes for current semester where student has enrolled in
		//year and sem
		$year_sem = $this->year_semester_model->get_current();

		$this->db->join('class', 'class.class_id = student_class.class_id');

		$this->db->where('student_id', $student_id);
		$this->db->where('year', $year_sem->year);
		$this->db->where('semester', $year_sem->semester);

		$this->db->order_by('year', 'desc');
		$this->db->order_by('semester', 'desc');

		$query = $this->db->get('student_class');
		if ($query->num_rows() >= 1) {
			$result = $query->result();
			//add class attributes
			foreach ($result as $key => $row) {
				$row->class_details = $this->class_model->get_by_id($row->class_id);
			}
			return $result;
		} else {
			return FALSE;
		}
	}

/**
 * Check if a given student is enrolled in a given class.
 * @param  int  $student_id valid student id
 * @param  int  $class_id   valid class id
 * @return boolean          TRUE if student is enrolled in class. Otherwise, FALSE.
 */
	public function is_enrolled($student_id, $class_id) {
		$this->db->where('student_id', $student_id);
		$this->db->where('class_id', $class_id);
		$query = $this->db->get('student_class');
		if ($query->num_rows() == 1) {
			$result1 = $query->row();
			$result2 = $this->class_model->get_by_id($result1->class_id);
			$year_sem = $this->year_semester_model->get_current();
			if ($result2->year === $year_sem->year && $result2->semester === $year_sem->semester) {
				return TRUE;
			}
		}
		
		return FALSE;
	}

/**
 * Check if given student has already evaluated a given class.
 * @param  int  $student_id valid student id
 * @param  int  $class_id   valid class id
 * @return boolean          TRUE if student already evaluated. Otherwise, FALSE.
 */
	public function has_evaluated($student_id, $class_id) {
		$this->db->where('student_id', $student_id);
		$this->db->where('class_id', $class_id);
		$query = $this->db->get('student_class');
		if ($query->num_rows() >= 1) {
			$result = $query->result();
			if ($result[0]->has_evaluated) {
				return TRUE;
			}
		}
		
		return FALSE;
	}

/**
 * Mark that given student has already evaluated given class.
 * @param  int  $student_id valid student id
 * @param  int  $class_id   valid class id
 * @return boolean          TRUE if successfully set. Otherwise, FALSE.
 */
	public function set_evaluated($student_id, $class_id) {
		$this->db->where('student_id', $student_id);
		$this->db->where('class_id', $class_id);

		$result = $this->db->update('student_class', array('has_evaluated' => 1));
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Check if given student has completely evaluated in all currently enrolled classes.
 * @param  int  $student_id valid student id
 * @return boolean          TRUE if student completed evaluations. Otherwise, FALSE.
 */
	public function completed_evaluation($student_id) {
		$this->db->where('student_id', $student_id);
		$query = $this->db->get('student_class');
		foreach ($query->result() as $row) {
			if ($row->has_evaluated == FALSE) {
				return FALSE;
			}
		}
		return TRUE;
	}
}

/* End of file student_class_model.php */
/* Location: ./application/models/student_class_model.php */