<?php echo form_open_multipart('admin/class/edit/'.$class->class_id,array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-warning form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Class</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="year" class="col-sm-4 control-label">Academic Year</label>
				<div class="col-sm-8">
					<div class="tooltip-wrapper" data-toggle="tooltip" title="Contact the eValuation Super Admin if the given year is wrong."></div>
					<input class="form-control" readonly="readonly" value="<?php echo format_year($class->year)?>" class="form-control" id="year" name="year" type="text">
					<?php echo form_error('year','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="semester" class="col-sm-4 control-label">Semester</label>
				<div class="col-sm-8">
					<div class="tooltip-wrapper" data-toggle="tooltip" title="Contact the eValuation Super Admin if the given semester is wrong."></div>
					<input class="form-control" readonly="readonly" value="<?php echo format_semester($class->semester)?>" class="form-control" id="semester" name="semester" type="text">
					<?php echo form_error('semester','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="course" class="col-sm-4 control-label">Course</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('course', $class->class_name); ?>" id="course" name="course" type="text" class="form-control" placeholder="Course Name" list="courses">
					<datalist id="courses">
						<?php foreach ($courses as $course):?>
							<option value="<?php echo $course->course_name?>">
						<?php endforeach;?>
					</datalist>
					<?php echo form_error('course','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="section" class="col-sm-4 control-label">Section</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('section', $class->section); ?>" id="section" name="section" type="text" class="form-control" placeholder="Section">
					<?php echo form_error('section','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="schedule" class="col-sm-4 control-label">Schedule</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('schedule', $class->schedule); ?>" id="schedule" name="schedule" type="text" class="form-control" placeholder="Schedule (ex. MTh 7:30-9:00 AM)">
					<?php echo form_error('schedule','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="teacher" class="col-sm-4 control-label">Teacher</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('teacher', $current_teacher->last_name.', '.$current_teacher->first_name); ?>" id="teacher" name="teacher" type="text" class="form-control" placeholder="Teacher (Last Name, First Name)" list="teachers">
					<datalist id="teachers">
						<?php foreach ($teachers as $teacher):?>
							<option value="<?php echo $teacher->last_name.', '.$teacher->first_name?>">
						<?php endforeach;?>
					</datalist>
					<?php echo form_error('teacher','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="class-roster" class="col-sm-4 control-label">Class Roster</label>
				<div class="col-sm-8">
					<input type="file" id="class-roster" name="class-roster">
					<?php echo form_error('class-roster','<p class="text-danger">','</p>');?>
					<?php echo $this->upload->display_errors('<p class="text-danger>', '</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-warning">Edit Class</button>
					<a href="<?php echo base_url('admin/class/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>