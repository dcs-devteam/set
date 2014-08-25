<?php echo form_open('admin/course/edit/'.$course->course_id,array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-warning form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Course</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="course_name" class="col-sm-4 control-label">Course Name</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('course_name', $course->course_name); ?>" id="course_name" name="course_name" type="text" class="form-control" placeholder="Course Name">
					<?php echo form_error('course_name','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<?php echo form_error('unique_new_course','<p class="text-danger">','</p>');?>
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-warning">Edit Course</button>
					<a href="<?php echo base_url('admin/course/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>