<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Account</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete the account of <?php echo $account->last_name.', '.$account->first_name?>?</p>
			</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('admin/account/delete/'.$account->user_id, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete Account</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>