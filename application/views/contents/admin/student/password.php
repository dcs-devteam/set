<div class="no-print buttons-container">
	<button type="button" class="btn btn-primary" onclick="window.print();">Print</button>
	<button class="btn btn-default" type="button" onclick="history.go(-1);window.close();">Back</button>
</div>
<?php if(!empty($passwords)):?>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>SAIS ID</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($passwords as $row):?>
				<tr>
					<td><?php echo $row->last_name.', '.$row->first_name?></td>
					<td><?php echo $row->sais_id?></td>
					<td><?php echo $row->password?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php else:?>
	<div class="alert alert-warning" role="alert">No student passwords found.</div>
<?php endif;?>