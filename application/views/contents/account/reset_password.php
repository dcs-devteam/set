<?php echo form_open('account/reset_password',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-primary form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Reset Password</h3>
		</div>
		<div class="panel-body">
			<p>To reset your password, enter the email address you use to sign in to eValuation.</p>
			<div class="form-group">
				<label for="email_address" class="col-sm-4 control-label">Email Address</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('email_address'); ?>" id="email_address" name="email_address" type="text" class="form-control" placeholder="Email Address">
					<?php echo form_error('email_address','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Continue</button>
					<a href="<?php echo base_url('login')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>