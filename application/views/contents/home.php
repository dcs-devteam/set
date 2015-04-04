<div class="col-sm-offset-1 col-sm-6">
	<h3>Instructions</h3>
	<ol>
		<li>Enter the provided student account details into the form on the right.</li>
		<li>After being successfully logged in, a list of your class will appear.</li>
		<li>Select a class to evaluate by clicking on the Evaluate Class button.</li>
		<li>After being redirected to the evaluation form, fill up the form completely.</li>
		<li>Review your responses before submitting the form.</li>
		<li>Submit the form by clicking on the button at the bottom of the form.</li>
		<li>After being redirected to the class list, select the next class to evaluate.</li>
		<li>Log out after evaluating all your classes.</li>
		<li>Thank you for taking your time to evaluate.</li>
	</ol>
	<h3>Important Notes</h3>
	<ul>
		<li>You can only evaluate on the designated time period.</li>
		<li>You can evaluate the teacher for the class only once.</li>
		<li>Once you submit the form, you can no longer change your responses.</li>
		<li>Please evaluate the teacher as seriously and as honestly as you can.</li>
	</ul>
</div>
<div class="col-sm-offset-1 col-sm-3 form-signin">
	<div class="panel panel-primary" id="student-login-form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Enter Student Account Details</h3>
		</div>
		<div class="panel-body">			
			<?php echo form_open('session/student_login',array('class'=>'','role'=>'form', 'id' => 'student-login-form'))?>
					<input type="text" value="<?php echo $this->session->flashdata('student_number'); ?>" class="form-control" id="student-number" name="student_number" placeholder="Student Number">
					<input type="password" value="<?php echo $this->session->flashdata('password'); ?>" class="form-control" id="password" name="password" placeholder="Password">
					<small class="text-danger"><?php echo $this->session->flashdata('student_number_error');?></small>
					<small class="text-danger"><?php echo $this->session->flashdata('password_error');?></small>
					<?php echo form_error('student_login_error','<small class="text-danger">','</small>'); ?>
					<button type="submit" class="btn btn-success">Login</button>
			</form>
		</div>
</div>