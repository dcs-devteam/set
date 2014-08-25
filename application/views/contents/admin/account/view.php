<h2>Accounts (<?php echo $this->office_model->get($this->office_id)->name?>)</h2>
<?php if(!empty($accounts)):?>
	<table class="table table-striped table-hover table-bordered account-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Email Address</th>
				<th>Role</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($accounts as $account):?>
				<tr>
					<td><?php echo $account->user_id?></td>
					<td><?php echo $account->last_name?></td>
					<td><?php echo $account->first_name?></td>
					<td><?php echo $account->email_address?></td>
					<?php if ($account->role === 'evaluator'):?>
						<td>Evaluator</td>
					<?php elseif ($account->role === 'staff'):?>
						<td>Staff</td>
					<?php endif;?>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/account/edit/'.$account->user_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/account/delete/'.$account->user_id)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No account found. Add an account by clicking on this <a href="<?php echo base_url('admin/account/add')?>">link.</a></div>
<?php endif;?>