<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Admin</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete the admin account of <?php echo $admin->last_name.', '.$admin->first_name?>?</p>
			<p>If he/she is the only admin for <?php echo office_name($admin->office_id)?>, deleting the account will prevent others from maintaining the courses, classes, teachers, and eValuation accounts for the office.</p>
			<p><strong>Note: Deletion is permanent and cannot be undone.</strong></p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('superadmin/admin/delete/'.$admin->user_id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete Account</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>