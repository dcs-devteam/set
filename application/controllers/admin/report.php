<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (empty($this->session->userdata('role'))) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			$message_403 = "You don't have permission to access the URL you are trying to reach.";
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
		$this->load->model('class_model');
		$this->load->model('evaluation_model');
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->office_id = $this->session->userdata('office_id');
	}

	public function index() {
		$this->view();
	}

	public function view() {
		$view_data = array(
			'classes_already_evaluated' => $this->class_model->get_done($this->office_id),
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/report/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

	public function generate($class_id) {
		$class = $this->class_model->get_by_id($class_id);
		$evaluations = $this->evaluation_model->get_by_class($class_id);

		$view_data = array(
			'class' => $class,
			'teacher' => $this->teacher_model->get($class->teacher_id),
			);

		//detail
		$view_data['detail'] = array();
		//initialize
		for ($i=1; $i <= 35; $i++) { 
			$view_data['detail'][$i] = 0;
		}

		//add
		foreach ($evaluations as $key => $evaluation) {
			$evaluation_content = $this->evaluation_model->get_content($evaluation->content_id);
			for ($i=1; $i <= 35; $i++) {
				$view_data['detail'][$i] += $evaluation_content->{'i'.$i};
			}
		}

		//average
		for ($i=1; $i <= 35; $i++) { 
			$view_data['detail'][$i] /= sizeof($evaluations);
		}

		//summary
		$view_data['summary'] = array();
		//average a
		$view_data['summary']['average']['a'] = 0;
		for ($i=1; $i <= 10; $i++) { 
			$view_data['summary']['average']['a'] += $view_data['detail'][$i];
		}
		$view_data['summary']['average']['a'] /= 10;
		//average b
		$view_data['summary']['average']['b'] = 0;
		for ($i=11; $i <= 20; $i++) { 
			$view_data['summary']['average']['b'] += $view_data['detail'][$i];
		}
		$view_data['summary']['average']['b'] /= 10;
		//average c
		$view_data['summary']['average']['c'] = 0;
		for ($i=21; $i <= 30; $i++) { 
			$view_data['summary']['average']['c'] += $view_data['detail'][$i];
		}
		$view_data['summary']['average']['c'] /= 10;
		//average d
		$view_data['summary']['average']['d'] = 0;
		for ($i=31; $i <= 35; $i++) { 
			$view_data['summary']['average']['d'] += $view_data['detail'][$i];
		}
		$view_data['summary']['average']['d'] /= 5;

		//grand average
		$view_data['summary']['average']['grand'] = ($view_data['summary']['average']['a'] * 0.7) + ($view_data['summary']['average']['b'] * 0.2) + ($view_data['summary']['average']['c'] * 0.05) + ($view_data['summary']['average']['d'] * 0.05);

		//qualitative rating
		if ($view_data['summary']['average']['grand'] <= 1.49) {
			$view_data['summary']['rating'] = 'Excellent';
		} else if (1.50 <= $view_data['summary']['average']['grand'] && $view_data['summary']['average']['grand'] <= 2.49) {
			$view_data['summary']['rating'] = 'Very Good';
		} else if (2.50 <= $view_data['summary']['average']['grand'] && $view_data['summary']['average']['grand'] <= 3.49) {
			$view_data['summary']['rating'] = 'Good';
		} else if (3.50 <= $view_data['summary']['average']['grand'] && $view_data['summary']['average']['grand'] <= 4.49) {
			$view_data['summary']['rating'] = 'Conditional';
		} else {
			$view_data['summary']['rating'] = 'Poor';
		}

		//detail
		$view_data['questions'] = evaluation_questions();

		//strong points
		$view_data['strong_points'] = array();

		$s_index = 1;
		foreach ($evaluations as $key => $evaluation) {
			$evaluation_content = $this->evaluation_model->get_content($evaluation->content_id);
			if (!empty($evaluation_content->strong_points)) {
				$view_data['strong_points'][$s_index] = $evaluation_content->strong_points;
				$s_index++;
			}
		}

		//weak points
		$view_data['weak_points'] = array();

		$w_index = 1;
		foreach ($evaluations as $key => $evaluation) {
			$evaluation_content = $this->evaluation_model->get_content($evaluation->content_id);
			if (!empty($evaluation_content->weak_points)) {
				$view_data['weak_points'][$w_index] = $evaluation_content->weak_points;
				$w_index++;
			}
		}

		//recommendations
		$view_data['recommendations'] = array();

		$r_index = 1;
		foreach ($evaluations as $key => $evaluation) {
			$evaluation_content = $this->evaluation_model->get_content($evaluation->content_id);
			if (!empty($evaluation_content->recommendations)) {
				$view_data['recommendations'][$r_index] = $evaluation_content->recommendations;
				$r_index++;
			}
		}

		$data['page_title'] = $class->year.'-'.format_semester($class->semester).' - '.$view_data['teacher']->last_name.', '.$view_data['teacher']->first_name.' - '.$class->class_name.' '.$class->section;
		$data['body_content'] = $this->load->view('contents/admin/report/report',$view_data,TRUE);

		//render webpage
		// $this->parser->parse('layouts/report', $data);

		//pdf
		$this->load->helper(array('dompdf', 'file'));
		$html = $this->parser->parse('layouts/report', $data, TRUE);
		$filename = $class->year.'-'.format_semester($class->semester).' - '.$view_data['teacher']->last_name.', '.$view_data['teacher']->first_name.' - '.$class->class_name.' '.$class->section;
		pdf_create($html, $filename);
	}
}

/* End of file report.php */
/* Location: ./application/controllers/admin/reports.php */