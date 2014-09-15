<div class="alert alert-info" role="alert">
	<ul>
		<li>Passwords are automatically generated.</li>
		<li>Make sure to enter a valid email address that can receive mail. Account details will be sent by email to the account holder.</li>
		<li>You can select an existing Office by double-clicking on the respective field.</li>
	</ul>
</div>
<?php echo form_open('superadmin/admin/add',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-primary form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Add Admin</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="first_name" class="col-sm-4 control-label">First Name</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('first_name'); ?>" id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name">
					<?php echo form_error('first_name','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class="col-sm-4 control-label">Last Name</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('last_name'); ?>" id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name">
					<?php echo form_error('last_name','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="email_address" class="col-sm-4 control-label">Email Address</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('email_address'); ?>" id="email_address" name="email_address" type="text" class="form-control" placeholder="Email Address">
					<?php echo form_error('email_address','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="office" class="col-sm-4 control-label">Office</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('office'); ?>" id="office" name="office" type="text" class="form-control" placeholder="Office Name" list="offices">
					<datalist id="offices">
						<?php foreach ($offices as $office):?>
							<option value="<?php echo $office->name?>">
						<?php endforeach;?>
					</datalist>
					<?php echo form_error('office','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Add Admin</button>
					<a href="<?php echo base_url('superadmin/admin/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>