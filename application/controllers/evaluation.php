<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as student
		if (empty($this->session->userdata('class_id'))) {
			$message_403 = "You don't have permission to access the URL you are trying to reach.";
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
			$form_data['questions'] = array(
				'1' => array(
					'name' => 'Criteria',
					'a' => array(
						'name' => 'Instructional Materials',
						'content' => array(
							'1' => 'Has mastery of subject matter.',
							'2' => 'Explains clearly course objectives and expectations.',
							'3' => 'Discusses subject matter clearly and systematically.',
							'4' => 'Provides in-depth treatment of subject matter.',
							'5' => 'Relates course to other fields and present-day problems.',
							'6' => 'Uses effective teaching techniques, considering the total capacity of students.',
							'7' => 'Encourages and respects new ideas and students’ viewpoint.',
							'8' => 'Stimulates students’ desire to learn more about the subject.',
							'9' => 'Gives challenging examinations and asks question that require analysis.',
							'10' => 'Expresses and communicates effectively.',
							),					
						),
					'b' => array(
						'name' => 'Class Management',
						'content' => array(
							'11' => 'Corrects and gives results and feedback of examinations and/or other work at reasonable time.',
							'12' => 'Uses student’s achievements in class as basis for grades.',
							'13' => 'Maintains good conduct of students in class.',
							'14' => 'Comes to class on time.',
							'15' => 'Attends to class regularly.',
							'16' => 'Maximizes class hours for learning.',
							'17' => 'Treat students equally or fairly; shows no favoritism.',
							'18' => 'Firm and consistent, strict but reasonable in disciplining students.',
							'19' => 'Encourages students to do the best to develop their potentials.',
							'20' => 'Gives and explains assignments.',
							),					
						),
					'c' => array(
						'name' => 'Personal Qualities',
						'content' => array(
							'21' => 'Has intellectual standard.',
							'22' => 'Is ethical or moral in the performance of his official duties.',
							'23' => 'Observes university regulations.',
							'24' => 'Has dedication/sense of commitment.',
							'25' => 'Admits mistakes and accepts constructive criticism.',
							'26' => 'Mentally alert and enthusiastic',
							'27' => 'Employs wit and has sense of humor when the situations so demands.',
							'28' => 'Is approachable and pleasant.',
							'29' => 'Maintains poise and calm in difficult situations.',
							'30' => 'Keep individual and/or group assignments.',
							),					
						),
					'd' => array(
						'name' => 'Student-Faculty Relations',
						'content' => array(
							'31' => 'Maintains cordial but professional relations with students.',
							'32' => 'Encourages and makes himself available for consultation.',
							'33' => 'Elicits positive reactions from students.',
							'34' => 'Shows enthusiasm for and interest in student campus life.',
							'35' => 'Performs duties and responsibilities in school.',
							),					
						),
					),
				'2' => array(
					'name' => 'General Evaluation of the Teacher',
					'content' => array(
						'36' => 'Taking account instructional skills, class assignment, personal qualities and student-faculty relations, please rate your teacher by selecting on a scale of 1 to 5 with 5 as excellent.',
						),
					),
				'3' => array(
					'name' => 'Additional Comments',
					'content' => array(
						'1' => 'My teacher’s strong points are:',
						'2' => 'My teacher’s weak points are:',
						'3' => 'Recommendations for Improvement:',
						),
					),
				);
			
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
			$set_data = array('message' => $message, 'error' => $error);
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

		print_r($content[36]);
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