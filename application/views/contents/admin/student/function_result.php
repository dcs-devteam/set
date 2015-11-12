<div id="function-result-container" class="panel
	<?php if(!is_null($success)):?>
		<?php if($success == TRUE):?>
			 panel-success
		<?php else:?>
			 panel-danger
		<?php endif;?>
	<?php else:?>
		 panel-info
	<?php endif;?>
	result-container">
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
		<a class="btn
			<?php if(!is_null($success)):?>
				<?php if($success == TRUE):?>
					 btn-success
				<?php else:?>
					 btn-danger
				<?php endif;?>
			<?php else:?>
				 btn-primary
			<?php endif;?>
		 " href="<?php echo base_url('admin/student/password')?>">View Temporary Passwords</a>			 
		<button class="btn btn-default" onClick="window.name='autoreload';history.go(-1);window.close();">Back</button>
	</div>
</div>