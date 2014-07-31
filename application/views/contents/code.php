<div class="row">
	<div class="col-sm-offset-1 col-sm-6">
		<h3>Instructions</h3>
		<ol>
			<li>Enter the provided access code into the form on the right.</li>
			<li>After being redirected to the evaluation form, fill up the form completely.</li>
			<li>Review your responses before submitting the form.</li>
			<li>Submit the form by clicking on the button at the bottom of the form.</li>
		</ol>
		<h3>Important Notes</h3>
		<ul>
			<li>You can only evaluate in the designated place at the designated time period.</li>
			<li>You can evaluate the teacher for the class only once.</li>
			<li>Once you submit the form, you can no longer change your responses.</li>
			<li>Please evaluate the teacher as seriously and as honestly as you can.</li>
		</ul>
	</div>
	<div class="col-sm-offset-1 col-sm-3 form-signin">
		<div class="panel panel-primary" id="code-form-container">
			<div class="panel-heading">
				<h3 class="panel-title">Enter Access Code</h3>
			</div>
			<div class="panel-body">			
				<?php echo form_open('session/code',array('class'=>'','role'=>'form', 'id' => 'code-form'))?>
					<div class="form-group">
						<!-- <label for="code"class="col-sm-4 control-label">Access Code</label> -->
						<input type="text" value="<?php echo $this->session->flashdata('code'); ?>" class="form-control" id="code" name="code" placeholder="Access Code">
						<p class="text-danger"><?php echo $this->session->flashdata('code_error');?></p>
						<?php echo form_error('verify_code','<p class="text-danger">','</p>'); ?>
						<?php echo form_error('active_class','<p class="text-danger">','</p>'); ?>
					</div>
					<div class="form-group" id="evaluate-button">
						<button type="submit" class="btn btn-success">Evaluate</button>
					</div>
				</form>
			</div>
	</div>
</div>