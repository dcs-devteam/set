<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (empty($this->session->userdata('role'))) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			$message_403 = 'You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.';
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
		$this->load->model('class_model');
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->load->model('course_model');
		$this->load->model('year_semester_model');
		$this->office_id = $this->session->userdata('office_id');
	}

	public function index() {
		$this->view();
	}

	public function view() {
		$view_data = array(
			'classes' => $this->class_model->get($this->office_id),
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/class/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

	public function add() {
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
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'course',
				'label' => 'Course',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'section',
				'label' => 'Section',
				'rules' => 'trim|required|xss_clean|callback_unique_class'
				),
			array(
				'field' => 'schedule',
				'label' => 'Schedule',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'number_of_students',
				'label' => 'Number of Students',
				'rules' => 'trim|required|xss_clean'
				),
			array(
				'field' => 'teacher',
				'label' => 'Teacher',
				'rules' => 'trim|required|xss_clean'
				)
			);
		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run() == FALSE) {
			//validation failure, return to form
			$add_data = array(
				'courses' => $this->course_model->get_by_office($this->office_id),
				'teachers' => $this->teacher_model->get_by_office($this->office_id),
				'year_semester' => $this->year_semester_model->get_current(),
				);
			$data['body_content'] = $this->load->view('contents/admin/class/add',$add_data,TRUE);
		} else {
			//validation success, add class
			$add_result = $this->add_class();
			$message = '';
			$error = '';
			$success = FALSE;
			if ($add_result) {
				$message = 'Class evaluation was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Class evaluation add failed.';
				$error = $this->db->_error_message();
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/class/function_result',$add_data,TRUE);
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

	private function add_class() {
		$year = $this->input->post('year');
		$semester = $this->input->post('semester');
		$course_name = $this->input->post('course');
		$section = $this->input->post('section');
		$schedule = $this->input->post('schedule');
		$number_of_students = $this->input->post('number_of_students');
		$teacher = $this->input->post('teacher');

		//course - add if not exists
		$course_id = $this->course_model->get_id($course_name);
		if (!$course_id) {
			$course_id = $this->course_model->add($course_name, $this->office_id);
		}

		//teacher - add if not exists
		$teacher_name = array_map('trim',explode(",",$teacher));
		$first_name = $teacher_name[1];
		$last_name = $teacher_name[0];
		$teacher_id = $this->teacher_model->get_id($first_name, $last_name);
		if (!$teacher_id) {
			$teacher_id = $this->teacher_model->add($first_name, $last_name, $this->office_id);
		}

		$result = $this->class_model->add($course_id, $teacher_id, $section, $year, $semester, $schedule, $number_of_students);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit($class_id) {
		$class = $this->class_model->get_by_id($class_id);
		if ($class === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Class Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
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
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'course',
					'label' => 'Course',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'section',
					'label' => 'Section',
					'rules' => 'trim|required|xss_clean|callback_unique_new_class['.$class_id.']'
					),
				array(
					'field' => 'schedule',
					'label' => 'Schedule',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'number_of_students',
					'label' => 'Number of Students',
					'rules' => 'trim|required|xss_clean'
					),
				array(
					'field' => 'teacher',
					'label' => 'Teacher',
					'rules' => 'trim|required|xss_clean'
					)
				);
			$this->form_validation->set_rules($validation_rules);

			if ($this->form_validation->run() == FALSE) {
				//validation failure, return to form
				$edit_data = array(
					'courses' => $this->course_model->get_by_office($this->office_id),
					'teachers' => $this->teacher_model->get_by_office($this->office_id),
					'year_semester' => $this->year_semester_model->get_current(),
					'class' => $class,
					'current_teacher' => $this->teacher_model->get($class->teacher_id)
					);
				$data['body_content'] = $this->load->view('contents/admin/class/edit',$edit_data,TRUE);
			} else {
				//validation success, add class
				$edit_result = $this->edit_class($class_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Class evaluation was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Class evaluation edit failed.';
					$error = $this->db->_error_message();
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/class/function_result',$edit_data,TRUE);
			}
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

	private function edit_class($class_id) {
		$year = $this->input->post('year');
		$semester = $this->input->post('semester');
		$course_name = $this->input->post('course');
		$section = $this->input->post('section');
		$schedule = $this->input->post('schedule');
		$number_of_students = $this->input->post('number_of_students');
		$teacher = $this->input->post('teacher');

		//course - add if not exists
		$course_id = $this->course_model->get_id($course_name);
		if (!$course_id) {
			$course_id = $this->course_model->add($course_name, $this->office_id);
		}

		//teacher - add if not exists
		$teacher_name = array_map('trim',explode(",",$teacher));
		$first_name = $teacher_name[1];
		$last_name = $teacher_name[0];
		$teacher_id = $this->teacher_model->get_id($first_name, $last_name);
		var_dump($teacher_id);
		if (!$teacher_id) {
			$teacher_id = $this->teacher_model->add($first_name, $last_name, $this->office_id);
		}

		$result = $this->class_model->edit($class_id, $course_id, $teacher_id, $section, $year, $semester, $schedule, $number_of_students);
		if ($result) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($class_id) {
		$class = $this->class_model->get_by_id($class_id);
		if ($class === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Class Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else {
			//must go through delete-confirm form
			$confirm = $this->input->post('confirm');

			if ($confirm !== 'TRUE') {
				//confirmation dialog
				$delete_confirm_data = array(
					'class' => $class
					);

				$data['body_content'] = $this->load->view('contents/admin/class/delete_confirm',$delete_confirm_data,TRUE);
			} else {
				$delete_result = $this->delete_class($class_id);

				$message = '';
				$error = '';
				$success = FALSE;
				if ($delete_result) {
					$message = 'Class was successfully deleted.';
					$success = TRUE;
				} else {
					$message = 'Class delete failed.';
					$error = $this->db->_error_message();
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/class/function_result',$delete_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

	private function delete_class($class_id) {
		if ($this->class_model->delete($class_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function unique_class($section) {
		$year = $this->input->post('year');
		$semester = $this->input->post('semester');
		$course_name = $this->input->post('course');

		$course_id = $this->course_model->get_id($course_name);
		if ($course_id) {
			if ($this->class_model->class_exists($course_id, $section, $year, $semester)) {
				$this->form_validation->set_message('unique_class','Class with given course and section already exists. Choose another class or section.');
				return FALSE;
			} else {
				return TRUE;
			}
		} else {
			return TRUE;
		}
	}

	public function unique_new_class($section, $class_id) {
		$year = $this->input->post('year');
		$semester = $this->input->post('semester');
		$course_name = $this->input->post('course');

		$course_id = $this->course_model->get_id($course_name);
		if ($course_id) {
			$result = $this->class_model->class_exists($course_id, $section, $year, $semester);
			if ($result !== FALSE && $result->class_id !== $class_id) {
					$this->form_validation->set_message('unique_new_class','Class with given course and section already exists. Choose another class or section.');
					return FALSE;
			} else {
				return TRUE;
			}
		} else {
			return TRUE;
		}
	}
}

/* End of file class_controller.php */
/* Location: ./application/controllers/admin/class_controller.php */