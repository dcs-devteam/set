<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Class</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete class <?php echo $class->class_name.'-'.$class->section?>?</p>
			<p>Deleting a class will also remove all evaluation forms linked to it.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/class/delete/'.$class->class_id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete Class</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>