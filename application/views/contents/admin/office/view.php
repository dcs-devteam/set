<div id="office-details-container" class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Office Details</h3>
	</div>
	<div class="panel-body">
		<label>Office Name</label>
		<span class="value"><?php echo $office->name?></span>
		<br>
		<label>Chair</label>
		<span class="value"><?php echo $chair->first_name." ".$chair->last_name?></span>
	</div>
	<div class="panel-footer">
		<a class="btn btn-info" href="<?php echo base_url('admin/office/edit/'.$office->office_id)?>">Edit Office Details</a>			 
		<button class="btn btn-default" onClick="window.name='autoreload';history.go(-1);window.close();">Back</button>
	</div>
</div>