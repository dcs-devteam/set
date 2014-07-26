<?php if(!empty($classes_currently_evaluated)):?>
	<h2>Currently Evaluated</h2>
	<table class="table table-striped table-hover table-bordered class-eval-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Section</th>
				<th>Schedule</th>
				<th>Students</th>
				<th>Teacher</th>
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
					<td><?php $teacher = $this->teacher_model->get($class->teacher_id);echo $teacher->last_name.', '.$teacher->first_name?></td>
					<td>
						<?php if($this->evaluator_model->get_evaluator($class->class_id)->evaluator_id == $this->session->userdata('user_id')):?>
							<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/evaluation/stop/'.$class->class_id)?>">Stop Evaluation</a>
							<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/evaluation/cancel/'.$class->class_id)?>">Cancel Evaluation</a>
						<?php endif;?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif;?>
<?php if(!empty($classes_not_evaluated)):?>
	<h2>To be Evaluated</h2>
	<table class="table table-striped table-hover table-bordered class-eval-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
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
					<td><?php $teacher = $this->teacher_model->get($class->teacher_id);echo $teacher->last_name.', '.$teacher->first_name?></td>
					<td>
						<a class="btn btn-primary btn-xs" href="<?php echo base_url('admin/evaluation/start/'.$class->class_id)?>">Start Evaluation</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif;?>