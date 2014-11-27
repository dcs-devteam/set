<div id="stop-confirm-container" class="panel panel-warning confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Stop Class Evaluation</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<?php if(($class->submissions / $class->number_of_students) < 0.5): ?>
				<div class="alert alert-warning" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					The number of submissions (<?php echo $class->submissions?>) is less than 50% of the total number of students (<?php echo $class->number_of_students?>).
					</div>
			<?php endif;?>
			<p>Are you sure you want to stop evaluation for class <?php echo $class->class_name.'-'.$class->section?>?</p>
			<p>Stopping a class evaluation will invalidate unused access codes for this class.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/evaluation/stop/'.$class->class_id, array('id' => 'stop-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-warning" type="submit">Stop</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Cancel</button>
		</form>
	</div>
</div>