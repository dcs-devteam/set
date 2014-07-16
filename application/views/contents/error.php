<div id="error-container" class="panel panel-danger">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $error_title?></h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p><?php echo $error_message?></p>
		</div>
	</div>
	<div class="panel-footer">
		<a class="btn btn-default" onClick="history.go(-1);window.close();">Back</a>
	</div>
</div>