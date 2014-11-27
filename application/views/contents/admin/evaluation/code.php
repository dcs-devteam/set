<div id="code-container">
	<h3><?php echo $class->class_name.' '.$class->section.' ('.count($codes).')'?></h3>
	<table>
		<?php for ($c_index = 0; $c_index < sizeof($codes); $c_index+=2):?>
			<tr>
				<td><?php echo $codes[$c_index]->access_code?></td>
				<?php if (!empty($codes[$c_index+1])):?>
					<td><?php echo $codes[$c_index+1]->access_code?></td>
				<?php endif;?>
			</tr>
		<?php endfor;?>
	</table>
</div>