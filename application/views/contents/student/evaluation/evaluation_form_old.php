<?php echo form_open('student/evaluation/submit/',array('class'=>'form-inline','role'=>'form', 'id'=>'eval-form'))?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li><a class="text-muted"><?php echo $class->class_name.'-'.$class->section?></a></li>
	<li class="dropdown active">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			PART I. CRITERIA <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu" id="1-dropdown">
			<li class="active"><a href="#1a" role="tab" data-toggle="tab">A. INSTRUCTIONAL MATERIALS</a></li>
			<li class=""><a href="#1b" role="tab" data-toggle="tab">B. CLASS MANAGEMENT</a></li>
			<li class=""><a href="#1c" role="tab" data-toggle="tab">C. PERSONAL QUALITIES</a></li>
			<li class=""><a href="#1d" role="tab" data-toggle="tab">D. STUDENT-FACULTY RELATIONS</a></li>
		</ul>
	</li>
	<li class=""><a href="#2" role="tab" data-toggle="tab">PART II. GENERAL EVALUATION OF THE TEACHER</a></li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			PART III. ADDITIONAL COMMENTS <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu" id="3-dropdown">
			<li class=""><a href="#3a" role="tab" data-toggle="tab">A. TEACHER'S STRONG POINTS</a></li>
			<li class=""><a href="#3b" role="tab" data-toggle="tab">B. TEACHER'S WEAK POINTS</a></li>
			<li class=""><a href="#3c" role="tab" data-toggle="tab">C. RECOMMENDATIONS FOR IMPROVEMENT</a></li>
		</ul>
	</li>
	<li class="pull-right">
		<button class="btn btn-primary" type="submit">SUBMIT FORM</button>
		<button class="btn" type="button" onclick="window.location.href='<?php echo base_url('student')?>'">CANCEL</button>
	</li>
