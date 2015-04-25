		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
		<!-- <link rel="stylesheet" href="<?php //echo base_url().'assets/css/bootstrap-theme.css'?>"> -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/layouts.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>">
<?php if (($this->uri->segment(1) === 'admin')):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css')?>">
<?php elseif (($this->uri->segment(1) === 'account')):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/account.css')?>">
<?php elseif (($this->uri->segment(1) === 'superadmin')):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/superadmin.css')?>">
<?php elseif (($this->uri->segment(1) === 'student')):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/student.css')?>">
	<?php if (($this->uri->segment(2) === 'class') && ($this->uri->segment(3) === 'evaluate')):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/evaluation.css')?>">
	<?php endif;?>
<?php endif;?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

		<!-- Scripts -->
		<script src="<?php echo base_url('assets/js/app.js')?>"></script>

<?php if (($this->uri->segment(1) === 'admin') OR ($this->uri->segment(1) === 'evaluator') OR ($this->uri->segment(1) === 'staff') OR ($this->uri->segment(1) === 'superadmin')):?>
		<!-- DataTables -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/DataTables-1.10.2/media/css/jquery.dataTables.css')?>">
		<script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/plugins/DataTables-1.10.2/media/js/jquery.dataTables.js')?>"></script>
<?php endif;?>