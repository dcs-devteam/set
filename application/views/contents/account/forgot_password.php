<?php echo form_open('account/forgot_password/'.$user_string,array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-primary form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Forgot Password</h3>
		</div>
		<div class="panel-body">
			<p>Please enter a new password for your <?php echo $email_address?> account.</p>
			<div class="form-group">
				<label for="new_password" class="col-sm-4 control-label">New Password</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('new_password'); ?>" id="new_password" name="new_password" type="password" class="form-control" placeholder="New Password">
					<?php echo form_error('new_password','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="confirm_password" class="col-sm-4 control-label">Confirm Password</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('confirm_password'); ?>" id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
					<?php echo form_error('confirm_password','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Change Password</button>
					<a href="<?php echo base_url()?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>