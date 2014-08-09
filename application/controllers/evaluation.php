<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as student
		if (empty($this->session->userdata('class_id'))) {
			$message_403 = 'You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.';
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}

		$this->load->model('class_model');

		$this->class_id = $this->session->userdata('class_id');
	}

	public function evaluate() {
		$this->load->model('teacher_model');

		$class = $this->class_model->get_by_id($this->class_id);
		$teacher = $this->teacher_model->get($class->teacher_id);

		$this->load->library('form_validation');
		//set validation rules
		for ($i=1; $i <= 36; $i++) { 
			$this->form_validation->set_rules('answers['.$i.'][]', 'Item '.$i, 'trim|required|xss_clean');
		}

		$this->form_validation->set_rules('answers[strong_points]', 'Strong Points', 'trim|xss_clean');
		$this->form_validation->set_rules('answers[weak_points]', 'Weak Points', 'trim|xss_clean');
		$this->form_validation->set_rules('answers[recommendations]', 'Recommendations', 'trim|xss_clean');


		if ($this->form_validation->run() == FALSE) {
			//evaluation form
			$form_data = array();
			$form_data['class'] = $class;
			$form_data['teacher'] = $teacher;
			$form_data['questions'] = evaluation_questions();
			
			//validation failure, return to form
			$data['body_content'] = $this->load->view('contents/student/evaluation/evaluation_form',$form_data,TRUE);
		} else {
			//validation success, set new evaluation period
			$submit_result = $this->submit_evaluation();

			$message = '';
			$error = '';
			$success = FALSE;
			if ($submit_result) {
				$message = 'Evaluation form was successfully submitted.';
				$success = TRUE;
				$this->session->sess_destroy();
			} else {
				$message = 'Failed to submit evaluation form.';
				$error = $this->db->_error_message();
			}
			$set_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/student/evaluation/submit_result',$set_data,TRUE);
		}

		$data['page_title'] = 'eValuation: '.$class->class_name.'-'.$class->section;
		$this->parser->parse('layouts/evaluation_form', $data);
	}

	private function submit_evaluation() {
		$this->load->model('evaluation_model');

		$class_id = $this->class_id;
		$access_code = $this->session->userdata('access_code');
		$content = $this->input->post('answers');

		$content['strong_points'] = base64_encode(nl2br($content['strong_points']));
		$content['weak_points'] = base64_encode(nl2br($content['weak_points']));
		$content['recommendations'] = base64_encode(nl2br($content['recommendations']));

		$result = $this->evaluation_model->submit($class_id, $access_code, $content);

		if ($result) {
			return TRUE;	
		} else {
			return FALSE;
		}
	}
}

/* End of file evaluation.php */
/* Location: ./application/controllers/evaluation.php */