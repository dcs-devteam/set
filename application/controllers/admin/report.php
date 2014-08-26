<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (empty($this->session->userdata('role'))) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin' && $this->session->userdata('role') !== 'staff') {
			$message_403 = 'You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.';
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
		$this->load->model('class_model');
		$this->load->model('evaluation_model');
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after evaluation/admin/report.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all classes already evaluated of the office of user.
 */
	public function view() {
		$view_data = array(
			'classes_already_evaluated' => $this->class_model->get_done($this->office_id),
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/report/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Generates PDF file containing the evaluation report of
 * given class.
 * @param  int $class_id	valid class ID
 */
	public function generate($class_id) {
		$class = $this->class_model->get_by_id($class_id);
		$evaluations = $this->evaluation_model->get_by_class($class_id);

		$view_data = array(
			'class' => $class,
			'teacher' => $this->teacher_model->get_by_id($class->teacher_id),
			'office' => $this->office_model->get($this->office_id)->name,
			);

		//individual forms
		$view_data['evaluations'] = array();
		foreach ($evaluations as $key => $evaluation) {
			$view_data['evaluations'][$key] = $this->evaluation_model->get_content($evaluation->content_id);
			$view_data['evaluations'][$key]->date = $evaluation->date;
			$view_data['evaluations'][$key]->strong_points = base64_decode($view_data['evaluations'][$key]->strong_points);
			$view_data['evaluations'][$key]->weak_points = base64_decode($view_data['evaluations'][$key]->weak_points);
			$view_data['evaluations'][$key]->recommendations = base64_decode($view_data['evaluations'][$key]->recommendations);
		}

		//detail
		$view_data['detail'] = array();
		//initialize
		for ($i=1; $i <= 35; $i++) { 
			$view_data['detail'][$i] = 0;
		}

		//add
		foreach ($view_data['evaluations'] as $key => $evaluation) {
			for ($i=1; $i <= 35; $i++) {
				$view_data['detail'][$i] += $evaluation->{'i'.$i};
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
		foreach ($view_data['evaluations'] as $key => $evaluation) {
			if (!empty($evaluation->strong_points)) {
				$view_data['strong_points'][$s_index] = $evaluation->strong_points;
				$s_index++;
			}
		}

		//weak points
		$view_data['weak_points'] = array();

		$w_index = 1;
		foreach ($view_data['evaluations'] as $key => $evaluation) {
			if (!empty($evaluation->weak_points)) {
				$view_data['weak_points'][$w_index] = $evaluation->weak_points;
				$w_index++;
			}
		}

		//recommendations
		$view_data['recommendations'] = array();

		$r_index = 1;
		foreach ($view_data['evaluations'] as $key => $evaluation) {
			if (!empty($evaluation->recommendations)) {
				$view_data['recommendations'][$r_index] = $evaluation->recommendations;
				$r_index++;
			}
		}

		$data['page_title'] = $class->year.'-'.format_semester($class->semester).' - '.$view_data['teacher']->last_name.', '.$view_data['teacher']->first_name.' - '.$class->class_name.' '.$class->section;
		$data['body_content'] = $this->load->view('contents/admin/report/report',$view_data,TRUE);

		//render webpage (for testing). comment out pdf_create line below
		// $this->parser->parse('layouts/report', $data);

		//pdf
		$this->load->helper(array('wkhtmltopdf', 'file'));
		$html = $this->parser->parse('layouts/report', $data, TRUE);

		if (write_file('assets/temp/temp.php', $html)) {
			$filename = $class->year.'-'.format_semester($class->semester).' - '.$view_data['teacher']->last_name.', '.$view_data['teacher']->first_name.' - '.$class->class_name.' '.$class->section;
			pdf_create($html, $filename);
			delete_files('assets/temp/');
		}
	}
}

/* End of file report.php */
/* Location: ./application/controllers/admin/reports.php */