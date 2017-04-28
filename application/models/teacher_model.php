<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Teacher_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model('course_model');
	}

/**
 * Returns teacher row.
 * @param  int $id	valid teacher ID
 * @return object		teacher row (as object)
 * 									FALSE if teacher not found
 */
	public function get_by_id($id) {
		$this->db->where('teacher_id',$id);
		$this->db->limit(1);

		$query = $this->db->get('teacher');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns teacher row given teacher name.
 * @param  string $first_name
 * @param  string $last_name
 * @return object		teacher row (as object)
 * 						FALSE if teacher not found
 */
	public function get_by_name($first_name, $last_name) {
		$this->db->where('first_name', $first_name);
		$this->db->where('last_name', $last_name);
		$this->db->limit(1);

		$query = $this->db->get('teacher');

		if($query->num_rows() >= 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}

/**
 * Returns all teachers given an office ID
 * @param  int $office_id	valid office ID
 * @return array					teacher rows (as object)
 * 												FALSE if teacher not found
 */
	public function get_by_office($office_id) {
		$course_result = $this->course_model->get_by_office($office_id);
		$courses = array();
		foreach ($course_result as $key => $row) {
			$courses[$key] = $row->course_id;
		}

		$this->db->distinct();
		$this->db->select('teacher_id');
		$this->db->where_in('class.course_id', $courses);

		$query = $this->db->get('class');

		if($query->num_rows() >= 1) {
			$classes = $query->result();
			$teachers = array();
			foreach ($classes as $idx => $class) {
				$teachers[] = $this->get_by_id($class->teacher_id);
			}

			return $teachers;
		}	else {
			return FALSE;
		}
	}

/**
 * Returns all teachers with classes for current semester, given an office ID
 * @param  int $office_id	valid office ID
 * @return array					teacher rows (as object)
 * 									FALSE if teacher not found
 */
	public function get_current($office_id) {
		$course_result = $this->course_model->get_by_office($office_id);
		$courses = array();
		foreach ($course_result as $key => $row) {
			$courses[$key] = $row->course_id;
		}
		$year_sem = $this->year_semester_model->get_current();

		$this->db->distinct();
		$this->db->select('teacher_id');
		$this->db->where_in('class.course_id', $courses);
		$this->db->where('year', $year_sem->year);
		$this->db->where('semester', $year_sem->semester);

		$query = $this->db->get('class');

		if($query->num_rows() >= 1) {
			$classes = $query->result();
			$teachers = array();
			foreach ($classes as $idx => $class) {
				$teachers[] = $this->get_by_id($class->teacher_id);
			}

			return $teachers;
		}	else {
			return FALSE;
		}
	}

/**
 * Returns teacher ID given first and last names.
 * @param  string $first_name	valid first name
 * @param  string $last_name	valid last name
 * @return int								teacher ID
 */
	public function get_id($first_name, $last_name) {
		$this->db->where('first_name', $first_name);
		$this->db->where('last_name', $last_name);
		$this->db->limit(1);

		$query = $this->db->get('teacher');

		if($query->num_rows() >= 1) {
			return $query->row()->teacher_id;
		}	else {
			return FALSE;
		}
	}

/**
 * Inserts teacher.
 * @param string $first_name
 * @param string $last_name
 * @param int $office_id			valid office ID
 * @return int 								ID of successfully inserted teacher
 * 														FALSE if insert failed
 */
	public function add($first_name, $last_name, $office_id) {
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'office_id' => $office_id
		);
		$this->db->insert('teacher',$data);

		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

/**
 * Edits teacher.
 * @param string $teacher_id	valid teacher ID
 * @param string $first_name
 * @param string $last_name
 * @param int $office_id			valid office ID
 * @return int 								ID of successfully edited teacher
 * 														FALSE if insert failed
 */
	public function edit($teacher_id, $first_name, $last_name, $office_id) {
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'office_id' => $office_id
		);

		$this->db->where('teacher_id', $teacher_id);
		$result = $this->db->update('teacher',$data);

		if ($this->db->affected_rows() >= 0) {
			return $result;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes teacher.
 * @param  int $teacher_id	valid teacher ID.
 * @return boolean				TRUE is delete successful. Else, FALSE.
 */
	public function delete($teacher_id) {
		$this->db->trans_start();

		$result = $this->db->delete('teacher',array('teacher_id' => $teacher_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Get classes for current semester.
 * @param  string $teacher_id
 * @return boolean						TRUE if has class. Else, FALSE.
 */
	public function get_classes($teacher_id, $office_id) {
		//get current classes for office
		$course_result = $this->course_model->get_by_office($office_id);
		if ($course_result) {
			$courses = array();
			foreach ($course_result as $key => $row) {
				$courses[$key] = $row->course_id;
			}

			//year and sem
			$year_sem = $this->year_semester_model->get_current();

			$this->db->where_in('class.course_id', $courses);

			$this->db->where('teacher_id', $teacher_id);
			$this->db->where('year', $year_sem->year);
			$this->db->where('semester', $year_sem->semester);

			$this->db->join('course', 'course.course_id = class.course_id');

			$this->db->order_by('year', 'desc');
			$this->db->order_by('semester', 'desc');
			$this->db->order_by('course.course_name', 'asc');
			$this->db->order_by('class.section', 'asc');

			$query = $this->db->get('class');
			if($query->num_rows() >= 1) {
				$result = $query->result();
				//add class_name attribute and # of evaluations
				foreach ($result as $key => $row) {
					$row->class_name = $row->course_name;
					$row->submissions = $this->evaluation_model->count_submissions($row->class_id);
				}
				return $result;
			}	else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}
}

/* End of file teacher_model.php */
/* Location: ./application/models/teacher_model.php */