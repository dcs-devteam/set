<div id="reset-password-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Reset Student Password</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to reset the password for student <?php echo $student->last_name.', '.$student->first_name?>?</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/student/reset_password/'.$student->sais_id, array('id' => 'reset-password-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Reset Password</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>