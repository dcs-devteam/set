<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Cancel Class Evaluation</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to cancel evaluation for class <?php echo $class->class_name.'-'.$class->section?>?</p>
			<p>Canceling a class evaluation will discard submitted evaluation forms and invalidate unused access codes for this class.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/evaluation/cancel/'.$class->class_id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Cancel Evaluation</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>