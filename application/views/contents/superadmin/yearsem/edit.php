<?php echo form_open('superadmin/yearsem/edit/'.$year_semester->year.'/'.$year_semester->semester,array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-warning form-container">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Year and Semester</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="year" class="col-sm-4 control-label">Academic Year</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('year', format_year($year_semester->year)); ?>" id="year" name="year" type="text" class="form-control" placeholder="Academic Year (YYYY-YYYY)" list="years">
					<datalist id="years">
						<?php foreach ($years as $year):?>
							<option value="<?php echo $year?>">
						<?php endforeach;?>
					</datalist>
					<?php echo form_error('year','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="semester" class="col-sm-4 control-label">Semester</label>
				<div class="col-sm-8">
					<select name="semester" id="semester" class="form-control">
						<?php foreach ($semesters as $key => $semester):?>
							<option value="<?php echo $key?>" <?php echo set_select('semester', $key, ($year_semester->semester == $key))?> ><?php echo $semester?></option>
						<?php endforeach;?>
					</select>
					<?php echo form_error('semester','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<label for="start_date" class="col-sm-4 control-label">Start Date</label>
				<div class="col-sm-8">
					<input value="<?php echo set_value('start_date',$year_semester->start_date); ?>" id="start_date" name="start_date" type="date" class="form-control" placeholder="Start Date (YYYY-MM-DD)">
					<?php echo form_error('start_date','<p class="text-danger">','</p>');?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-warning">Edit Year and Semester</button>
					<a href="<?php echo base_url('superadmin/yearsem/view')?>" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>