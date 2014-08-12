<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Teacher</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete teacher <?php echo $teacher->last_name.', '.$teacher->first_name?>?</p>
			<p>Deleting a teacher will also remove all classes he/she currently handles.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/teacher/delete/'.$teacher->teacher_id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete Teacher</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>