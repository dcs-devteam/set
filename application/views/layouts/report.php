<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/report-wkhtmltopdf.css'?>">
		<!-- Bootstrap -->
		<!-- <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>"> -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
		<title>{page_title}</title>
	</head>
	<body>
		<script type="text/php">

			if ( isset($pdf) ) {

				$font = Font_Metrics::get_font("verdana", "bold");
				$pdf->page_text($pdf->get_width() - 24, $pdf->get_height() - 18, "{PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(0,0,0));

			}
		</script>
		<div id="main-wrapper" class="default container-fluid">
			<div id="main-content" class="">{body_content}</div>
		</div>
	</body>
</html>