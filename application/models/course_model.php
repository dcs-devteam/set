<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Course_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Returns course row.
 * @param  int $id	valid course ID
 * @return object		course row (as object)
 * 									FALSE if course not found
 */
	public function get_by_id($id) {
		$this->db->where('course_id',$id);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns courses, given an office ID.
 * @param  int $office_id	valid office ID
 * @return array					course rows (as object)
 * 												FALSE if no course found
 */
	public function get_by_office($office_id) {
		$this->db->where('office_id', $office_id);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns course name.
 * @param  int $course_id	valid course ID
 * @return string					course name
 * 												FALSE if course not found
 */
	public function get_name($course_id) {
		$this->db->select('course_name');
		$this->db->where('course_id', $course_id);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->row()->course_name;
		}	else {
			return FALSE;
		}
	}

/**
 * Returns course ID.
 * @param  string $course_name	valid course name
 * @return int									course ID
 * 															FALSE if course not found
 */
	public function get_id($course_name) {
		$this->db->select('course_id');
		$this->db->where('course_name', $course_name);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if($query->num_rows() >= 1) {
			return $query->row()->course_id;
		}	else {
			return FALSE;
		}
	}

/**
 * Checks if course exists.
 * @param  string $course_name	valid course name
 * @return boolean							TRUE if course exists. Else, FALSE.
 */
	public function course_exists($course_name) {
		$this->db->where('course_name', $course_name);
		$this->db->limit(1);

		$query = $this->db->get('course');
		if ($query->num_rows() == 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Inserts course to database.
 * @param string $course_name	course name
 * @param int $office_id			valid course ID
 * @return int 								ID of successfully inserted course
 * 														FALSE if insert failed
 */
	public function add($course_name, $office_id) {
		$data = array(
			'course_name' => $course_name,
			'office_id' => $office_id
		);		
		$this->db->insert('course',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

/**
 * Edits course.
 * @param string $course_id		valid course ID
 * @param string $course_name
 * @param int $office_id			valid office ID
 * @return int 								ID of successfully edited course
 * 														FALSE if update failed
 */
	public function edit($course_id, $course_name, $office_id) {
		$data = array(
			'course_name' => $course_name,
			'office_id' => $office_id
		);		

		$this->db->where('course_id', $course_id);
		$result = $this->db->update('course',$data);
		
		if ($this->db->affected_rows() >= 0) {
			return $result;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes course.
 * @param  int $course_id	valid course ID.
 * @return boolean				TRUE is delete successful. Else, FALSE.
 */
	public function delete($course_id) {
		$this->db->trans_start();

		$result = $this->db->delete('course',array('course_id' => $course_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file course_model.php */
/* Location: ./application/models/course_model.php */