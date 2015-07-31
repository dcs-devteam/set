<div id="evaluation-form-container">
	<?php echo form_open('student/class/evaluate/'.$class->class_id,array('class'=>'form-horizontal','role'=>'form', 'id'=>'evaluation-form'))?>
	<input type="hidden" value="<?php echo $class->class_id?>" name="class_id"/>
	<div class="row">
		<div class="col-xs-12" id="header">
			<h1>FACULTY EVALUATION INSTRUMENT</h1>
			<h3>(Student's Evaluation of Teacher)</h3>
		</div>
	</div>
	<div class="row" id="instructions">
		<div class="panel panel-default col-xs-offset-1 col-xs-10">
			<div class="panel-body">
				Please make a serious evaluation of your teacher; in so doing, you are contributing to the effort to realize the U.P. goal of academic excellence.
			</div>
		</div>
	</div>
	<div class="row" id="class-details">
		<hr>
		<div class="form-group">
			<label for="teacher_name" class="col-xs-offset-1 col-xs-2 control-label">Teacher's Name:</label>
			<div class="col-xs-4">
				<input type="text" class="form-control" id="teacher_name" value="<?php echo $teacher->last_name.', '.$teacher->first_name?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="class" class="col-xs-offset-1 col-xs-2 control-label">Subject/Section:</label>
			<div class="col-xs-4">
				<input type="text" class="form-control" id="class" value="<?php echo $class->class_name.' '.$class->section?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="schedule" class="col-xs-offset-1 col-xs-2 control-label">Day/Time:</label>
			<div class="col-xs-4">
				<input type="text" class="form-control" id="schedule" value="<?php echo $class->schedule?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="sem_year" class="col-xs-offset-1 col-xs-2 control-label">Sem/School Yr:</label>
			<div class="col-xs-4">
				<input type="text" class="form-control" id="sem_year" value="<?php echo $class->semester.' Sem / A.Y.'.$class->year.'-'.($class->year + 1)?>" disabled>
			</div>
		</div>
		<hr>
	</div>
	<div class="row" id="part1">
		<div class="row" id="part1a">
			<div class="row">
				<div class="col-xs-offset-1 col-xs-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo ('A. '.$questions['1']['a']['name'])?></th>
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
									<td><?php echo form_error('answers['.$index.']',' <span class="label label-danger">','</span> '); ?><?php echo $index.'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '1'); ?> name="answers[<?php echo $index?>]" value="1" >&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '2'); ?> name="answers[<?php echo $index?>]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '3'); ?> name="answers[<?php echo $index?>]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '4'); ?> name="answers[<?php echo $index?>]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '5'); ?> name="answers[<?php echo $index?>]" value="5">&nbsp;
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
				<div class="col-xs-offset-1 col-xs-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo ('B. '.$questions['1']['b']['name'])?></th>
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
									<td><?php echo form_error('answers['.$index.']',' <span class="label label-danger">','</span> '); ?><?php echo ($index).'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '1'); ?> name="answers[<?php echo $index?>]" value="1" >&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '2'); ?> name="answers[<?php echo $index?>]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '3'); ?> name="answers[<?php echo $index?>]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '4'); ?> name="answers[<?php echo $index?>]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '5'); ?> name="answers[<?php echo $index?>]" value="5">&nbsp;
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
				<div class="col-xs-offset-1 col-xs-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo ('C. '.$questions['1']['c']['name'])?></th>
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
									<td><?php echo form_error('answers['.$index.']',' <span class="label label-danger">','</span> '); ?><?php echo ($index).'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '1'); ?> name="answers[<?php echo $index?>]" value="1" >&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '2'); ?> name="answers[<?php echo $index?>]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '3'); ?> name="answers[<?php echo $index?>]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '4'); ?> name="answers[<?php echo $index?>]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '5'); ?> name="answers[<?php echo $index?>]" value="5">&nbsp;
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
				<div class="col-xs-offset-1 col-xs-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo ('D. '.$questions['1']['d']['name'])?></th>
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
									<td><?php echo form_error('answers['.$index.']',' <span class="label label-danger">','</span> '); ?><?php echo ($index).'. '.$question?></td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '1'); ?> name="answers[<?php echo $index?>]" value="1" >&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '2'); ?> name="answers[<?php echo $index?>]" value="2">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '3'); ?> name="answers[<?php echo $index?>]" value="3">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '4'); ?> name="answers[<?php echo $index?>]" value="4">&nbsp;
										</label>
									</td>
									<td>
										<label class="radio-inline">
											<input type="radio" required <?php echo set_radio('answers['.$index.']', '5'); ?> name="answers[<?php echo $index?>]" value="5">&nbsp;
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
				<div class="col-xs-offset-1 col-xs-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo ('Part II. '.$questions['2']['name'])?></th>
								<th>5</th>
								<th>4</th>
								<th>3</th>
								<th>2</th>
								<th>1</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo form_error('answers[36]',' <span class="label label-danger">','</span> '); ?><?php echo '36. '.$questions['2']['content']['36']?></td>
								<td>
									<label class="radio-inline">
										<input type="radio" required <?php echo set_radio('answers[36]', '1'); ?> name="answers[36]" value="1" >&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" required <?php echo set_radio('answers[36]', '2'); ?> name="answers[36]" value="2">&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" required <?php echo set_radio('answers[36]', '3'); ?> name="answers[36]" value="3">&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" required <?php echo set_radio('answers[36]', '4'); ?> name="answers[36]" value="4">&nbsp;
									</label>
								</td>
								<td>
									<label class="radio-inline">
										<input type="radio" required <?php echo set_radio('answers[36]', '5'); ?> name="answers[36]" value="5">&nbsp;
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
				<div class="col-xs-offset-1 col-xs-10">
					<table class="table table-hover table-bordered eval-form-table">
						<thead>
							<tr>
								<th><?php echo ('Part III. '.$questions['3']['name'])?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p><?php echo '1. '.$questions['3']['content'][1]?></p>
									<textarea class="form-control eval-form-textarea" rows="5" name="answers[strong_points]" id="strong_points"><?php echo set_value('answers[strong_points]'); ?></textarea>
									<?php echo form_error('answers[strong_points]',' <span class="label label-danger">','</span> '); ?>
								</td>
							</tr>
							<tr>
								<td>
									<p><?php echo '2. '.$questions['3']['content'][2]?></p>
									<textarea class="form-control eval-form-textarea" rows="5" name="answers[weak_points]" id="weak_points"><?php echo set_value('answers[weak_points]'); ?></textarea>
									<?php echo form_error('answers[weak_points]',' <span class="label label-danger">','</span> '); ?>
								</td>
							</tr>
							<tr>
								<td>
									<p><?php echo '3. '.$questions['3']['content'][3]?></p>
									<textarea class="form-control eval-form-textarea" rows="5" name="answers[recommendations]" id="recommendations"><?php echo set_value('answers[recommendations]'); ?></textarea>
									<?php echo form_error('answers[recommendations]',' <span class="label label-danger">','</span> '); ?>
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
		<button class="btn btn-primary eval-form-submit" type="submit" id="submit-form">SUBMIT FORM</button>
		<a href="<?php echo base_url()?>" class="btn btn-danger eval-form-submit" id="cancel-submit">Cancel</a>
	</div>
	</form>
</div>