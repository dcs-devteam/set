<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		//redirect when not logged in as student
		if (!$this->session->userdata('sais_id')) {
			redirect(base_url());
		}
		$this->load->model('class_model');
		$this->load->model('student_class_model');
		$this->load->model('year_semester_model');
		$this->student_id = $this->session->userdata('student_id');
	}

/**
 * Default function when there is no URI segment after set/student/class.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all classes of the student.
 */
	public function view() {
		$this->load->model('evaluation_model');

		$classes = $this->student_class_model->get_current_classes($this->student_id);

		if (is_array($classes) || is_object($classes)) {
			foreach ($classes as $class) {
				$class->evaluation_active = $this->evaluation_model->evaluation_active($class->class_id);
			}
		}

		$view_data = array(
			'classes' => $classes,
			'completed_evaluation' => $this->student_class_model->completed_evaluation($this->student_id),
			);

		$data['body_content'] = $this->load->view('contents/student/class/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Display the evaluation form and runs form validation.
 * If validation is successful, runs the submit_evaluation function
 * and displays the function result.
 */
	public function evaluate($class_id) {
		$this->load->model('teacher_model');

		$class = $this->class_model->get_by_id($class_id);
		if ($class !== FALSE) {
			if (!$this->student_class_model->is_enrolled($this->student_id, $class_id)) {
			//check if enrolled in class
				$error_data = array(
					'error_title' => 'Not Enrolled in Class',
					'error_message' => 'You are currently not enrolled in this class.'
					);
				$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
			} else if (!$this->evaluation_model->evaluation_active($class_id)) {
			//check if evaluation is enabled
				$error_data = array(
					'error_title' => 'Not Yet Evaluation Period',
					'error_message' => 'You cannot evaluate because the evaluation period is not yet enabled for this class.'
					);
				$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
			} else if ($this->student_class_model->has_evaluated($this->student_id, $class_id)) {
			//check if already evaluated
				$error_data = array(
					'error_title' => 'Already Evaluated',
					'error_message' => 'You have already evaluated the teacher for this class.'
					);
				$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
			}
			else {
				//display evaluation form
				$teacher = $this->teacher_model->get_by_id($class->teacher_id);

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
					//validation success, submit evaluation
					$submit_result = $this->submit_evaluation($this->input->post('class_id'));

					$message = '';
					$error = '';
					$success = FALSE;
					if ($submit_result) {
						$message = 'Evaluation form was successfully submitted.';
						$success = TRUE;
					} else {
						$message = 'Failed to submit evaluation form. Please contact SET admin.';
						if ($this->db->_error_message()) {
							$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
						}
					}
					$set_data = array('message' => $message, 'error' => $error, 'success' => $success);
					$data['body_content'] = $this->load->view('contents/student/evaluation/submit_result',$set_data,TRUE);
				}
			}
		} else {
			$error_data = array(
				'error_title' => 'No Such Class Exists',
				'error_message' => 'There is no class in the database that is associated with the given class ID.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		}
		$this->parser->parse('layouts/evaluation_form', $data);
	}

/**
 * Passes data to the evaluation_model->submit function for storage.
 * @return boolean	TRUE if submit is successful. Else, FALSE.
 */
	private function submit_evaluation($class_id) {
		$this->load->model('evaluation_model');

		//check if already evaluated
		if ($this->student_class_model->has_evaluated($this->student_id, $class_id)) {
			return FALSE;
		}

		$content = $this->input->post('answers');

		$content['strong_points'] = base64_encode(nl2br($content['strong_points']));
		$content['weak_points'] = base64_encode(nl2br($content['weak_points']));
		$content['recommendations'] = base64_encode(nl2br($content['recommendations']));

		$result = $this->evaluation_model->submit($class_id, $content);

		if ($result) {
			//mark as evaluated
			$result2 = $this->student_class_model->set_evaluated($this->student_id, $class_id);
			if ($result2) {
				return TRUE;
			}
		}
		return FALSE;
	}
}

/* End of file class_controller.php */
/* Location: ./application/controllers/student/class_controller.php */