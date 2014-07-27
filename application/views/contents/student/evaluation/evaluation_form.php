<div id="evaluation-form-container">
	<?php echo form_open('evaluation/submit/',array('class'=>'form-horizontal','role'=>'form', 'id'=>'evaluation-form'))?>
	<div class="row">
		<div class="col-sm-12" id="header">
			<h1>FACULTY EVALUATION INSTRUMENT</h1>
			<h3>(Student's Evaluation of Teacher)</h3>
		</div>
	</div>
	<div class="row" id="instructions">
		<div class="panel panel-default col-sm-offset-1 col-sm-10">
			<div class="panel-body">
				Please make a serious evaluation of your teacher; in so doing, you are contributing to the effort to realize the U.P. goal of academic excellence.
			</div>
		</div>
	</div>
	<div class="row" id="class-details">
		<hr>
		<div class="form-group">
			<label for="teacher_name" class="col-sm-offset-1 col-sm-2 control-label">Teacher's Name:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="teacher_name" value="<?php echo $teacher->last_name.', '.$teacher->first_name?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="class" class="col-sm-offset-1 col-sm-2 control-label">Subject/Section:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="class" value="<?php echo $class->class_name.' '.$class->section?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="schedule" class="col-sm-offset-1 col-sm-2 control-label">Day/Time:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="schedule" value="<?php echo $class->schedule?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="sem_year" class="col-sm-offset-1 col-sm-2 control-label">Sem/School Yr:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="sem_year" value="<?php echo $class->semester.' Sem / A.Y.'.$class->year.'-'.($class->year + 1)?>" disabled>
			</div>
		</div>
		<hr>
	</div>
	<div class="row" id="part1">
		<div class="row" id="part1a">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo strtoupper('a. '.$questions['1']['a']['name'])?></th>
								<th>E</th>
								<th>VG</th>
								<th>G</th>
								<th>F</th>
								<th>P</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($questions['1']['a']['content'] as $index => $question):?>
								<tr>
									<td><?php echo $index.'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo $index?>][]" value="5" required>&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo $index?>][]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo $index?>][]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo $index?>][]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo $index?>][]" value="1">&nbsp;
										</label>
									</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- INSTRUCTIONAL MATERIALS -->
	<div class="row" id="part1">
		<div class="row" id="part1b">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo strtoupper('b. '.$questions['1']['b']['name'])?></th>
								<th>E</th>
								<th>VG</th>
								<th>G</th>
								<th>F</th>
								<th>P</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($questions['1']['b']['content'] as $index => $question):?>
								<tr>
									<td><?php echo ($index+10).'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+10)?>][]" value="5" required>&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+10)?>][]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+10)?>][]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+10)?>][]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+10)?>][]" value="1">&nbsp;
										</label>
									</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- CLASS MANAGEMENT -->
	<div class="row" id="part1">
		<div class="row" id="part1c">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo strtoupper('c. '.$questions['1']['c']['name'])?></th>
								<th>E</th>
								<th>VG</th>
								<th>G</th>
								<th>F</th>
								<th>P</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($questions['1']['c']['content'] as $index => $question):?>
								<tr>
									<td><?php echo ($index+20).'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+20)?>][]" value="5" required>&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+20)?>][]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+20)?>][]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+20)?>][]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+20)?>][]" value="1">&nbsp;
										</label>
									</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- PERSONAL QUALITIES -->
	<div class="row" id="part1">
		<div class="row" id="part1d">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo strtoupper('d. '.$questions['1']['d']['name'])?></th>
								<th>E</th>
								<th>VG</th>
								<th>G</th>
								<th>F</th>
								<th>P</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($questions['1']['d']['content'] as $index => $question):?>
								<tr>
									<td><?php echo ($index+30).'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+30)?>][]" value="5" required>&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+30)?>][]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+30)?>][]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+30)?>][]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" name="answers[<?php echo ($index+30)?>][]" value="1">&nbsp;
										</label>
									</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- STUDENT-FACULTY RELATIONS -->
	<div class="row" id="part2">
		<div class="row" id="part2a">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo strtoupper('part ii. '.$questions['2']['name'])?></th>
								<th>5</th>
								<th>4</th>
								<th>3</th>
								<th>2</th>
								<th>1</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo '36. '.$questions['2']['content']['1']?></td>
								<td>
									<label class="radio-inline">
										<input type="radio" name="answers[36][]" value="5" required>&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" name="answers[36][]" value="4">&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" name="answers[36][]" value="3">&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" name="answers[36][]" value="2">&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" name="answers[36][]" value="1">&nbsp;
									</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- PART II -->
	<div class="row" id="part3">
		<div class="row" id="part3a">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo strtoupper('part iii. '.$questions['3']['name'])?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p><?php echo '1. '.$questions['3']['content'][1]?></p>
									<textarea class="form-control eval-form-textarea" rows="5" name="answers[strong_points]" id="answers31"></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<p><?php echo '2. '.$questions['3']['content'][2]?></p>
									<textarea class="form-control eval-form-textarea" rows="5" name="answers[weak_points]" id="answers31"></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<p><?php echo '3. '.$questions['3']['content'][3]?></p>
									<textarea class="form-control eval-form-textarea" rows="5" name="answers[recommendations]" id="answers31"></textarea>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- PART III -->
	<hr>
	<div class="btn-container">
		<button class="btn btn-primary eval-form-submit" type="submit">SUBMIT FORM</button>
	</div>
	</form>
</div>