<h2>
	Evaluation Reports (<?php $year_sem=$this->year_semester_model->get_current(); echo format_semester($year_sem->semester).' Semester/Trimester | A.Y. '.format_year($year_sem->year)?>)
</h2>
<?php if(!empty($teachers)):?>
	<table class="table table-striped table-hover table-bordered teacher-table data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($teachers as $teacher):?>
				<tr>
					<td><?php echo $teacher->teacher_id?></td>
					<td><?php echo $teacher->last_name?></td>
					<td><?php echo $teacher->first_name?></td>
					<td>
						<a class="btn btn-success btn-xs" target="_blank" href="<?php echo base_url('admin/report/generate/'.$teacher->teacher_id)?>">Generate Report (With Forms)</a>
						<a class="btn btn-default btn-xs" target="_blank" href="<?php echo base_url('admin/report/generate/'.$teacher->teacher_id).'/0'?>">Generate Report (No Forms)</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No teachers for current semester/trimester found.</div>
<?php endif;?>