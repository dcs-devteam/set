<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
<!-- <link rel="stylesheet" href="<?php //echo base_url().'assets/css/bootstrap-theme.css'?>"> -->
<!-- Stylesheets -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/layouts.css'?>">
<?php if (($this->uri->segment(1) === 'admin')):?>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/admin.css'?>">
<?php endif;?>
<?php if (($this->uri->segment(1) === 'evaluation')):?>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/evaluation.css'?>">
<?php endif;?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

<!-- Scripts -->
<script src="<?php echo base_url().'assets/js/app.js'?>"></script>