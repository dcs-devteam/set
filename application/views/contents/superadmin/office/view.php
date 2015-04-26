<h2>Offices</h2>
<?php if(!empty($offices)):?>
	<table class="table table-striped table-hover table-bordered office-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th class="no-sort">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($offices as $office):?>
				<tr>
					<td><?php echo $office->office_id?></td>
					<td><?php echo $office->name?></td>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('superadmin/office/edit/'.$office->office_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('superadmin/office/delete/'.$office->office_id)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No office was found. Click <a href="<?php echo base_url('superadmin/office/add')?>">here</a> to add an office.</div>
<?php endif;?>