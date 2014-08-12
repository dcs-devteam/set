<h2>Teachers (<?php echo $this->office_model->get($this->office_id)->name?>)</h2>
<?php if(!empty($teachers)):?>
	<table class="table table-striped table-hover table-bordered teacher-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($teachers as $teacher):?>
				<tr>
					<td><?php echo $teacher->teacher_id?></td>
					<td><?php echo $teacher->last_name?></td>
					<td><?php echo $teacher->first_name?></td>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/teacher/edit/'.$teacher->teacher_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/teacher/delete/'.$teacher->teacher_id)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No teacher found. Add a teacher by clicking on this <a href="<?php echo base_url('admin/teacher/add')?>">link.</a></div>
<?php endif;?>