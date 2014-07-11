<?php echo form_open('session/login',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-default" id="set-eval-period-form">
		<div class="panel-heading">
			<h3 class="panel-title">Login</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="username"class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $this->session->flashdata('username'); ?>" class="form-control" id="username" name="username" placeholder="Username">
					<small class="text-danger"><?php echo $this->session->flashdata('username_error');?></small>
				</div>
			</div>
			<div class="form-group">
				<label for="password"class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
					<input type="password" value="<?php echo $this->session->flashdata('password'); ?>" class="form-control" id="password" name="password" placeholder="Password">
					<small class="text-danger"><?php echo $this->session->flashdata('password_error');?></small>
					<?php echo form_error('verify_login','<small class="text-danger">','</small>'); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</div>
</form>