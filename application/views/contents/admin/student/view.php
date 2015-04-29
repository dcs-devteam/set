<h2>Students</h2>
<?php if(!empty($students)):?>
	<table class="table table-striped table-hover table-bordered student-table data-table">
		<thead>
			<tr>
				<th>SAIS ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Program</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($students as $student):?>
				<tr>
					<td><?php echo $student->sais_id?></td>
					<td><?php echo $student->last_name?></td>
					<td><?php echo $student->first_name?></td>
					<td><?php echo $student->program?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No students found.</div>
<?php endif;?>