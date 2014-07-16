<?php if ($active_period != FALSE):?>
	<div class="alert alert-info" role="alert">An evaluation period is active. Start Date: <?php echo format_date($active_period->start_date)?>. End Date: <?php echo format_date($active_period->end_date)?></div>
<?php else:?>
	<div class="alert alert-warning" role="alert">There is no active evaluation period. You can set an evaluation period <a href="<?php echo base_url('admin/evaluation/set')?>">here</a>.</div>
<?php endif;?>
<table class="table table-striped table-hover table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Year</th>
			<th>Semester</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Active</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($eval_periods as $period):?>
			<tr>
				<td><?php echo $period->evaluation_period_id?></td>
				<td><?php echo $period->year?></td>
				<td><?php echo $period->semester?></td>
				<td><?php echo format_date($period->start_date)?></td>
				<td><?php echo format_date($period->end_date)?></td>
				<td>
					<?php if ($period->is_active == TRUE):?>
						<span class="text-info">ACTIVE</span>
					<?php else:?>
						<?php if ($period->is_done == TRUE):?>
						<span class="text-success">DONE</span>
						<?php else:?>
						<span class="text-warning">INACTIVE</span>
						<?php endif;?>
					<?php endif;?>
				</td>
				<td>
					<?php if ($period->is_active == TRUE):?>
						<a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/evaluation/stop/'.$period->evaluation_period_id)?>">Stop</a>
					<?php endif;?>
					<?php if (human_to_unix($period->start_date.' 00:00:00') <= now() && now() <= human_to_unix($period->end_date.' 23:59:59') && ($period->is_active == FALSE)):?>
						<a class="btn btn-success btn-xs" href="<?php echo base_url('admin/evaluation/start/'.$period->evaluation_period_id)?>">Start</a>
					<?php endif;?>
						<a class="btn btn-primary btn-xs" href="<?php echo base_url('admin/evaluation/edit/'.$period->evaluation_period_id)?>">Edit</a>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/evaluation/delete/'.$period->evaluation_period_id)?>">Delete</a>
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>