<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Access_code_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Insert access code to database.
 * @param int $class_id				valid class ID
 * @param string $access_code	access code
 * @return boolean 						TRUE if insert successful. Else, FALSE.
 */
	public function add($class_id, $access_code) {
		$this->load->model('class_model');
		if ($this->class_model->get_by_id($class_id)) {
			$data = array(
				'class_id' => $class_id,
				'access_code' => $access_code
				);
			$result = $this->db->insert('access_code',$data);
			return $this->db->affected_rows();
		} else {
			return FALSE;
		}
	}

/**
 * Get access code row.
 * @param  string $code	access code
 * @return object				access code row (as object)
 * 											FALSE if code not found
 */
	public function get_by_code($code) {
		$this->db->from('access_code');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns all access codes for given class
 * @param  int $class_id	valid class ID
 * @return array					array of access code rows (as objects)
 * 												FALSE if class not exists
 */
	public function get_by_class($class_id) {
		$this->db->from('access_code');
		$this->db->where('class_id', $class_id);

		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns all unused access codes for given class
 * @param  int $class_id	valid class ID
 * @return array					array of unused access code rows (as objects)
 * 												FALSE if class not exists
 */
	public function get_unused($class_id) {
		$this->db->from('access_code');
		$this->db->where('class_id', $class_id);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			$codes = $query->result();
			$unused = array();
			foreach ($codes as $code) {
				if (!$this->is_used($code->access_code)) {
					array_push($unused, $code);
				}
			}

			if (count($unused) > 0) {
				return $unused;
			} else {
				return FALSE;
			}
		}	else {
			return FALSE;
		}
	}

/**
 * Returns class ID of given access code
 * @param  string $code	valid access code
 * @return int					class ID
 */
	public function get_class_id($code) {
		$this->db->from('access_code');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row()->class_id;
		}	else {
			return FALSE;
		}
	}

/**
 * Checks if code is already used (is in evaluation table).
 * @param  string  $code	valid access code
 * @return boolean				TRUE if used. Else, FALSE.
 */
	public function is_used($code) {
		$this->load->model('evaluation_model');
		$evaluation = $this->evaluation_model->get_by_access_code($code);

		if ($evaluation) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Checks if code is in database.
 * @param  string $code	access code
 * @return boolean			TRUE if code is in database. Else, FALSE.
 */
	public function code_exists($code) {
		$this->db->from('access_code');
		$this->db->where('access_code', $code);
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return TRUE;
		}	else {
			return FALSE;
		}
	}

/**
 * Delete all codes linked to given class.
 * @param  int $class_id	valid class ID
 * @return boolean				TRUE if delete successful. Else, FALSE.
 */
	public function delete_by_class($class_id) {
		$this->db->trans_start();

		$result = $this->db->delete('access_code',array('class_id' => $class_id));

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

/**
 * Delete all unused codes linked to given class 
 * (codes not in evaluation table).
 * @param  int $class_id	valid class ID
 * @param  int $limit			number of unused codes to delete
 * @return boolean				TRUE if delete successful. Else, FALSE.
 */
	public function delete_unused($class_id, $limit = FALSE) {
		$codes = $this->get_by_class($class_id);
		$this->db->trans_start();

		//find unused codes
		$this->load->model('evaluation_model');

		$unused_codes = array();
		// foreach ($codes as $code) {
		// 	if (!$this->is_used($code->access_code)) {
		// 		array_push($unused_codes, $code->access_code);
		// 	}
		// }
		if ($limit === FALSE) {
			$limit = count($codes);
		} 
		
		for ($i=0; $i < $limit; $i++) {
			if (!$this->is_used($codes[$i]->access_code)) {
				array_push($unused_codes, $codes[$i]->access_code);
			}
		}
		if (is_array($unused_codes) && count($unused_codes) > 0) {
			$this->db->where_in('access_code', $unused_codes);
			$result = $this->db->delete('access_code');
		}
		

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file access_code_model.php */
/* Location: ./application/models/access_code_model.php */