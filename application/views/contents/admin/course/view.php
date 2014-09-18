<h2>Courses (<?php echo $this->office_model->get_by_id($this->office_id)->name?>)</h2>
<?php if(!empty($courses)):?>
	<table class="table table-striped table-hover table-bordered course-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Course Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($courses as $course):?>
				<tr>
					<td><?php echo $course->course_id?></td>
					<td><?php echo $course->course_name?></td>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/course/edit/'.$course->course_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/course/delete/'.$course->course_id)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No courses found. Add a course by clicking on this <a href="<?php echo base_url('admin/course/add')?>">link.</a></div>
<?php endif;?>