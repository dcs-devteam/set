<h2>Classes for <?php $year_sem=$this->year_semester_model->get_current(); echo format_semester($year_sem->semester).' Semester/Trimester | A.Y. '.format_year($year_sem->year)?></h2>
<?php if(!empty($classes)):?>
	<table class="table table-striped table-hover table-bordered class-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Course</th>
				<th>Section</th>
				<th>Schedule</th>
				<th>Students</th>
				<th>Evaluations</th>
				<th>Teacher</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($classes as $class):?>
				<tr>
					<td><?php echo $class->class_id?></td>
					<td><?php echo $class->class_name?></td>
					<td><?php echo $class->section?></td>
					<td><?php echo $class->schedule?></td>
					<td><?php echo $class->number_of_students?></td>
					<td>
						<span class="badge"><?php echo str_pad(format_percent($class->submissions/$class->number_of_students, 0), 3, '0', STR_PAD_LEFT)?></span>
						<?php echo $class->submissions?>
					</td>
					<td><?php $teacher = $this->teacher_model->get_by_id($class->teacher_id);echo $teacher->last_name.', '.$teacher->first_name?></td>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/class/edit/'.$class->class_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/class/delete/'.$class->class_id)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No classes found. Create a class by clicking on this <a href="<?php echo base_url('admin/class/add')?>">link.</a></div>
<?php endif;?>