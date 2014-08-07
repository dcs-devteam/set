<div id="code-container">
	<h3><?php echo $class->class_name.' '.$class->section.' ('.$class->number_of_students.')'?></h3>
	<table>
		<?php foreach ($codes as $code):?>
			<tr>
				<td><?php echo $code->access_code?></td>
				<td></td>
			</tr>
		<?php endforeach;?>
	</table>
</div>