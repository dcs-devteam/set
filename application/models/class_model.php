<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Class_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('year_semester_model');
	}

/**
*	Returns active classes from the database, given an office ID.
*	@param int $office_id	valid office ID
* @return array					class rows (as object) of active classes
* 											FALSE if no active class found
*/
	public function get_active($office_id) {
		//course id
		$course_result = $this->course_model->get_by_office($office_id);
		if ($course_result) {
			$courses = array();
			foreach ($course_result as $key => $row) {
				$courses[$key] = $row->course_id;
			}

			//year and sem
			$year_sem = $this->year_semester_model->get_current();

			$this->db->where_in('class.course_id', $courses);

			$this->db->where('year', $year_sem->year);
			$this->db->where('semester', $year_sem->semester);

			$this->db->where('is_active', TRUE);
			$this->db->where('is_done', FALSE);

			$this->db->join('course', 'course.course_id = class.course_id');

			$this->db->order_by('year', 'desc');
			$this->db->order_by('semester', 'desc');
			$this->db->order_by('course.course_name', 'asc');
			$this->db->order_by('class.section', 'asc');

			$query = $this->db->get('class');
			if($query->num_rows() >= 1) {
				$result = $query->result();
				//add class_name attribute
				foreach ($result as $key => $row) {
					$row->class_name = $row->course_name;
				}
				return $result;
			}	else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

/**
 * Returns classes already evaluated, given an office ID.
 * @param  int $office_id	valid office ID
 * @return array					class rows (as object) of classes already evaluated
 * 												FALSE if no done classes found
 */
	public function get_done($office_id) {
		//course id
		$course_result = $this->course_model->get_by_office($office_id);
		if ($course_result) {
			$courses = array();
			foreach ($course_result as $key => $row) {
				$courses[$key] = $row->course_id;
			}

			//year and sem
			$year_sem = $this->year_semester_model->get_current();

			$this->db->where_in('class.course_id', $courses);

			$this->db->where('year', $year_sem->year);
			$this->db->where('semester', $year_sem->semester);

			$this->db->where('is_active', FALSE);
			$this->db->where('is_done', TRUE);

			$this->db->join('course', 'course.course_id = class.course_id');

			$this->db->order_by('year', 'desc');
			$this->db->order_by('semester', 'desc');
			$this->db->order_by('course.course_name', 'asc');
			$this->db->order_by('class.section', 'asc');

			$query = $this->db->get('class');
			if($query->num_rows() >= 1) {
				$result = $query->result();
				//add class_name attribute
				foreach ($result as $key => $row) {
					$row->class_name = $row->course_name;
				}
				return $result;
			}	else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

/**
 * Returns classes not yet evaluated, given an office ID.
 * @param  int $office_id	valid office ID.
 * @return array					class rows (as object) of classes to evaluate
 * 												FALSE if no to do classes found
 */
	public function get_todo($office_id) {
		//course id
		$course_result = $this->course_model->get_by_office($office_id);
		if ($course_result) {
			$courses = array();
			foreach ($course_result as $key => $row) {
				$courses[$key] = $row->course_id;
			}

			//year and sem
			$year_sem = $this->year_semester_model->get_current();

			$this->db->where_in('class.course_id', $courses);

			$this->db->where('year', $year_sem->year);
			$this->db->where('semester', $year_sem->semester);

			$this->db->where('is_active', FALSE);
			$this->db->where('is_done', FALSE);

			$this->db->join('course', 'course.course_id = class.course_id');

			$this->db->order_by('year', 'desc');
			$this->db->order_by('semester', 'desc');
			$this->db->order_by('course.course_name', 'asc');
			$this->db->order_by('class.section', 'asc');

			$query = $this->db->get('class');
			if($query->num_rows() >= 1) {
				$result = $query->result();
				//add class_name attribute
				foreach ($result as $key => $row) {
					$row->class_name = $row->course_name;
				}

				return $result;
			}	else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

/**
 * Returns all classes, given office ID.
 * @param  int $office_id	valid office ID.
 * @return array					class rows (as object)
 * 												FALSE if no class found
 */
	public function get($office_id) {
		//course id
		$course_result = $this->course_model->get_by_office($office_id);
		if ($course_result) {
			$courses = array();
			foreach ($course_result as $key => $row) {
				$courses[$key] = $row->course_id;
			}

			//year and sem
			$year_sem = $this->year_semester_model->get_current();

			$this->db->where_in('class.course_id', $courses);

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
				//add class_name attribute
				foreach ($result as $key => $row) {
					$row->class_name = $row->course_name;
				}
				return $result;
			}	else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

/**
 * Returns class row of given class ID.
 * @param  int $class_id	valid class ID.
 * @return object					class row (as object)
 * 												FALSE if class not found
 */
	public function get_by_id($class_id) {
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

/**
 * Stops class evaluation. Sets is_active to FALSE and
 * is_done to TRUE. Also deletes unused access codes.
 * @param  int $class_id	valid class ID.
 * @return boolean				TRUE if stop successful. Else, FALSE.
 */
	public function stop_evaluation($class_id) {
		$this->db->trans_start();
		//delete unused codes
		$this->load->model('access_code_model');
		$this->access_code_model->delete_unused($class_id);

		//update class
		$stop_data = array(
			'is_active' => FALSE,
			'is_done' => TRUE
			);
		$this->db->where('class_id',$class_id);
		$result = $this->db->update('class',$stop_data);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Starts class evaluation. Sets is_active to TRUE
 * and is_done to FALSE. Links evaluator ID to class ID
 * in class_evaluator table.
 * @param  int $class_id			valid class ID
 * @param  int $evaluator_id	valid user ID
 * @return boolean						TRUE if start successful. Else, FALSE.
 */
	public function start_evaluation($class_id, $evaluator_id) {
		$this->load->model('evaluator_model');
		$result = $this->evaluator_model->add($class_id, $evaluator_id);

		if ($result) {
			$start_data = array(
				'is_active' => TRUE,
				'is_done' => FALSE
				);
			$this->db->where('class_id',$class_id);
			$result2 = $this->db->update('class',$start_data);
			return $this->db->affected_rows();
		} else {
			return FALSE;
		}
	}

/**
 * Cancels class evaluation. Sets is_active and is_done to FALSE.
 * Unlinks evaluator ID and class ID in class_evaluator table.
 * Deletes all access codes and evaluation forms linked to class.
 * @param  int $class_id			valid class ID
 * @param  int $evaluator_id	valid user ID
 * @return boolean						TRUE if cancel successful. Else, FALSE.
 */
	public function cancel_evaluation($class_id, $evaluator_id) {
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

/**
 * Checks if given class' is_active is TRUE.
 * @param  int  $class_id	valid class ID
 * @return boolean				TRUE if is_active is TRUE. Else, FALSE.
 */
	public function is_active($class_id) {
		$this->db->select('is_active');
		$this->db->where('class_id', $class_id);
		$this->db->limit(1);

		$query = $this->db->get('class');

		if($query->num_rows() >= 1) {
			return $query->row()->is_active;
		}	else {
			return FALSE;
		}
	}

/**
 * Inserts class row.
 * @param int 		$course_id					valid course ID
 * @param int 		$teacher_id					valid teacher ID
 * @param string	$section						section
 * @param int			$year								year
 * @param int			$semester						semester
 * @param string	$schedule						schedule
 * @param int			$number_of_students	number of students
 * @return int												ID of successfully inserted class
 * 																		FALSE if insert failed
 */
	public function add($course_id, $teacher_id, $section, $year, $semester, $schedule, $number_of_students) {
		$data = array(
			'course_id' => $course_id,
			'teacher_id' => $teacher_id,
			'section' => $section,
			'year' => $year,
			'semester' => $semester,
			'schedule' => $schedule,
			'number_of_students' => $number_of_students
		);		
		$this->db->insert('class',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

/**
 * Updates class row.
 * @param int 		$class_id						valid class ID
 * @param int 		$course_id					valid course ID
 * @param int 		$teacher_id					valid teacher ID
 * @param string	$section						section
 * @param int			$year								year
 * @param int			$semester						semester
 * @param string	$schedule						schedule
 * @param int			$number_of_students	number of students
 * @return boolean										TRUE if update successful. Else, FALSE.
 */
	public function edit($class_id, $course_id, $teacher_id, $section, $year, $semester, $schedule, $number_of_students) {
		$data = array(
			'course_id' => $course_id,
			'teacher_id' => $teacher_id,
			'section' => $section,
			'year' => $year,
			'semester' => $semester,
			'schedule' => $schedule,
			'number_of_students' => $number_of_students
		);

		$this->db->where('class_id', $class_id);
		$result = $this->db->update('class',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $result;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes class.
 * @param  int $class_id	valid class ID.
 * @return boolean				TRUE is delete successful. Else, FALSE.
 */
	public function delete($class_id) {
		$this->db->trans_start();

		$result = $this->db->delete('class',array('class_id' => $class_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Checks if class exists in database.
 * @param  int			$course_id	valid course ID
 * @param  string		$section		section
 * @param  int			$year				year
 * @param  int			$semester		semester
 * @return boolean							TRUE if exists. Else, FALSE.
 */
	public function class_exists($course_id, $section, $year, $semester) {
		$this->db->where('course_id', $course_id);
		$this->db->where('section', $section);
		$this->db->where('year', $year);
		$this->db->where('semester', $semester);
		$this->db->limit(1);

		$query = $this->db->get('class');
		if ($query->num_rows() == 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}
}

/* End of file class_model.php */
/* Location: ./application/models/class_model.php */