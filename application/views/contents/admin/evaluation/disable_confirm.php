<div id="disable-confirm-container" class="panel panel-warning confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Disable Class Evaluations</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to disable the evaluation of classes?</p>
			<p>Students will no longer be able to evaluate classes.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/evaluation/disable', array('id' => 'disable-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-warning" type="submit">Disable</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Cancel</button>
		</form>
	</div>
</div>