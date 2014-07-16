<div id="stop-confirm-container" class="panel panel-warning user-container">
	<div class="panel-heading">
		<h3 class="panel-title">Stop Evaluation Period</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to stop this evaluation period?</p>
			<pre id="eval-period-block">
      Year: <?php echo $year?><br>
  Semester: <?php echo $semester?><br>
Start Date: <?php echo format_date($start_date)?><br>
  End Date: <?php echo format_date($end_date)?><br>
			</pre>
			<p>Stopping an evaluation period when the end date has not yet passed will prevent future evaluation periods from using the date range.</p>
		</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/evaluation/stop/'.$id, array('id' => 'stop-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-warning" type="submit">Stop</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Cancel</button>
		</form>
	</div>
</div>