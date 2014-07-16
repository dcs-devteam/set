<?php if ($this->evaluation_period_model->get_active() != FALSE):?>
	<div class="alert alert-info" role="alert">An evaluation period is active. You can view the active evaluation period <a href="<?php echo base_url('admin/evaluation/view')?>">here</a>.</div>
<?php else:?>
	<div class="alert alert-warning" role="alert">There is no active evaluation period. You can fill up the form below to set up one.</div>
<?php endif;?>
<?php echo form_open('admin/evaluation/edit/'.$period->evaluation_period_id,array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-default" id="edit-eval-period-form">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Evaluation Period</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="year" class="col-sm-4 control-label">Academic Year</label>
				<div class="col-sm-8">
					<?php
						$selectname = 'year';
						$years = array(
								'2014-2015' => '2014-2015',
								'2015-2016' => '2015-2016',
								'2016-2017' => '2016-2017',
								'2017-2018' => '2017-2018',
								'2018-2019' => '2018-2019'
							);
						echo form_dropdown($selectname, $years, set_value($selectname,$period->year), 'class="form-control" id="year"');
					?>
					<?php echo form_error('year','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="semester" class="col-sm-4 control-label">Semester</label>
				<div class="col-sm-8">
					<?php
						$selectname = 'semester';
						$semesters = array(
								'1st' => '1st',
								'2nd' => '2nd',
								'Summer' => 'Summer'
							);
						echo form_dropdown($selectname, $semesters, set_value($selectname,$period->semester), 'class="form-control" id="semester"');
					?>
					<?php echo form_error('semester','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="start_date" class="col-sm-4 control-label">Start Date</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('start_date', $period->start_date); ?>" id="start_date" name="start_date" type="date" class="form-control" placeholder="mm/dd/yyyy">
					<?php echo form_error('start_date','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="end_date" class="col-sm-4 control-label">End Date</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('end_date', $period->end_date); ?>" id="end_date" name="end_date" type="date" class="form-control" placeholder="mm/dd/yyyy">
					<?php echo form_error('end_date','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox col-sm-offset-4 col-sm-8">
					<label>
						<input type="checkbox" name="is_active" value="1" <?php $is_active = FALSE; if($period->is_active) $is_active = TRUE; echo set_checkbox('is_active', '1', $is_active); ?> > Active after creation
					</label>
					<?php echo form_error('is_active','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
					<?php echo form_error('unique_year_and_sem','<p class="text-danger">','</p>');?>
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Edit Evaluation Period</button>
					<a href="<?php echo base_url('admin/evaluation/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>