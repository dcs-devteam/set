<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evaluation_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

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
}

/* End of file evaluation_model.php */
/* Location: ./application/models/evaluation_model.php */