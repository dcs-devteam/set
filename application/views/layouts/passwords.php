<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online SET (<?php echo $this->office_model->get_by_id($this->office_id)->name?>) - Temporary Passwords</title>
<?php //$this->load->view('partials/head');?>
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/passwords.css'?>">
	</head>
	<body>
		<div id="main-wrapper" class="default container-fluid">
			<div id="main-content" class="row">{body_content}</div>
		</div>
	</body>
</html>