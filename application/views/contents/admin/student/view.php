<h2>Students</h2>
<?php if(!empty($students)):?>
	<table class="table table-striped table-hover table-bordered student-table data-table">
		<thead>
			<tr>
				<th>SAIS ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($students as $student):?>
				<tr>
					<td><?php echo $student->sais_id?></td>
					<td><?php echo $student->last_name?></td>
					<td><?php echo $student->first_name?></td>
					<td><?php echo $student->program?></td>
					<td>
						<a class="btn btn-info btn-xs" href="<?php echo base_url('admin/student/temp_password/'.$student->sais_id)?>">View Temp Password</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/student/reset_password/'.$student->sais_id)?>">Reset Password</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No students found.</div>
<?php endif;?>