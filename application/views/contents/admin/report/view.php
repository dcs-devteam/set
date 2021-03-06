<h2>
	Already Evaluated (<?php $year_sem=$this->year_semester_model->get_current(); echo format_semester($year_sem->semester).' Semester/A.Y. '.format_year($year_sem->year)?>)
	<small><span class="label label-primary pull-right"><?php echo $total_evaluations['evaluations'].'/'.$total_evaluations['students'].' (evaluations/students)'?></span></small>
</h2>
<?php if(!empty($classes_already_evaluated)):?>
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
			<?php foreach ($classes_already_evaluated as $class):?>
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
						<a class="btn btn-success btn-xs" target="_blank" href="<?php echo base_url('admin/report/generate/'.$class->class_id)?>">Generate Report</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No classes evaluated yet.</div>
<?php endif;?>