</ul>
<!-- Tab panes -->
<div class="tab-content" id="eval-form-tab-container">
	<div class="tab-pane active" id="1a">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="disabled btn btn-default" id="1a-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1a-next">Next</button>
			</div>
		</div>
		<table class="table table-striped table-hover table-bordered eval-form-table">
			<thead>
				<tr>
					<th><?php echo strtoupper('a. '.$questions['1']['a']['name'])?></th>
					<th>Excellent</th>
					<th>Very Good</th>
					<th>Good</th>
					<th>Fair</th>
					<th>Poor</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($questions['1']['a']['content'] as $index => $question):?>
					<tr>
						<td><?php echo $index.'. '.$question?></td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][a][<?php echo $index?>][]" value="5" required> Excellent
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][a][<?php echo $index?>][]" value="4"> Very Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][a][<?php echo $index?>][]" value="3"> Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][a][<?php echo $index?>][]" value="2"> Fair
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][a][<?php echo $index?>][]" value="1"> Poor
							</label>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div> <!-- INSTRUCTIONAL MATERIALS -->
	<div class="tab-pane" id="1b">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1b-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1b-next">Next</button>
			</div>
		</div>
		<table class="table table-striped table-hover table-bordered eval-form-table">
			<thead>
				<tr>
					<th><?php echo strtoupper('b. '.$questions['1']['b']['name'])?></th>
					<th>Excellent</th>
					<th>Very Good</th>
					<th>Good</th>
					<th>Fair</th>
					<th>Poor</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($questions['1']['b']['content'] as $index => $question):?>
					<tr>
						<td><?php echo $index.'. '.$question?></td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][b][<?php echo $index?>][]" value="5" required> Excellent
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][b][<?php echo $index?>][]" value="4"> Very Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][b][<?php echo $index?>][]" value="3"> Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][b][<?php echo $index?>][]" value="2"> Fair
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][b][<?php echo $index?>][]" value="1"> Poor
							</label>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div> <!-- CLASS MANAGEMENT -->
	<div class="tab-pane" id="1c">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1c-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1c-next">Next</button>
			</div>
		</div>
		<table class="table table-striped table-hover table-bordered eval-form-table">
			<thead>
				<tr>
					<th><?php echo strtoupper('c. '.$questions['1']['c']['name'])?></th>
					<th>Excellent</th>
					<th>Very Good</th>
					<th>Good</th>
					<th>Fair</th>
					<th>Poor</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($questions['1']['c']['content'] as $index => $question):?>
					<tr>
						<td><?php echo $index.'. '.$question?></td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][c][<?php echo $index?>][]" value="5" required> Excellent
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][c][<?php echo $index?>][]" value="4"> Very Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][c][<?php echo $index?>][]" value="3"> Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][c][<?php echo $index?>][]" value="2"> Fair
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][c][<?php echo $index?>][]" value="1"> Poor
							</label>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div> <!-- PERSONAL QUALITIES -->
	<div class="tab-pane" id="1d">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1d-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="1d-next">Next</button>
			</div>
		</div>
		<table class="table table-striped table-hover table-bordered eval-form-table">
			<thead>
				<tr>
					<th><?php echo strtoupper('d. '.$questions['1']['d']['name'])?></th>
					<th>Excellent</th>
					<th>Very Good</th>
					<th>Good</th>
					<th>Fair</th>
					<th>Poor</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($questions['1']['d']['content'] as $index => $question):?>
					<tr>
						<td><?php echo $index.'. '.$question?></td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][d][<?php echo $index?>][]" value="5" required> Excellent
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][d][<?php echo $index?>][]" value="4"> Very Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][d][<?php echo $index?>][]" value="3"> Good
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][d][<?php echo $index?>][]" value="2"> Fair
							</label>
						</td>
						<td>
							<label class="radio-inline">
								<input type="radio" name="answers[1][d][<?php echo $index?>][]" value="1"> Poor
							</label>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div> <!-- STUDENT-FACULTY RELATIONS -->
	<div class="tab-pane" id="2">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="2-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="2-next">Next</button>
			</div>
		</div>
		<div class="panel panel-default eval-form-panel">
			<div class="panel-body">
				<label><?php echo $questions['2']['content']['1']?></label>
			</div>
			<div class="panel-footer">
				<label class="radio-inline">
					<input type="radio" name="answers[2][1][]" value="5" required> 5
				</label>
				<label class="radio-inline">
					<input type="radio" name="answers[2][1][]" value="4"> 4
				</label>
				<label class="radio-inline">
					<input type="radio" name="answers[2][1][]" value="3"> 3
				</label>
				<label class="radio-inline">
					<input type="radio" name="answers[2][1][]" value="2"> 2
				</label>
				<label class="radio-inline">
					<input type="radio" name="answers[2][1][]" value="1"> 1
				</label>
			</div>
		</div>
	</div> <!-- GENERAL EVALUATION OF THE TEACHER -->
	<div class="tab-pane" id="3a">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="3a-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="3a-next">Next</button>
			</div>
		</div>
		<div class="panel panel-default eval-form-panel">
			<div class="panel-heading">
				<label class="panel-title" for="answers31"><?php echo '1. '.$questions['3']['content']['1']?>:</label>
			</div>
			<div class="panel-body">
				<textarea required class="form-control eval-form-textarea required" rows="5" name="answers[3][1]" id="answers31"></textarea>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="3b">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="3b-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="3b-next">Next</button>
			</div>
		</div>
		<div class="panel panel-default eval-form-panel">
			<div class="panel-heading"><label class="panel-title" for="answers32"><?php echo '2. '.$questions['3']['content']['2']?>:</label>
			</div>
			<div class="panel-body">
				<textarea required class="form-control eval-form-textarea required" rows="5" name="answers[3][2]" id="answers32"></textarea>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="3c">
		<div class="btn-group btn-group-justified pager-button-container">
			<div class="btn-group">
				<button type="button" class="btn btn-default" id="3c-prev">Previous</button>
			</div>
			<div class="btn-group">
				<button type="submit" class="btn btn-primary" id="eval-form-submit">Submit</button>
			</div>
		</div>
		<div class="panel panel-default eval-form-panel">
			<div class="panel-heading">
				<label class="panel-title" for="answers33"><?php echo '3. '.$questions['3']['content']['3']?>:</label>
			</div>
			<div class="panel-body">
				<textarea required class="form-control eval-form-textarea required" rows="5" name="answers[3][3]" id="answers33"></textarea>
			</div>
		</div>
	</div>
</div>
</form>