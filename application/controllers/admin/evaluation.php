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
	public function set() {
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/evaluation/set','',TRUE);
		$this->parser->parse('layouts/default', $data);
	}
	public function view() {
		$view_data = array(
			'eval_periods' => $this->evaluation_period_model->get_evaluation_periods(),
			'active_period' => $this->evaluation_period_model->get_active_evaluation_period()
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/evaluation/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file evaluation.php */
/* Location: ./application/controllers/admin/evaluation.php */