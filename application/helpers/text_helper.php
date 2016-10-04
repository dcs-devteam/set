<?php
	/**
	*	Format a timestamp string into the form MM DD YYY HH:MM AM/PM
	*
	*	@param	string 	$str	timestamp
	*
	*	@return	string	formatted timestamp
	*/
	function format_timestamp($str) {
		return date('M d Y g:i A',strtotime($str));
	}

	/**
	*	Format a date string into the form MM DD YYY
	*
	*	@param	string 	$str	timestamp
	*
	*	@return	string	formatted timestamp
	*/
	function format_date($str) {
		return date('M d Y',strtotime($str));
	}

/**
 * Format a rating string into a string with
 * 4 decimal places.
 * @param  int $str	number to format
 * @return int			processed number
 */
	function format_rating($str) {
		return number_format($str,4,'.','');
	}

/**
 * Format a semester number for display.
 * @param  int $str	semester number
 * @return string		'1st', '2nd', or 'Summer'
 */
	function format_semester($str) {
		if ($str == 1) {
			return '1st';
		} else if ($str == 2) {
			return '2nd';
		} else if ($str == 3) {
			return 'Summer';
		}
		return 'N/A';
	}

/**
 * Formats a YEAR string to academic years.
 * @param  int $str	YEAR string
 * @return string		'YEAR - (YEAR+1)'
 */
	function format_year($str) {
		return $str.'-'.($str + 1);
	}

/**
 * Converts the item values (1-5) in evaluation forms
 * to percentages. 5 -> 0%, 1 -> 100%.
 * @param  double $str	evaluation form item value
 * @return double				percentage
 */
	function format_percentage($str) {
		return ((5 - $str) / 4) * 100;
	}

/**
 * Generates evaluation form questions in array form.
 * @return array	evaluation questions
 */
	function evaluation_questions() {
		return array(
				'1' => array(
					'name' => 'Criteria',
					'a' => array(
						'name' => 'Instructional Skills',
						'content' => array(
							'1' => 'Has mastery of subject matter.',
							'2' => 'Explains clearly course objectives and expectations.',
							'3' => 'Discusses subject matter clearly and systematically.',
							'4' => 'Provides in-depth treatment of subject matter.',
							'5' => 'Relates course to other fields and present-day problems.',
							'6' => 'Uses effective teaching techniques, considering the total capacity of students.',
							'7' => 'Encourages and respects new ideas and students’ viewpoint.',
							'8' => 'Stimulates students’ desire to learn more about the subject.',
							'9' => 'Gives challenging examinations and asks questions that require analysis.',
							'10' => 'Expresses and communicates effectively.',
							),					
						),
					'b' => array(
						'name' => 'Class Management',
						'content' => array(
							'11' => 'Corrects and gives results and feedback of examinations and/or other work within reasonable time.',
							'12' => 'Uses students’ achievements in class as basis for grades.',
							'13' => 'Maintains good conduct of students in class.',
							'14' => 'Comes to class on time.',
							'15' => 'Attends class regularly.',
							'16' => 'Maximizes class hour for learning.',
							'17' => 'Treat students equally and fairly; shows no favoritism.',
							'18' => 'Firm and consistent, strict but reasonable in disciplining students.',
							'19' => 'Encourages students to do their best to develop their potentials.',
							'20' => 'Gives and explains assignments.',
							),					
						),
					'c' => array(
						'name' => 'Personal Qualities',
						'content' => array(
							'21' => 'Has high intellectual standard.',
							'22' => 'Is ethical or moral in the performance of his/her official duties.',
							'23' => 'Observe university regulations.',
							'24' => 'Has dedication / sense of commitment.',
							'25' => 'Admits mistakes and accepts constructive criticism.',
							'26' => 'Mentally alert and enthusiastic.',
							'27' => 'Employs wit and has keen sense of humor when the situation so demands.',
							'28' => 'Is approachable and pleasant.',
							'29' => 'Maintains poise or calm in different situations.',
							'30' => 'Keeps individual and/or group appointments.',
							),					
						),
					'd' => array(
						'name' => 'Student-Faculty Relations',
						'content' => array(
							'31' => 'Maintains cordial but professional relations with students.',
							'32' => 'Encourages and makes himself/herself available for consultation.',
							'33' => 'Elicits positive reactions from students.',
							'34' => 'Shows enthusiasm for and interest in student campus life.',
							'35' => 'Performs duties and responsibilities in school.',
							),					
						),
					),
				'2' => array(
					'name' => 'General Evaluation of the Teacher',
					'content' => array(
						'36' => 'Taking into account instructional skills, class management, personal qualities, and student-faculty relations, please rate your teacher by selecting, on a scale of 1 to 5 with 5 as excellent.',
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
				);array(
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
	}

/**
 * Returns office name given an office ID.
 * @param  int $office_id valid office ID
 * @return string         office name if found. none if false.
 */
	function office_name($office_id) {
		$CI =& get_instance();
		$CI->load->model('office_model');
		$office = $CI->office_model->get_by_id($office_id);
		if ($office) {
			return $office->name;
		}
		return '';
	}

/**
 * Converts numerical rating to equivalent text.
 * @param  int $rating
 * @return string 		qualitative rating
 */

	function qualitative_rating($rating) {
		if ($rating >= 4.5) {
			return 'Poor';
		} else if ($rating >= 3.5) {
			return 'Conditional';
		} else if ($rating >= 2.5) {
			return 'Good';
		} else if ($rating >= 1.5) {
			return 'Very Good';
		} else {
			return 'Excellent';
		}
	}

/**
 * Converts a number to percent, with specified number of decimal places.
 * @param double $num number to be formatted
 * @param int $decimal_places number of decimal places in output
 * @return string formatted number with percent sign
 */
	function format_percent($num, $decimal_places = 2) {
		return number_format($num * 100,$decimal_places,'.','')."%";
	}
/* End of file text_helper.php */
/* Location: ./application/helpers/text_helper.php */