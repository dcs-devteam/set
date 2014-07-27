<?php echo form_open('session/code',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-default form-container" id="login-form">
		<div class="panel-heading">
			<h3 class="panel-title">Enter Access Code</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="code"class="col-sm-4 control-label">Access Code</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $this->session->flashdata('code'); ?>" class="form-control" id="code" name="code" placeholder="Access Code">
					<small class="text-danger"><?php echo $this->session->flashdata('code_error');?></small>
					<?php echo form_error('verify_code','<small class="text-danger">','</small>'); ?>
					<?php echo form_error('active_class','<small class="text-danger">','</small>'); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>