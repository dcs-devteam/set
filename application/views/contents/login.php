<div class="col-sm-offset-4 col-sm-4">
	<?php echo form_open('session/login',array('class'=>'form-horizontal','role'=>'form'))?>
		<div class="panel panel-primary form-container" id="login-form">
			<div class="panel-heading">
				<h3 class="panel-title" id="login-title">Login</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="email"class="col-sm-4 control-label">Email Address</label>
					<div class="col-sm-8">
						<input type="text" value="<?php echo $this->session->flashdata('email'); ?>" class="form-control" id="email" name="email" placeholder="Email">
						<small class="text-danger"><?php echo $this->session->flashdata('email_error');?></small>
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
						<button type="submit" class="btn btn-success">Login</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>