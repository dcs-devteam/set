<div class="table-container">
	<?php if(!empty($classes)):?>
		<?php if($completed_evaluation):?>
			<div class="alert alert-success" role="alert">You evaluated all your teachers in all your classes. Thank you for your participation.</a></div>
		<?php endif;?>
		<table class="table table-striped table-hover table-bordered class-table data-table">
			<thead>
				<tr>
					<th>Course</th>
					<th>Section</th>
					<th>Schedule</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($classes as $class):?>
					<tr>
						<td><?php echo $class->class_details->class_name?></td>
						<td><?php echo $class->class_details->section?></td>
						<td><?php echo $class->class_details->schedule?></td>
						<td>
						<?php if (!$class->has_evaluated && $evaluation_active): ?>
							<a class="btn btn-primary btn-xs" href="<?php echo base_url('student/class/evaluate/'.$class->class_id)?>">Evaluate</a>
						<?php elseif ($class->has_evaluated):?>
							<a class="btn btn-success btn-xs" href="<?php echo base_url('student/class')?>" disabled><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Done</a>
						<?php endif;?>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php else:?>
		<div class="alert alert-warning" role="alert">You currently are not enrolled in any class.</div>
	<?php endif;?>
</div>