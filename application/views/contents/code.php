<div class="row">
	<div class="col-sm-offset-1 col-sm-6 notes" id="code-notes">
		<p> IMPORTANT NOTE: It is important that you finish evaluation of a class within...
		</p>
	</div>
	<div class="col-sm-offset-2 col-sm-2 form-signin" id="code-form-container">
		<?php echo form_open('session/code',array('class'=>'','role'=>'form', 'id' => 'code-form'))?>
			<div class="form-group">
				<!-- <label for="code"class="col-sm-4 control-label">Access Code</label> -->
				<input type="text" value="<?php echo $this->session->flashdata('code'); ?>" class="form-control" id="code" name="code" placeholder="Access Code">
				<small class="text-danger"><?php echo $this->session->flashdata('code_error');?></small>
				<?php echo form_error('verify_code','<small class="text-danger">','</small>'); ?>
				<?php echo form_error('active_class','<small class="text-danger">','</small>'); ?>
			</div>
			<div class="form-group" id="evaluate-button">
				<button type="submit" class="btn btn-success">Evaluate</button>
			</div>
		</form>
	</div>
</div>