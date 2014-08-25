<div class="alert alert-info" role="alert">
	<ul>
		<li>Passwords are automatically generated.</li>
		<li>Make sure to enter a valid email address that can receive mail. Account details will be sent by email to the account holder.</li>
	</ul>
</div>
<?php echo form_open('admin/account/add',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-primary form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Add Account</h3>
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
				<label for="role" class="col-sm-4 control-label">Role</label>
				<div class="col-sm-8">
					<select name="role" id="role" class="form-control">
						<option selected disabled>Role</option>
						<?php foreach ($roles as $key => $role):?>
							<option value="<?php echo $key?>" <?php echo set_select('role', $key)?> ><?php echo $role?></option>
						<?php endforeach;?>
					</select>
					<?php echo form_error('role','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<?php echo form_error('unique_teacher','<p class="text-danger">','</p>');?>
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Add Account</button>
					<a href="<?php echo base_url('admin/account/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>