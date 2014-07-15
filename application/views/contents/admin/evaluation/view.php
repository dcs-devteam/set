<?php if ($active_period != FALSE):?>
	<div class="alert alert-info" role="alert">An evaluation period is active. Start Date: <?php echo $active_period->start_date?>. End Date: <?php echo $active_period->end_date?></div>
<?php else:?>
	<div class="alert alert-warning" role="alert">There is no active evaluation period. You can set an evaluation period <a href="<?php echo base_url('admin/evaluation/set')?>">here</a>.</div>
<?php endif;?>
<table class="table table-striped table-hover table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Year</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Active</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($eval_periods as $period):?>
			<tr>
				<td><?php echo $period->evaluation_period_id?></td>
				<td><?php echo $period->year?></td>
				<td><?php echo $period->start_date?></td>
				<td><?php echo $period->end_date?></td>
				<td>
					<?php if ($period->is_active == TRUE):?>
						<?php echo 'ACTIVE'?>
					<?php else:?>
						<?php echo 'INACTIVE'?>
					<?php endif;?>
				</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>