<?php echo form_open('admin/course/add',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-primary form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Add Course</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="course_name" class="col-sm-4 control-label">Course Name</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('course_name'); ?>" id="course_name" name="course_name" type="text" class="form-control" placeholder="Course Name">
					<?php echo form_error('course_name','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Add Course</button>
					<a href="<?php echo base_url('admin/course/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>