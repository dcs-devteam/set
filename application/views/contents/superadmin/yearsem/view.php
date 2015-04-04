<?php if (!empty($current)):?>
	<div class="alert alert-info yearsem-alert" role="alert">
		<p>The current year and semester is: <strong><?php echo format_semester($current->semester).' Semester/A.Y. '.format_year($current->year)?></strong>.</p>
	</div>
<?php endif;?>
<h2>Year and Semesters</h2>
<?php if(!empty($year_semesters)):?>
	<table class="table table-striped table-hover table-bordered yearsem-table data-table">
		<thead>
			<tr>
				<th>Academic Year</th>
				<th>Semester</th>
				<th>Start Date</th>
				<th>Current</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($year_semesters as $year_semester):?>
				<tr>
					<td><?php echo format_year($year_semester->year)?></td>
					<td><?php echo format_semester($year_semester->semester)?></td>
					<td><?php echo format_date($year_semester->start_date)?></td>
					<td>
						<?php if ($year_semester->is_current):?>
							<span class="label label-success">Current</span>
						<?php endif;?>
					</td>
					<td>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('superadmin/yearsem/edit/'.$year_semester->year.'/'.$year_semester->semester)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('superadmin/yearsem/delete/'.$year_semester->year.'/'.$year_semester->semester)?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No year and semester was found. Click <a href="<?php echo base_url('superadmin/yearsem/add')?>">here</a> to add a year and semester.</div>
<?php endif;?>