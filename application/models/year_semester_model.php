<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Year_semester_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

/**
 * Returns current year and semester (row with is_current == TRUE).
 * @return object	year_semester row (as object)
 * 								FALSE if no current year and semester found
 */
	public function get_current() {
		$this->db->where('is_current', TRUE);
		$this->db->limit(1);

		$query = $this->db->get('year_semester');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}
}

/* End of file year_semester_model.php */
/* Location: ./application/models/year_semester_model.php */