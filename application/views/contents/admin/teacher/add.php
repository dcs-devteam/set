<?php echo form_open('admin/teacher/add',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-primary form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Add Teacher</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="first_name" class="col-sm-4 control-label">First Name</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('first_name'); ?>" id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name">
					<?php echo form_error('first_name','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="last_name" class="col-sm-4 control-label">Last Name</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('last_name'); ?>" id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name">
					<?php echo form_error('last_name','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Add Teacher</button>
					<a href="<?php echo base_url('admin/teacher/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>