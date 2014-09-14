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

		$this->db->order_by('is_current', 'desc');
		$this->db->order_by('start_date', 'desc');
		$this->db->order_by('year', 'desc');
		$this->db->order_by('semester', 'desc');

		$this->db->limit(1);

		$query = $this->db->get('year_semester');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns given year and semester row.
 * @param 	int 		year 			valid year
 * @param 	int 		semester	valid semester
 * @return	object						year_semester row (as object)
 * 									          FALSE if no year and semester found
 */
	public function get_by_year_semester($year, $semester) {
		$this->db->where('year', $year);
		$this->db->where('semester', $semester);

		$this->db->order_by('is_current', 'desc');
		$this->db->order_by('start_date', 'desc');
		$this->db->order_by('year', 'desc');
		$this->db->order_by('semester', 'desc');

		$this->db->limit(1);

		$query = $this->db->get('year_semester');
		if($query->num_rows() >= 1) {
			return $query->row();
		}	else {
			return FALSE;
		}
	}

/**
 * Returns current year and semester (row with is_current == TRUE).
 * @return object	year_semester row (as object)
 * 								FALSE if no current year and semester found
 */
	public function get() {
		$this->db->order_by('is_current', 'desc');
		$this->db->order_by('start_date', 'desc');
		$this->db->order_by('year', 'desc');
		$this->db->order_by('semester', 'desc');

		$query = $this->db->get('year_semester');
		if($query->num_rows() >= 1) {
			return $query->result();
		}	else {
			return FALSE;
		}
	}

/**
 * Updates current year and semester.
 */
	public function update_current() {		
		$this->db->query('UPDATE year_semester SET is_current=0');
		$this->db->query('UPDATE year_semester SET is_current=1 WHERE `start_date` <= now() ORDER BY `start_date` DESC LIMIT 1;');
	}

/**
 * Inserts year and semester.
 * @param string $year
 * @param string $semester
 * @param string $start_date
 * @return boolean 							TRUE if successfully inserted
 * 														  FALSE if insert failed
 */
	public function add($year, $semester, $start_date) {
		$data = array(
			'year' => $year,
			'semester' => $semester,
			'start_date' => $start_date
		);

		$this->db->insert('year_semester',$data);
		
		if ($this->db->affected_rows() >= 0) {
			//update current year and semester
			$this->update_current();
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Inserts year and semester.
 * @param string $year
 * @param string $semester
 * @param string $start_date
 * @param string $old_year
 * @param string $old_semester
 * @return boolean 							TRUE if successfully updated
 * 														  FALSE if update failed
 */
	public function edit($year, $semester, $start_date, $old_year, $old_semester) {
		$data = array(
			'year' => $year,
			'semester' => $semester,
			'start_date' => $start_date
		);

		$this->db->where('year', $old_year);
		$this->db->where('semester', $old_semester);
		$this->db->update('year_semester',$data);
		
		if ($this->db->affected_rows() >= 0) {
			//update current year and semester
			$this->update_current();
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Deletes year and semester.
 * @param  int $year			valid year
 * @param  int $semester	valid semester
 * @return boolean			TRUE is delete successful. Else, FALSE.
 */
	public function delete($year, $semester) {
		$this->db->trans_start();

		$result = $this->db->delete('year_semester',array('year' => $year, 'semester' => $semester));
		echo 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}

/* End of file year_semester_model.php */
/* Location: ./application/models/year_semester_model.php */