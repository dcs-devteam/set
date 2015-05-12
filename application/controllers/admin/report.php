<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin' && $this->session->userdata('role') !== 'staff') {
			show_403_error();
		}
		$this->load->model('class_model');
		$this->load->model('evaluation_model');
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after set/admin/report.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all teachers that have classes for the current semester.
 */
	public function view() {
		$view_data = array(
			'teachers' => $this->teacher_model->get_current($this->office_id)
			);

		$data['body_content'] = $this->load->view('contents/admin/report/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Generates PDF file containing the evaluation report of
 * given teacher.
 * @param  int $teacher_id	valid teacher ID
 */
	public function generate($teacher_id = FALSE, $include_forms = TRUE) {
		$uri_segment = $this->uri->segment(5);
		if (!empty($uri_segment)) {
			$include_forms = $this->uri->segment(5);
		}
		$teacher = $this->teacher_model->get_by_id($teacher_id);
		//check if teacher ID is valid
		if ($teacher_id === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Entry Exists',
				'error_message' => 'Record for the given teacher_id ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);

			$this->parser->parse('layouts/default', $data);
		} else {
			$classes = $this->teacher_model->get_classes($teacher_id, $this->office_id);
			foreach ($classes as $idx => $class) {
				$evaluations = $this->evaluation_model->get_by_class($class->class_id);

				$class->report = array();

				if (count($evaluations) <= 0 OR $evaluations == FALSE) {
					unset($classes[$idx]);
				} else {
					//individual forms
					$class->report['evaluations'] = array();
					foreach ($evaluations as $key => $evaluation) {
						$class->report['evaluations'][$key] = $this->evaluation_model->get_content($evaluation->content_id);
						$class->report['evaluations'][$key]->date = $evaluation->date;
						$class->report['evaluations'][$key]->strong_points = base64_decode($class->report['evaluations'][$key]->strong_points);
						$class->report['evaluations'][$key]->weak_points = base64_decode($class->report['evaluations'][$key]->weak_points);
						$class->report['evaluations'][$key]->recommendations = base64_decode($class->report['evaluations'][$key]->recommendations);
					}

					//detail
					$class->report['detail'] = array();
					//initialize
					for ($i=1; $i <= 35; $i++) { 
						$class->report['detail'][$i] = 0;
					}

					//add
					foreach ($class->report['evaluations'] as $key => $evaluation) {
						for ($i=1; $i <= 35; $i++) {
							$class->report['detail'][$i] += $evaluation->{'i'.$i};
						}
					}

					//average
					for ($i=1; $i <= 35; $i++) { 
						$class->report['detail'][$i] /= sizeof($evaluations);
					}

					//summary
					$class->report['summary'] = array();
					//average a
					$class->report['summary']['average']['a'] = 0;
					for ($i=1; $i <= 10; $i++) { 
						$class->report['summary']['average']['a'] += $class->report['detail'][$i];
					}
					$class->report['summary']['average']['a'] /= 10;
					//average b
					$class->report['summary']['average']['b'] = 0;
					for ($i=11; $i <= 20; $i++) { 
						$class->report['summary']['average']['b'] += $class->report['detail'][$i];
					}
					$class->report['summary']['average']['b'] /= 10;
					//average c
					$class->report['summary']['average']['c'] = 0;
					for ($i=21; $i <= 30; $i++) { 
						$class->report['summary']['average']['c'] += $class->report['detail'][$i];
					}
					$class->report['summary']['average']['c'] /= 10;
					//average d
					$class->report['summary']['average']['d'] = 0;
					for ($i=31; $i <= 35; $i++) { 
						$class->report['summary']['average']['d'] += $class->report['detail'][$i];
					}
					$class->report['summary']['average']['d'] /= 5;

					//grand average
					$class->report['summary']['average']['grand'] = ($class->report['summary']['average']['a'] * 0.7) + ($class->report['summary']['average']['b'] * 0.2) + ($class->report['summary']['average']['c'] * 0.05) + ($class->report['summary']['average']['d'] * 0.05);

					//qualitative rating
					$class->report['summary']['rating'] = qualitative_rating($class->report['summary']['average']['grand']);
					
					//detail
					$class->report['questions'] = evaluation_questions();

					//strong points
					$class->report['strong_points'] = array();

					$s_index = 1;
					foreach ($class->report['evaluations'] as $key => $evaluation) {
						if (!empty($evaluation->strong_points)) {
							$class->report['strong_points'][$s_index] = $evaluation->strong_points;
							$s_index++;
						}
					}

					//weak points
					$class->report['weak_points'] = array();

					$w_index = 1;
					foreach ($class->report['evaluations'] as $key => $evaluation) {
						if (!empty($evaluation->weak_points)) {
							$class->report['weak_points'][$w_index] = $evaluation->weak_points;
							$w_index++;
						}
					}

					//recommendations
					$class->report['recommendations'] = array();

					$r_index = 1;
					foreach ($class->report['evaluations'] as $key => $evaluation) {
						if (!empty($evaluation->recommendations)) {
							$class->report['recommendations'][$r_index] = $evaluation->recommendations;
							$r_index++;
						}
					}
				}
			}

			//check if classes is not empty
			if (count($classes) <= 0) {
				$error_data = array(
					'error_title' => 'No Evaluations for Given Teacher',
					'error_message' => 'No evaluations were submitted for '.$teacher->first_name.' '.$teacher->last_name.'.'
					);
				$data['body_content'] = $this->load->view('contents/admin/report/error', $error_data, TRUE);

				$this->parser->parse('layouts/default', $data);
				return;
			}

			$view_data = array(
				'classes' => $classes,
				'teacher' => $this->teacher_model->get_by_id($class->teacher_id),
				'office' => $this->office_model->get_by_id($this->office_id)->name,
				'include_forms' => $include_forms
			);

			$data['page_title'] = $teacher->last_name.", ".$teacher->first_name;
			$data['body_content'] = $this->load->view('contents/admin/report/report',$view_data,TRUE);

			//render webpage (for testing). comment out pdf_create line below
			$this->parser->parse('layouts/report', $data);

			//pdf
			$this->load->helper(array('wkhtmltopdf', 'file'));
			$html = $this->parser->parse('layouts/report', $data, TRUE);

			$this->load->helper('file');
			if (write_file('assets/temp/temp.php', $html)) {
				$filename = $teacher->last_name.", ".$teacher->first_name;
				// pdf_create($html, $filename);
				delete_files('assets/temp/');
			}
		}
	}
}

/* End of file report.php */
/* Location: ./application/controllers/admin/reports.php */
