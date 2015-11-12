<div id="reset-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Reset Student Passwords</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to reset the passwords of all the students enrolled in the current semester?</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/student/reset_passwords', array('id' => 'reset-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Reset</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Cancel</button>
		</form>
	</div>
</div>