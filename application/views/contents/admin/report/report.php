<div class="" id="report-container">
	<div class=" page" id="report-page-1">
		<div class="" id="summary">
			<div class="" id="header">
				<div id="up-block">
					<img id="up-seal" height="100px" src="<?php echo base_url('assets/img/up-seal-bw.jpg')?>" alt="UP Seal">
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
						<ol class="scale-list">
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
							<span class="l3-value"><?php echo $teacher->last_name.', '.$teacher->first_name?></span>
						</li>
						<ol class="scale-list">
							<li>
								<label class="l2">Semester:</label>
								<span class="l2-value"><?php echo format_semester($class->semester)?></span>
							</li>
							<li>
								<label class="l2">A.Y.:</label>
								<span class="l2-value"><?php echo format_year($class->year)?></span>
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
								<td><?php echo $class->class_name.' '.$class->section?></td>
								<td><?php echo $class->number_of_students?></td>
								<td><?php echo format_rating($summary['average']['a'])?></td>
								<td><?php echo format_rating($summary['average']['b'])?></td>
								<td><?php echo format_rating($summary['average']['c'])?></td>
								<td><?php echo format_rating($summary['average']['d'])?></td>
								<td><strong><?php echo format_rating($summary['average']['grand'])?></strong></td>
								<td><strong><?php echo $summary['rating']?></strong></td>
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
						<?php for($i=1; $i <= 10; $i++):?>
							<tr>
								<td><?php echo $i.'. '.$questions['1']['a']['content'][$i]?></td>
								<td><?php echo format_rating($detail[$i])?></td>
								<td>
									<table class="progress-table">
										<tr>
											<td data-value="<?php echo format_percentage($detail[$i])?>" style="width: <?php echo format_percentage($detail[$i])?>%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table>
								</td>
							</tr>
						<?php endfor;?>
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
						<?php for($i=11; $i <= 20; $i++):?>
							<tr>
								<td><?php echo $i.'. '.$questions['1']['b']['content'][$i]?></td>
								<td><?php echo format_rating($detail[$i])?></td>
								<td>
									<table class="progress-table">
										<tr>
											<td data-value="<?php echo format_percentage($detail[$i])?>" style="width: <?php echo format_percentage($detail[$i])?>%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table>
								</td>
							</tr>
						<?php endfor;?>
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
						<?php for($i=21; $i <= 30; $i++):?>
							<tr>
								<td><?php echo $i.'. '.$questions['1']['c']['content'][$i]?></td>
								<td><?php echo format_rating($detail[$i])?></td>
								<td>
									<table class="progress-table">
										<tr>
											<td data-value="<?php echo format_percentage($detail[$i])?>" style="width: <?php echo format_percentage($detail[$i])?>%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table>
								</td>
							</tr>
						<?php endfor;?>
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
						<?php for($i=31; $i <= 35; $i++):?>
							<tr>
								<td><?php echo $i.'. '.$questions['1']['d']['content'][$i]?></td>
								<td><?php echo format_rating($detail[$i])?></td>
								<td>
									<table class="progress-table">
										<tr>
											<td data-value="<?php echo format_percentage($detail[$i])?>" style="width: <?php echo format_percentage($detail[$i])?>%;">
												&nbsp;
											</td>
											<td></td>
										</tr>
									</table>
								</td>
							</tr>
						<?php endfor;?>
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
					<?php foreach($strong_points as $key => $comment):?>
						<?php if(!empty($comment)):?>
							<li>
								<?php echo $comment?>
							</li>
						<?php endif;?>
					<?php endforeach;?>
				</ol>
			</div>
			<div class="" id="weak-points">
				<p><strong>Comments: Weak Points</strong></p>
				<ol>
					<?php foreach($weak_points as $key => $comment):?>
						<?php if(!empty($comment)):?>
							<li>
								<?php echo $comment?>
							</li>
						<?php endif;?>
					<?php endforeach;?>
				</ol>
			</div>
			<div class="" id="recommendations">
				<p><strong>Comments: Recommendations for Improvement</strong></p>
				<ol>
					<?php foreach($recommendations as $key => $comment):?>
						<?php if(!empty($comment)):?>
							<li>
								<?php echo $comment?>
							</li>
						<?php endif;?>
					<?php endforeach;?>
				</ol>
			</div>
		</div>
	</div>
</div>