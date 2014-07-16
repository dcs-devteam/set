<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as student
		if (empty($this->session->userdata('account_type'))) {
			redirect(base_url());
		} else if ($this->session->userdata('account_type') !== 's') {
			$message_403 = "You don't have permission to access the url you are trying to reach.";
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
	}

	public function index() {
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/student/home','',TRUE);
		$this->parser->parse('layouts/default', $data);
	}

	public function evaluation() {
		//evaluation form
		$form_data = array();
		$form_data['id'] = 1;
		$form_data['class_id'] = 1;
		$form_data['teacher_id'] = 3;
		$form_data['student_id'] = 2;
		$form_data['eval_period_id'] = 11;
		$form_data['date'] = '1970-01-01 00:00:01';
		$form_data['questions'] = array(
			'1' => array(
				'name' => 'CRITERIA',
				'a' => array(
					'name' => 'INSTRUCTIONAL MATERIALS',
					'content' => array(
						'1' => 'Has mastery of subject matter',
						'2' => 'Explains clearly course objectives and expectations',
						'3' => 'Discusses subject matter clearly and systematically',
						'4' => 'Provides in-depth treatment of subject matter',
						'5' => 'Relates course to other fields and present-day problems',
						'6' => 'Uses effective teaching techniques, considering the total capacity of students',
						'7' => 'Encourages and respects new ideas and students’ viewpoint',
						'8' => 'Stimulates students’ desire to learn more about the subject',
						'9' => 'Gives challenging examinations and asks question that require analysis',
						'10' => 'Expresses and communicates effectively',
						),					
					),
				'b' => array(
					'name' => 'CLASS MANAGEMENT',
					'content' => array(
						'1' => 'Corrects and gives results and feedback of examinations and/or other work at reasonable time',
						'2' => 'Uses student’s achievements in class as basis for grades',
						'3' => 'Maintains good conduct of students in class',
						'4' => 'Comes to class on time',
						'5' => 'Attends to class regularly',
						'6' => 'Maximizes class hours for learning',
						'7' => 'Treat students equally or fairly; shows no favoritism',
						'8' => 'Firm and consistent, strict but reasonable in disciplining students',
						'9' => 'Encourages students to do the best to develop their potentials',
						'10' => 'Gives and explains assignments',
						),					
					),
				'c' => array(
					'name' => 'PERSONAL QUALITIES',
					'content' => array(
						'1' => 'Has intellectual standard',
						'2' => 'Is ethical or moral in the performance of his official duties',
						'3' => 'Observes university regulations',
						'4' => 'Has dedication/sense of commitment',
						'5' => 'Admits mistakes and accepts constructive criticism',
						'6' => 'Mentally alert and enthusiastic',
						'7' => 'Employs wit and has sense of humor when the situations so demands',
						'8' => 'Is approachable and pleasant',
						'9' => 'Maintains poise and calm in difficult situations',
						'10' => 'Keep individual and/or group assignments',
						),					
					),
				'd' => array(
					'name' => 'STUDENT-FACULTY RELATIONS',
					'content' => array(
						'1' => 'Maintains cordial but professional relations with students',
						'2' => 'Encourages and makes himself available for consultation',
						'3' => 'Elicits positive reactions from students',
						'4' => 'Shows enthusiasm for and interest in student campus life',
						'5' => 'Performs duties and responsibilities in school',
						),					
					),
				),
			'2' => array(
				'name' => 'GENERAL EVALUATION OF THE TEACHER',
				'content' => array(
					'1' => 'Taking account instructional skills, class assignment, personal qualities and student-faculty relations, please rate your teacher by selecting on a scale of 1 to 5 with 5 as excellent.',
					),
				),
			'3' => array(
				'name' => 'ADDITIONAL COMMENTS',
				'content' => array(
					'1' => 'My teacher’s strong points are',
					'2' => 'My teacher’s weak points are',
					'3' => 'Recommendations for Improvement',
					),
				),
			);

		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/student/evaluation/evaluation_form',$form_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}
}

/* End of file student.php */
/* Location: ./application/controllers/student.php */