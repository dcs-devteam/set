<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://localhost/evaluation/assets/css/report-wkhtmltopdf.css">
		<!-- Bootstrap -->
		<!-- <link rel="stylesheet" href="http://localhost/evaluation/assets/css/bootstrap.min.css"> -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://localhost/evaluation/assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="http://localhost/evaluation/assets/js/bootstrap.min.js"></script>
		<title>2014-1st - LName, FName - CMSC 123 A</title>
	</head>
	<body>
		<script type="text/php">

			if ( isset($pdf) ) {

				$font = Font_Metrics::get_font("verdana", "bold");
				$pdf->page_text($pdf->get_width() - 24, $pdf->get_height() - 18, "{PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(0,0,0));

			}
		</script>
		<div id="main-wrapper" class="default container-fluid">
			<div id="main-content" class=""><div class="" id="report-container">	<div class=" page" id="report-page-1">
		<div class="" id="summary">
			<div class="" id="header">
				<div id="up-block">
					<img id="up-seal" height="100px" src="http://localhost/evaluation/assets/img/up-seal-bw.jpg" alt="UP Seal">
					<p><strong>Department of Computer Science</strong></p>
					<p>University of the Philippines Cebu</p>
					<p>Lahug, Cebu City</p>
				</div>
				<div id="title">
					<p><strong>TEACHING PERFORMANCE EVALUATION REPORT</strong></p>
				</div>
			</div>
			<div class="" id="summary-content">
				<div class="">
					<ol>
						<li>
							<label class="l1">Evaluators:</label>
							<span class="l1-value">Students</span>
						</li>
						<li>
							<label class="l1">Tool:</label>
							<span class="l1-value">Faculty Evaluation Instrument</span>
						</li>
						<ol class="l2-list">
							<li>
								<label class="l2">Instructional Skills</label>
								<span class="l2-value">70%</span>
							</li>
							<li>
								<label class="l2">Class Management</label>
								<span class="l2-value">20%</span>
							</li>
							<li>
								<label class="l2">Personal Qualities</label>
								<span class="l2-value">5%</span>
							</li>
							<li>
								<label class="l2">Student-Faculty Relations</label>
								<span class="l2-value">5%</span>
							</li>
						</ol>
						<li>
							<label>Quantitative/Qualitative Rating Scale</label>
						</li>
						<ol class="unstyled">
							<li>
								<label class="l2">1.49 and below</label>
								<span class="l2-value">Excellent</span>
							</li>
							<li>
								<label class="l2">1.50 - 2.49</label>
								<span class="l2-value">Very Good</span>
							</li>
							<li>
								<label class="l2">2.50 - 3.49</label>
								<span class="l2-value">Good</span>
							</li>
							<li>
								<label class="l2">3.50 0 4.49</label>
								<span class="l2-value">Conditional</span>
							</li>
							<li>
								<label class="l2">4.50 and above </label>
								<span class="l2-value">Poor</span>
							</li>
						</ol>
						<li>
							<label class="l3">Name of Faculty Member:</label>
							<span class="l3-value">LName, FName</span>
						</li>
						<ol class="unstyled">
							<li>
								<label class="l2">Semester:</label>
								<span class="l2-value">1st</span>
							</li>
							<li>
								<label class="l2">A.Y.:</label>
								<span class="l2-value">2014-2015</span>
							</li>
						</ol>
					</ol>
					<table class="table table-bordered eval-report-table">
							<tr>
								<th>Subject</th>
								<th>No. of Students</th>
								<th>Avrg. A</th>
								<th>Avrg. B</th>
								<th>Avrg. C</th>
								<th>Avrg. D</th>
								<th>Grand Avrg.</th>
								<th>Qualitative Rating</th>
							</tr>
							<tr>
								<td>CMSC 123 A</td>
								<td>25</td>
								<td>3.64</td>
								<td>4.53</td>
								<td>4.56</td>
								<td>4.54</td>
								<td><strong>3.91</strong></td>
								<td><strong>Conditional</strong></td>
							</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class=" page" id="report-page-2">
		<div class=" detail" id="detail-1">
			<div class="" id="part-a">
				<p><strong>A. Instructional Materials</strong></p>
				<table class="table table-bordered eval-report-table">
					<tbody>
							<tr>
								<th>Question</th>
								<th>Average</th>
								<th></th>
							</tr>
													<tr>
								<td>1. Has mastery of subject matter.</td>
								<td>5.00</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="0" style="width: 0%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>2. Explains clearly course objectives and expectations.</td>
								<td>4.00</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="25" style="width: 25%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>3. Discusses subject matter clearly and systematically.</td>
								<td>3.00</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="50" style="width: 50%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>4. Provides in-depth treatment of subject matter.</td>
								<td>2.00</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="75" style="width: 75%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>5. Relates course to other fields and present-day problems.</td>
								<td>1.00</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="100" style="width: 100%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>6. Uses effective teaching techniques, considering the total capacity of students.</td>
								<td>2.88</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="53" style="width: 53%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width: 53%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>7. Encourages and respects new ideas and students’ viewpoint.</td>
								<td>4.88</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="3" style="width: 3%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>8. Stimulates students’ desire to learn more about the subject.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>9. Gives challenging examinations and asks question that require analysis.</td>
								<td>4.64</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="9" style="width: 9%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>10. Expresses and communicates effectively.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
											</tbody>
				</table>
			</div>
			<div class="" id="part-b">
				<p><strong>B. Class Management</strong></p>
				<table class="table table-bordered eval-report-table">
					<tbody>
							<tr>
								<th>Question</th>
								<th>Average</th>
								<th></th>
							</tr>
													<tr>
								<td>11. Corrects and gives results and feedback of examinations and/or other work at reasonable time.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>12. Uses student’s achievements in class as basis for grades.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>13. Maintains good conduct of students in class.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>14. Comes to class on time.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>15. Attends to class regularly.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>16. Maximizes class hours for learning.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>17. Treat students equally or fairly; shows no favoritism.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>18. Firm and consistent, strict but reasonable in disciplining students.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>19. Encourages students to do the best to develop their potentials.</td>
								<td>4.64</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="9" style="width: 9%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>20. Gives and explains assignments.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
											</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class=" page" id="report-page-3">
		<div class=" detail" id="detail-2">
			<div class="" id="part-c">
				<p><strong>C. Personal Qualities</strong></p>
				<table class="table table-bordered eval-report-table">
					<tbody>
							<tr>
								<th>Question</th>
								<th>Average</th>
								<th></th>
							</tr>
													<tr>
								<td>21. Has intellectual standard.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>22. Is ethical or moral in the performance of his official duties.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>23. Observes university regulations.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>24. Has dedication/sense of commitment.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>25. Admits mistakes and accepts constructive criticism.</td>
								<td>4.64</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="9" style="width: 9%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>26. Mentally alert and enthusiastic</td>
								<td>4.64</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="9" style="width: 9%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>27. Employs wit and has sense of humor when the situations so demands.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>28. Is approachable and pleasant.</td>
								<td>4.64</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="9" style="width: 9%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>29. Maintains poise and calm in difficult situations.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>30. Keep individual and/or group assignments.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
											</tbody>
				</table>
			</div>
			<div class="" id="part-d">
				<p><strong>D. Student-Faculty Relations</strong></p>
				<table class="table table-bordered eval-report-table">
					<tbody>
							<tr>
								<th>Question</th>
								<th>Average</th>
								<th></th>
							</tr>
													<tr>
								<td>31. Maintains cordial but professional relations with students.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>32. Encourages and makes himself available for consultation.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>33. Elicits positive reactions from students.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>34. Shows enthusiasm for and interest in student campus life.</td>
								<td>4.64</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="9" style="width: 9%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
											
										</div>
									</div>
								</td>
							</tr>
													<tr>
								<td>35. Performs duties and responsibilities in school.</td>
								<td>4.52</td>
								<td>
									<!-- <table class="progress-table">
										<tr>
											<td data-value="12" style="width: 12%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table> -->
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											
										</div>
									</div>
								</td>
							</tr>
											</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class=" page" id="report-page-4">
		<div class=" comments" id="comment-1">
			<div class="" id="strong-points">
				<p><strong>Comments: Strong Points</strong></p>
				<ol>
																		<li>
								1234							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdf							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdf							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdf							</li>
																								<li>
								asdf							</li>
																								<li>
								asdf							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdf							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdf							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdf							</li>
															</ol>
			</div>
			<div class="" id="weak-points">
				<p><strong>Comments: Weak Points</strong></p>
				<ol>
																		<li>
								123							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								asdfg							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								asdfg							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								123							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								asdfg							</li>
																								<li>
								asdfg							</li>
																								<li>
								asdfg							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								asdfg							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								asdfg							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								123							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss							</li>
																								<li>
								asdfg							</li>
															</ol>
			</div>
			<div class="" id="recommendations">
				<p><strong>Comments: Recommendations for Improvement</strong></p>
				<ol>
																		<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdfgh							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdfgh							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdfgh							</li>
																								<li>
								asdfgh							</li>
																								<li>
								asdfgh							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdfgh							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdfgh							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa							</li>
																								<li>
								asdfgh							</li>
															</ol>
			</div>
		</div>
	</div>


	
	<div id="report-page-5">
		<div class=" evaluation-forms">
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-07-31 19:23:14</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td>5</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>123&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-07-31 19:23:14</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-07-31 21:24:00</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-07-31 21:24:00</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td>5</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>123&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:16:16</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:17:58</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:17:58</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td>5</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>123&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:17:58</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
										<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:17:58</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1234asdfassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
							<div class="eval-form-page">
					<div class="evaluation-form">
						<div class="header">
							<label>2014-08-06 01:19:54</label>
							<ol class="unstyled">
								<li>
									<label class="eval-form-label">
										Teacher's Name:
									</label>
									<span class="eval-form-value">LName, FName</span>
								</li>
								<li>
									<label class="eval-form-label">
										Subject/Section:
									</label>
									<span class="eval-form-value">CMSC 123 A</span>
								</li>
								<li>
									<label class="eval-form-label">
										Day/Time:
									</label>
									<span class="eval-form-value">MTh 9:00-10:30 AM</span>
								</li>
								<li>
									<label class="eval-form-label">
										Sem./School Yr.:
									</label>
									<span class="eval-form-value">1st Sem/A.Y. 2014-2015</span>
								</li>
							</ol>
							<div class="title">
								<p><strong>FACULTY EVALUATION INSTRUMENT</strong></p>
							</div>
						</div>
						<div class="content">
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">I. A.</th>
										<th>E</th>
										<th>VG</th>
										<th>G</th>
										<th>F</th>
										<th>P</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">1.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">2.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">3.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">4.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">5.</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">6.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">7.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">8.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">9.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">10.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">B.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">11.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">12.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">13.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">14.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">15.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">16.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">17.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">18.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">19.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">20.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">C.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">21.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">22.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">23.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">24.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">25.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">26.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">27.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">28.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">29.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">30.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">D.</th>
									</tr>
								</thead>
								<tbody>
																			<tr>
											<td class="no-border">31.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">32.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">33.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">34.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																			<tr>
											<td class="no-border">35.</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong></strong>
											</td>
											<td class="check-td">
												<strong>&#10003;</strong>
											</td>
										</tr>
																	</tbody>
							</table>
							<table class="eval-form-table">
								<thead>
									<tr>
										<th class="no-border">II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="no-border">36.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1</td>
									</tr>
									</tbody>
							</table>
							<div class="comments">
								<label class="part3"><strong>III.</strong></label>
								<ol class="contents">
									<li class="strong_points">
										<label><strong>My teacher’s strong points are:</strong></label>
										<span>asdf&nbsp;</span>
									</li>
									<li class="weak_points">
										<label><strong>My teacher’s weak points are:</strong></label>
										<span>asdfg&nbsp;</span>
									</li>
									<li class="recommendations">
										<label><strong>Recommendations for Improvement:</strong></label>
										<span>asdfgh&nbsp;</span>
									</li>
								</ol>
							</div>
						</div>
					</div>
									</div>
					</div>
	</div>
</div></div>
		</div>
	</body>
</html>