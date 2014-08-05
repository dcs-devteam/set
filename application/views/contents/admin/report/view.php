<?php if(!empty($classes_already_evaluated)):?>
	<h2>Already Evaluated</h2>
	<table class="table table-striped table-hover table-bordered class-eval-table">
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
			<?php foreach ($classes_already_evaluated as $class):?>
				<tr>
					<td><?php echo $class->class_id?></td>
					<td><?php echo $class->class_name?></td>
					<td><?php echo $class->section?></td>
					<td><?php echo $class->schedule?></td>
					<td><?php echo $class->number_of_students?></td>
					<td><?php $teacher = $this->teacher_model->get($class->teacher_id);echo $teacher->last_name.', '.$teacher->first_name?></td>
					<td>
						<a class="btn btn-success btn-xs" href="<?php echo base_url('admin/report/generate/'.$class->class_id)?>">Generate Report</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif;?>