<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/homepage.css')?>" rel="stylesheet">
		<title>{page_title}</title>
	</head>
<body>
	<div id="main-wrapper" class="container-fluid">
		<div id="main-header" class="media" style="margin-bottom: 15px">
			<a href="<?php echo base_url()?>" id="home-link">
				<img id="up-seal" class="pull-left media-object" src="<?php echo base_url('assets/img/up-seal.png')?>">
				<div class="media-body">
					<h3 id="title">eValuation<small> <span id="subtitle">An Online Evaluation Tool</span></small></h3>
					<h4 id="up-name"><span id="up-name">University of the Philippines Cebu</span></h4>
				</div>
			</a>
		</div>
		<div id="main-content" class="row">{body_content}</div>
	</div>

</body>

</html>