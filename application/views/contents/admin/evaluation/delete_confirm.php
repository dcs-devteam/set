<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Evaluation Period</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete this evaluation period?</p>
			<pre id="eval-period-block">
      Year: <?php echo $year?><br>
  Semester: <?php echo $semester?><br>
Start Date: <?php echo format_date($start_date)?><br>
  End Date: <?php echo format_date($end_date)?>
			</pre>
			<p>Deleting an evaluation period will also delete all evaluation forms linked to it.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/evaluation/delete/'.$id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Cancel</button>
		</form>
	</div>
</div>