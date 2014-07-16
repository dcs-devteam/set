<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as trainee
		if (empty($this->session->userdata('account_type'))) {
			redirect(base_url());
		} else if ($this->session->userdata('account_type') !== 'a') {
			$message_403 = "You don't have permission to access the url you are trying to reach.";
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
		$this->load->model('evaluation_period_model');
	}

	public function index() {
		redirect('admin/evaluation/view');
	}

	public function view() {
		$this->load->helper('date');
		$view_data = array(
			'eval_periods' => $this->evaluation_period_model->get(),
			'active_period' => $this->evaluation_period_model->get_active()
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/evaluation/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

	public function set() {
		$this->load->library('form_validation');
		//set validation rules
		$validation_rules = array(
			array(
				'field' => 'year',
				'label' => 'Year',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'semester',
				'label' => 'Semester',
				'rules' => 'trim|required|xss_clean|callback_unique_year_and_sem'
				),
			array(
				'field' => 'start_date',
				'label' => 'Start Date',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'end_date',
				'label' => 'End Date',
				'rules' => 'trim|required|xss_clean|callback_end_date_after_start_date|callback_unique_date_range'
				),
			array(
				'field' => 'is_active',
				'label' => 'Is Active',
				'rules' => 'trim|xss_clean|callback_valid_is_active'
				)
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/admin/evaluation/set','',TRUE);
		} else {
			//validation success, set new evaluation period
			$set_result = $this->set_eval_period();

			$message = '';
			$error = '';
			if ($set_result) {
				$message = 'Evaluation period was successfully set.';
			} else {
				$message = 'Failed to set evaluation period.';
				$error = $this->db->_error_message();
			}
			$set_data = array('message' => $message, 'error' => $error);
			$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$set_data,TRUE);
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

	private function set_eval_period() {
		$year = $this->input->post('year');
		$sem = $this->input->post('semester');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$is_active = $this->input->post('is_active');
		if (empty($is_active)) {
			$is_active = 0;
		}

		$result = $this->evaluation_period_model->set($year, $sem, $start_date, $end_date, $is_active);

		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit($id) {
		$result = $this->evaluation_period_model->get_by_id($id);
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given evaluation period ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$this->load->library('form_validation');
			//set validation rules
			$validation_rules = array(
				array(
					'field' => 'year',
					'label' => 'Year',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'semester',
					'label' => 'Semester',
					'rules' => 'trim|required|xss_clean|callback_unique_new_year_and_sem['.$result->evaluation_period_id.']'
					),
				array(
					'field' => 'start_date',
					'label' => 'Start Date',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'end_date',
					'label' => 'End Date',
					'rules' => 'trim|required|xss_clean|callback_end_date_after_start_date|callback_unique_new_date_range['.$result->evaluation_period_id.']'
					),
				array(
					'field' => 'is_active',
					'label' => 'Is Active',
					'rules' => 'trim|xss_clean|callback_valid_is_active'
					)
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$result_data = array('period' => $result);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/edit',$result_data,TRUE);
			} else {
				//validation success, set new evaluation period
				$edit_result = $this->edit_eval_period($id);

				$message = '';
				$error = '';
				if ($edit_result) {
					$message = 'Evaluation period was successfully edited.';
				} else {
					$message = 'Failed to edit evaluation period.';
					$error = $this->db->_error_message();
				}
				$edit_result_data = array('message' => $message, 'error' => $error);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$edit_result_data,TRUE);
			}
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

	private function edit_eval_period($id) {
		$year = $this->input->post('year');
		$sem = $this->input->post('semester');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$is_active = $this->input->post('is_active');
		if (empty($is_active)) {
			$is_active = 0;
		}

		$result = $this->evaluation_period_model->edit($id, $year, $sem, $start_date, $end_date, $is_active);

		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$result = $this->evaluation_period_model->get_by_id($id);
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given evaluation period ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'id' => $id,
					'year' => $result->year,
					'semester' => $result->semester,
					'start_date' => $result->start_date,
					'end_date' => $result->end_date
					);

				$data['body_content'] = $this->load->view('contents/admin/evaluation/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_eval_period($id);

				$message = '';
				$error = '';
				if ($delete_result) {
					$message = 'Evaluation period was successfully deleted.';
				} else {
					$message = 'Evaluation period delete failed.';
					$error = $this->db->_error_message();
				}
				$delete_data = array('message' => $message, 'error' => $error);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$delete_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

	private function delete_eval_period($id) {
		if ($this->evaluation_period_model->delete($id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function stop($id) {
		$result = $this->evaluation_period_model->get_by_id($id);
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given evaluation period ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if($result->is_active == FALSE) {
			$error_data = array(
				'error_title' => 'Entry Already Inactive',
				'error_message' => 'The given evaluation period is already inactive.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through stop-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$stop_confirm_data = array(
					'id' => $id,
					'year' => $result->year,
					'semester' => $result->semester,
					'start_date' => $result->start_date,
					'end_date' => $result->end_date
					);

				$data['body_content'] = $this->load->view('contents/admin/evaluation/stop_confirm',$stop_confirm_data,TRUE);
			} else {
				$stop_result = $this->stop_eval_period($id);

				$message = '';
				$error = '';
				if ($stop_result) {
					$message = 'Evaluation period was successfully stopped.';
				} else {
					$message = 'Evaluation period stop failed.';
					$error = $this->db->_error_message();
				}
				$delete_data = array('message' => $message, 'error' => $error);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$delete_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

	private function stop_eval_period($id) {
		if ($this->evaluation_period_model->stop($id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function start($id) {
		$result = $this->evaluation_period_model->get_by_id($id);
		//check if ID is valid
		if ($result === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given evaluation period ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			$this->load->helper('date');
			//check if start_date<now<end_date
			if (!(
				(date_create($result->start_date) < date_create(unix_to_human(now()))) && 
				(date_create($result->end_date) > date_create(unix_to_human(now())))
			 )) {
				$error_data = array(
					'error_title' => 'Cannot Start Evaluation Period',
					'error_message' => 'You cannot start the evaluation period because today\'s date ('.format_date(unix_to_human(now())).') is not within the period\'s date range ('.format_date($result->start_date).' - '.format_date($result->end_date).').'
					);
				$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
			} else {
				$start_result = $this->start_eval_period($id);
				$message = '';
				$error = '';
				if ($start_result) {
					$message = 'Evaluation period was successfully started.';
				} else {
					$message = 'Evaluation period start failed.';
					$error = $this->db->_error_message();
				}
				$delete_data = array('message' => $message, 'error' => $error);
				$data['body_content'] = $this->load->view('contents/admin/evaluation/function_result',$delete_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

	private function start_eval_period($id) {
		if ($this->evaluation_period_model->start($id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function unique_year_and_sem($sem) {
		$year = $this->input->post('year');
		$result = $this->evaluation_period_model->get($sem, $year);
		if ($result == FALSE) {
			return TRUE;
		} else {
			$this->form_validation->set_message('unique_year_and_sem','Evaluation period for given semester and year already exists. Choose another year or semester.');
			return FALSE;
		}
	}

	public function unique_date_range($end_date) {
		$start_date = $this->input->post('start_date');
		$result = $this->evaluation_period_model->date_overlaps($start_date, $end_date)[0];
		if ($result == FALSE) {
			return TRUE;
		} else {
			$this->form_validation->set_message('unique_date_range','Date range overlaps with another evaluation period ('.format_date($result->start_date).' - '.format_date($result->end_date).'). Choose another start or end date.');
			return FALSE;
		}
	}

	public function unique_new_year_and_sem($sem, $id) {
		$year = $this->input->post('year');
		if ($this->same_old_year_and_sem($sem, $year, $id)) {
			return TRUE;
		} else {
			if (!$this->unique_year_and_sem($sem)) {
				$this->form_validation->set_message('unique_new_year_and_sem','Evaluation period for given semester and year already exists. Choose another year or semester.');
				return FALSE;
			} else {
				return true;
			}
		}
	}

	public function unique_new_date_range($end_date, $id) {
		$start_date = $this->input->post('start_date');
		if ($this->same_old_date_range($start_date, $end_date, $id)) {
			return TRUE;
		} else {
			if (!$this->unique_date_range($end_date)) {
				$result_array = $this->evaluation_period_model->date_overlaps($start_date, $end_date);
				$result = $result_array[0];
				foreach ($result_array as $period) {
					if ($period->evaluation_period_id != $id) {
						$result = $period;
						break;
					}
				}
				if ($result->evaluation_period_id == $id) {
					return TRUE;
				} else {
					$this->form_validation->set_message('unique_new_date_range','Date range overlaps with another evaluation period ('.format_date($result->start_date).' - '.format_date($result->end_date).'). Choose another start or end date.');
					return FALSE;
				}					
			} else {
				return TRUE;
			}
		}
		return FALSE;
	}

	public function valid_is_active($is_active) {
		$this->load->helper('date');
		if ($is_active) {
			if (human_to_unix($this->input->post('start_date').' 00:00:00') <= now() && now() <= human_to_unix($this->input->post('end_date').' 23:59:59')) {
				return TRUE;
			} else {
				$this->form_validation->set_message('valid_is_active','You cannot activate this evaluation period because the date now ('.format_date(unix_to_human(now())).') is not within the date range ('.format_date($this->input->post('start_date')).' - '.format_date($this->input->post('end_date')).').');
				return FALSE;
			}
		} else {
			return TRUE;
		}
	}

	public function end_date_after_start_date($end_date) {
		$this->load->helper('date');
		if (!(human_to_unix($this->input->post('start_date').' 00:00:00') < human_to_unix($this->input->post('end_date').' 23:59:59'))) {
			$this->form_validation->set_message('end_date_after_start_date','End Date must not be before Start Date.');
			return FALSE;
		}
		return TRUE;
	}

	private function same_old_year_and_sem($sem, $year, $id) {
		$result = $this->evaluation_period_model->get($sem, $year);
		if ($result !== FALSE) {
			if ($result->evaluation_period_id == $id) {
				return TRUE;
			}
		}
		return FALSE;
	}

	private function same_old_date_range($start_date, $end_date, $id) {
		$result = $this->evaluation_period_model->get_by_date($start_date, $end_date);
		if ($result != FALSE) {
			if ($result->evaluation_period_id == $id) {
				return TRUE;
			}
		}
		return FALSE;
	}

}

/* End of file evaluation.php */
/* Location: ./application/controllers/admin/evaluation.php */