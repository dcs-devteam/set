<div id="submit-result-container" class="panel
	<?php if(!empty($success)):?>
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
		<h3 class="panel-title">Evaluation Submit Result</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p><?php echo $message;?></p>
			<p class="text-error"><?php echo $error;?></p>
			<?php if(!empty($success)):?>
				<?php if($success == TRUE):?>
					<p>Thank you for your participation.</p>
				<?php endif;?>
			<?php endif;?>
		</div>
	</div>
	<div class="panel-footer">
		<a class="btn btn-success" href="<?php echo base_url()?>">Return to Home</a>
	</div>
</div>