<div id="end-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">End Class Evaluations</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to end the evaluation period?</p>
			<p>You will no longer be able to reenable the evaluations again. Students will also no longer be able to evaluate classes.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/evaluation/end', array('id' => 'end-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">End</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Cancel</button>
		</form>
	</div>
</div>