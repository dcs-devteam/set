<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evaluation_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Inserts evaluation details to database.
 * Calls add_content to insert evaluation content.
 * @param  int $class_id				valid class ID
 * @param  string $access_code	valid access code
 * @param  array $content				evaluation form content
 * @return boolean							TRUE if insert successful. Else, FALSE.
 */
	public function submit($class_id, $access_code, $content) {
		//insert content
		$content_id = $this->add_content($content, $class_id);
		if ($content_id) {
			$data = array(
				'class_id' => $class_id,
				'access_code' => $access_code,
				'content_id' => $content_id
				);
			$result = $this->db->insert('evaluation',$data);
			return $result;
		} else {
			return FALSE;
		}
	}

/**
 * Inserts evaluation content to database.
 * @param array $content		evaluation form content
 * @param int $class_id			valid class ID
 * @return int 							ID of successfully inserted content
 * 													FALSE if insert failed
 */
	private function add_content($content, $class_id) {
		$content_data = array();
		$content_data['class_id'] = $class_id;
		for ($i=1; $i <= 36; $i++) { 
			$content_data['i'.$i] = $content[$i][0];
		}
		$content_data['strong_points'] = $content['strong_points'];
		$content_data['weak_points'] = $content['weak_points'];
		$content_data['recommendations'] = $content['recommendations'];

		$result = $this->db->insert('evaluation_content',$content_data);

		if ($result) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

/**
 * Returns evaluation row, given access code.
 * @param  string $code	valid access code
 * @return object				evaluation row (as object)
 * 											FALSE if evaluation not found
 */
	public function get_by_access_code($code) {
		$this->db->from('evaluation');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns all evaluations of given class.
 * @param  int $class_id	valid class ID
 * @return array					evaluation rows (as object)
 * 												FALSE if no evaluation found
 */
	public function get_by_class($class_id) {
		$this->db->from('evaluation');
		$this->db->where('class_id', $class_id);

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

/**
 * Deletes all evaluations of given class
 * @param  int $class_id	valid class ID
 * @return boolean				TRUE if delete successful. Else, FALSE.
 */
	public function delete_by_class($class_id) {
		$this->db->trans_start();
		//delete evaluation content
		$class_evaluation = $this->get_by_class($class_id);
		if ($class_evaluation) {
			foreach ($class_evaluation as $key => $evaluation_content) {
				$this->db->delete('evaluation_content',array('content_id' => $evaluation_content->content_id));
			}
		}

		$result = $this->db->delete('evaluation',array('class_id' => $class_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Returns evaluation content given evaluation ID.
 * @param  int $evaluation_id	valid evaluation ID
 * @return object							evaluation content row (as object)
 * 														FALSE if no content found
 */
	public function get_content($evaluation_id) {
		$this->db->from('evaluation_content');
		$this->db->where('content_id', $evaluation_id);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns number of submitted evaluation forms given the class ID.
 * @param  int $class_id	valid class ID
 * @return int						number of submitted evaluations for the class
 */
	public function count_submissions($class_id) {
		$this->db->from('evaluation_content');
		$this->db->where('class_id', $class_id);

		$query = $this->db->get();

		return $query->num_rows();
	}

/**
 * Returns the total number of submitted evaluation forms and the total number of students.
 * @param  int $office_id	valid office ID
 * @return array						number of submitted evaluations ['evaluations']
 *                          number of students ['students']
 */
	public function total_evaluations($office_id) {
		$this->load->model('class_model');
		$classes = $this->class_model->get($office_id);
		$result['students'] = 0;
		$result['evaluations'] = 0;
		if (is_array($classes) && count($classes) > 0) {
			foreach ($classes as $class) {
				$result['students'] += $class->number_of_students;
				$result['evaluations'] += $this->count_submissions($class->class_id);
			}
		}

		return $result;
	}
}

/* End of file evaluation_model.php */
/* Location: ./application/models/evaluation_model.php */