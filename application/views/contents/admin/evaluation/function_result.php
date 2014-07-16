<div id="function-result-container" class="panel panel-info user-container">
	<div class="panel-heading">
		<h3 class="panel-title">Function Result</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p><?php echo $message;?></p>
			<p class="text-error"><?php echo $error;?></p>
		</div>
	</div>
	<div class="panel-footer">
		<a class="btn btn-primary" href="<?php echo base_url('admin/evaluation/view')?>">View Evaluation Periods</a>
		<button class="btn btn-default" onClick="window.name='autoreload';history.go(-1);">Back</button>
	</div>
</div>