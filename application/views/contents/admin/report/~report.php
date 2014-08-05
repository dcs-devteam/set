<div class="col-sm-12" id="report-container">
	<div class="col-sm-12 page" id="report-page-1">
		<div class="row" id="summary">
			<div class="col-sm-12">
				<div class="row" id="header">
					<div class="col-sm-12">
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
				</div>
				<div class="row" id="summary-content">
					<div class="col-sm-12">
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
							<ol class="list-unstyled">
								<li>
									<label>Semester:</label>
									<span><?php echo format_semester($class->semester)?></span>
								</li>
								<li>
									<label>A.Y.:</label>
									<span><?php echo format_year($class->year)?></span>
								</li>
							</ol>
						</ol>
						<table class="table table-hover table-bordered eval-report-table">
							<thead>
								<tr>
									<th>Subject</th>
									<th>No. of Students</th>
									<th>Avrg. A</th>
									<th>Avrg. B</th>
									<th>Avrg. C</th>
									<th>Avrg. D</th>
									<th><strong>Grand Avrg.</strong></th>
									<th><strong>Qualitative Rating</strong></th>
								</tr>
							</thead>
							<tbody>
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
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 page" id="report-page-2">
		<div class="row detail" id="detail-1">
			<div class="col-sm-12">
				<div class="row" id="part-a">
					<div class="col-sm-12">
						<p><strong>A. Instructional Materials</strong></p>						
						<table class="table table-hover table-bordered eval-report-table">
							<tbody>
								<?php for($i=1; $i <= 10; $i++):?>
									<tr>
										<td><?php echo $i.'. '.$questions['1']['a']['content'][$i]?></td>
										<td><?php echo format_rating($detail[$i])?></td>
										<td>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo format_percentage($detail[$i])?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo format_percentage($detail[$i])?>%;">
													<?php echo format_rating($detail[$i])?>
												</div>
											</div>
										</td>
									</tr>
								<?php endfor;?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row" id="part-b">
					<div class="col-sm-12">
						<p><strong>B. Class Management</strong></p>						
						<table class="table table-hover table-bordered eval-report-table">
							<tbody>
								<?php for($i=11; $i <= 20; $i++):?>
									<tr>
										<td><?php echo $i.'. '.$questions['1']['b']['content'][$i]?></td>
										<td><?php echo format_rating($detail[$i])?></td>
										<td>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo format_percentage($detail[$i])?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo format_percentage($detail[$i])?>%;">
													<?php echo format_rating($detail[$i])?>
												</div>
											</div>
										</td>
									</tr>
								<?php endfor;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 page" id="report-page-3">
		<div class="row detail" id="detail-2">
			<div class="col-sm-12">
				<div class="row" id="part-c">
					<div class="col-sm-12">
						<p><strong>C. Personal Qualities</strong></p>						
						<table class="table table-hover table-bordered eval-report-table">
							<tbody>
								<?php for($i=21; $i <= 30; $i++):?>
									<tr>
										<td><?php echo $i.'. '.$questions['1']['c']['content'][$i]?></td>
										<td><?php echo format_rating($detail[$i])?></td>
										<td>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo format_percentage($detail[$i])?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo format_percentage($detail[$i])?>%;">
													<?php echo format_rating($detail[$i])?>
												</div>
											</div>
										</td>
									</tr>
								<?php endfor;?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row" id="part-d">
					<div class="col-sm-12">
						<p><strong>D. Student-Faculty Relations</strong></p>						
						<table class="table table-hover table-bordered eval-report-table">
							<tbody>
								<?php for($i=31; $i <= 35; $i++):?>
									<tr>
										<td><?php echo $i.'. '.$questions['1']['d']['content'][$i]?></td>
										<td><?php echo format_rating($detail[$i])?></td>
										<td>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo format_percentage($detail[$i])?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo format_percentage($detail[$i])?>%;">
													<?php echo format_rating($detail[$i])?>
												</div>
											</div>
										</td>
									</tr>
								<?php endfor;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>