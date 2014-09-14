<div id="delete-confirm-container" class="panel panel-danger confirm-container">
	<div class="panel-heading">
		<h3 class="panel-title">Delete Year and Semester</h3>
	</div>
	<div class="panel-body">
		<div id="message-content">
			<p>Are you sure you want to delete year and semester entry <strong><?php echo format_semester($year_semester->semester).' Semester/A.Y. '.format_year($year_semester->year)?></strong>?</p>
			</div>
	</div>
	<div class="panel-footer">
		<?php echo form_open('superadmin/yearsem/delete/'.$year_semester->year.'/'.$year_semester->semester, array('id' => 'delete-confirm-form'));?>
			<input type="hidden" value="TRUE" name="confirm"/>
			<button class="btn btn-danger" type="submit">Delete Year and Semester</button>
			<button class="btn btn-default" type="button" onClick="history.go(-1);window.close();">Back</button>
		</form>
	</div>
</div>