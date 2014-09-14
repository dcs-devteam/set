<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			show_403_error();
		}
		$this->load->model('class_model');
		$this->load->model('office_model');
		$this->load->model('teacher_model');
		$this->load->model('course_model');
		$this->office_id = $this->session->userdata('office_id');
	}

/**
 * Default function when there is no URI segment after evaluation/admin/class.
 * Calls the view function.
 */
	public function index() {
		$this->view();
	}

/**
 * Displays all classes of the office of user.
 */
	public function view() {
		$view_data = array(
			'classes' => $this->class_model->get($this->office_id),
			);
		$data['page_title'] = 'eValuation';
		$data['body_content'] = $this->load->view('contents/admin/class/view',$view_data,TRUE);
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Displays the Add Class form and calls form validation.
 * After successful form validation, it calls the add_class function that
 * passes the data for insertion to the database.
 * It then displays whether the add_class function is successful or not.
 */
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
				$message = 'Class was successfully added.';
				$success = TRUE;
			} else {
				$message = 'Class add failed.';
				if ($this->db->_error_message()) {
					$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
				}
			}
			$add_data = array('message' => $message, 'error' => $error, 'success' => $success);
			$data['body_content'] = $this->load->view('contents/admin/class/function_result',$add_data,TRUE);
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes course_id, teacher_id, section, year, semester, schedule,
 * and number_of_students to class_model->add function for insertion
 * to the database.
 * @return boolean TRUE if class was successfully added. Else, FALSE.
 */
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

/**
 * Displays the Edit Class form and calls form validation.
 * Calls the edit_class function after successful validation.
 * Displays also the function result of the edit_class function.
 * @param  int $class_id	valid class ID
 */
	public function edit($class_id = FALSE) {
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
					'current_teacher' => $this->teacher_model->get_by_id($class->teacher_id)
					);
				$data['body_content'] = $this->load->view('contents/admin/class/edit',$edit_data,TRUE);
			} else {
				//validation success, add class
				$edit_result = $this->edit_class($class_id);
				$message = '';
				$error = '';
				$success = FALSE;
				if ($edit_result) {
					$message = 'Class was successfully edited.';
					$success = TRUE;
				} else {
					$message = 'Class edit failed.';
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$edit_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/class/function_result',$edit_data,TRUE);
			}
		}

		$data['page_title'] = 'eValuation';
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes data to the class_model->edit function for database update.
 * @param  int $class_id	valid class ID
 * @return boolean 				TRUE if class was successfully edited. Else, FALSE.
 */
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

/**
 * Displays the delete confirmation form for a given class.
 * Calls the delete_class function and displays whether the function
 * was successful or not.
 * @param  int $class_id	valid class ID
 */
	public function delete($class_id = FALSE) {
		$class = $this->class_model->get_by_id($class_id);
		if ($class === FALSE) {
			$error_data = array(
				'error_title' => 'No Such Class Exists',
				'error_message' => 'Record for the given class ID does not exist in the database.'
				);
			$data['body_content'] = $this->load->view('contents/error', $error_data, TRUE);
		} else if ($class->is_active == TRUE) {
			$error_data = array(
				'error_title' => 'Class Evaluation is Active',
				'error_message' => 'Evaluation of this class is currently active. Stop or cancel evaluation before deleting.'
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
					if ($this->db->_error_message()) {
						$error = 'DB Error: ('.$this->db->_error_number().') '.$this->db->_error_message();
					}
				}
				$delete_data = array('message' => $message, 'error' => $error, 'success' => $success);
				$data['body_content'] = $this->load->view('contents/admin/class/function_result',$delete_data,TRUE);
			}
		}
		$data['page_title'] = "eValuation";
		$this->parser->parse('layouts/default', $data);
	}

/**
 * Passes the class ID to class_model->delete for database deletion
 * @param  int $class_id	valid class ID
 * @return boolean 				TRUE if class was successfully deleted. Else, FALSE.
 */
	private function delete_class($class_id) {
		if ($this->class_model->delete($class_id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

/**
 * Form Validation rule. A given year, semester, course, and section
 * must be unique and not found in the database.
 * @param  string $section	value from the section field in form
 * @return boolean					TRUE if given combination is unique. Else, FALSE.
 */
	public function unique_class($section) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
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

/**
 * Form Validation rule. A given year, semester, course, and section
 * must be unique or the same as the year, semester, course, and section
 * of the current class to be edited.
 * @param  string $section	value from section field in form
 * @param  int $class_id		current class ID of class to be edited
 * @return boolean					TRUE if given combination is unique or the same as
 * 													old values. Else, FALSE.
 */
	public function unique_new_class($section, $class_id) {
		if(empty($this->form_validation)) {
			show_403_error();
		}
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