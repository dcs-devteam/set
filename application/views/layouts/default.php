<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{page_title}</title>
<?php $this->load->view('partials/head');?>
	</head>
	<body>
		<div id="main-wrapper" class="default container-fluid">
			<div id="main-header" class="hidden-print">
<?php $this->load->view('partials/header');?>
			</div>
			<div id="main-content" class="row">

{body_content}

			</div>
		</div>
	</body>
</html>