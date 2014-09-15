<h2>Admins</h2>
<?php if(!empty($admins)):?>
	<table class="table table-striped table-hover table-bordered admin-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Email Address</th>
				<th>Office</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($admins as $admin):?>
				<tr>
					<td><?php echo $admin->user_id?></td>
					<td><?php echo $admin->last_name?></td>
					<td><?php echo $admin->first_name?></td>
					<td><?php echo $admin->email_address?></td>
					<td><?php echo office_name($admin->office_id)?></td>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('superadmin/admin/edit/'.$admin->user_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('superadmin/admin/delete/'.$admin->user_id)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No admin found. Add an admin by clicking on this <a href="<?php echo base_url('superadmin/admin/add')?>">link.</a></div>
<?php endif;?>