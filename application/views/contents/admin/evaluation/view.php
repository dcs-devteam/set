<h2>
	Evaluation Period (<?php $year_sem=$this->year_semester_model->get_current(); echo format_semester($year_sem->semester).' Semester/A.Y. '.format_year($year_sem->year)?>)
</h2>
<hr>
<div class="evaluation-btn-container">
 	<?php if ($this->office_model->evaluation_done($this->office_id)):?>
	 		<a disabled href="<?php echo base_url('admin/evaluation/enable')?>" class="evaluation-btn btn btn-primary btn-lg">Enable Evaluation</a>
	 		<a disabled href="<?php echo base_url('admin/evaluation/disable')?>" class="evaluation-btn btn btn-warning btn-lg">Disable Evaluation</a>
 		<a disabled href="<?php echo base_url('admin/evaluation/end')?>" class="evaluation-btn btn btn-success btn-lg">Evaluation Completed</a>
 	<?php else:?>
 		<?php if ($this->office_model->evaluation_active($this->office_id)):?>
			<a disabled href="<?php echo base_url('admin/evaluation/enable')?>" class="evaluation-btn btn btn-primary btn-lg">Evaluation Enabled</a>
	 		<a href="<?php echo base_url('admin/evaluation/disable')?>" class="evaluation-btn btn btn-warning btn-lg">Disable Evaluation</a>
	 	<?php else:?>
	 		<a href="<?php echo base_url('admin/evaluation/enable')?>" class="evaluation-btn btn btn-primary btn-lg">Enable Evaluation</a>
	 		<a disabled href="<?php echo base_url('admin/evaluation/disable')?>" class="evaluation-btn btn btn-warning btn-lg">Evaluation Disabled</a>
	 	<?php endif;?>
 		<a href="<?php echo base_url('admin/evaluation/end')?>" class="evaluation-btn btn btn-danger btn-lg">End Evaluation</a>
 	<?php endif;?>
</div>