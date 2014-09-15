<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Office</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete the office <strong><?php echo $office->name?></strong>?</p>
			<p>Deleting an office will also remove all courses, classes, teachers, evaluation forms, and accounts related to it.</p>
			<p><strong>Deletion is permanent and cannot be undone.</strong></p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('superadmin/office/delete/'.$office->office_id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete Office</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>