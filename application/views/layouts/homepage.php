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
			<img id="up-seal" class="pull-left media-object" src="<?php echo base_url('assets/img/up-seal.png')?>">
			<div class="media-body">
				<h1>eValuation</h1>
				<h4><span id="subtitle">An Online Evaluation Tool</span>
				<br/>
				<span id="up-name">UNIVERSITY OF THE PHILIPPINES - CEBU</span></h4>
			</div>
		</div>
		<div id="main-content" class="row">{body_content}</div>
	</div>

</body>

</html>