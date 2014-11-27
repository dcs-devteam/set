<h2>
	Currently Evaluated (<?php $year_sem=$this->year_semester_model->get_current(); echo format_semester($year_sem->semester).' Semester/A.Y. '.format_year($year_sem->year)?>)
	<small><span class="label label-primary pull-right"><?php echo $total_evaluations['evaluations'].'/'.$total_evaluations['students'].' (submissions/students)'?></span></small>
</h2>
<div class="alert alert-default alert-small" role="alert">
	Actions: 
	<a class="btn btn-primary btn-xs" target="_blank" href="<?php echo base_url('admin/evaluation/unused_codes')?>">Print Unused Codes</a>
</div>
<?php if(!empty($classes_currently_evaluated)):?>
	<table class="table table-striped table-hover table-bordered class-table evaluation-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Course</th>
				<th>Section</th>
				<th>Schedule</th>
				<th>Students</th>
				<th>Teacher</th>
				<th>Submissions</th>
				<th>%</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($classes_currently_evaluated as $class):?>
				<tr>
					<td><?php echo $class->class_id?></td>
					<td><?php echo $class->class_name?></td>
					<td><?php echo $class->section?></td>
					<td><?php echo $class->schedule?></td>
					<td><?php echo $class->number_of_students?></td>
					<td><?php $teacher = $this->teacher_model->get_by_id($class->teacher_id);echo $teacher->last_name.', '.$teacher->first_name?></td>
					<td><?php echo $class->submissions.'/'.$class->number_of_students?></td>
					<td>
						<?php if(($class->submissions/$class->number_of_students) >= 0.5):?>
							<span class="label label-primary"><?php echo format_rating(($class->submissions/$class->number_of_students)*100).'%'?></span>
						<?php else:?>
							<span class="label label-danger"><?php echo format_rating(($class->submissions/$class->number_of_students)*100).'%'?></span>
						<?php endif;?>
					</td>
					<td>
						<?php if($this->evaluator_model->get_evaluator($class->class_id)->evaluator_id == $this->session->userdata('user_id')):?>
							<a class="btn btn-success btn-xs" target="_blank" href="<?php echo base_url('admin/evaluation/code/'.$class->class_id)?>">Access Codes</a>
							<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/evaluation/stop/'.$class->class_id)?>">Stop</a>
							<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/evaluation/cancel/'.$class->class_id)?>">Cancel</a>
						<?php endif;?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif;?>
<h2>To be Evaluated <?php $year_sem=$this->year_semester_model->get_current(); if(empty($classes_currently_evaluated)) echo '('.format_semester($year_sem->semester).' Semester/A.Y. '.format_year($year_sem->year).')'?></h2>
<?php if(!empty($classes_not_evaluated)):?>
	<table class="table table-striped table-hover table-bordered class-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Class</th>
				<th>Section</th>
				<th>Schedule</th>
				<th>Students</th>
				<th>Teacher</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($classes_not_evaluated as $class):?>
				<tr>
					<td><?php echo $class->class_id?></td>
					<td><?php echo $class->class_name?></td>
					<td><?php echo $class->section?></td>
					<td><?php echo $class->schedule?></td>
					<td><?php echo $class->number_of_students?></td>
					<td><?php $teacher = $this->teacher_model->get_by_id($class->teacher_id);echo $teacher->last_name.', '.$teacher->first_name?></td>
					<td>
						<a class="btn btn-primary btn-xs" href="<?php echo base_url('admin/evaluation/start/'.$class->class_id)?>">Start Evaluation</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<?php if ($this->session->userdata('role') === 'admin'):?>
		<div class="alert alert-warning" role="alert">No classes found. Create a class by clicking on this <a href="<?php echo base_url('admin/class/add')?>">link.</a></div>
	<?php elseif ($this->session->userdata('role') === 'evaluator'):?>
		<div class="alert alert-warning" role="alert">No classes found. Contact the administrator about this.</a></div>
	<?php endif;?>
<?php endif;?>