<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/report.css'?>">
		<title>{page_title}</title>
	</head>
	<body>
		{body_content}
		<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.dotdotdot.min.js')?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".ellipsis").dotdotdot({
					/*	The text to add as ellipsis. */
					ellipsis	: ' ... ',
			 
					/*	How to cut off the text/html: 'word'/'letter'/'children' */
					wrap		: 'word',
			 
					/*	Wrap-option fallback to 'letter' for long words */
					fallbackToLetter: true,
			 
					/*	jQuery-selector for the element to keep and put after the ellipsis. */
					after		: null,
			 
					/*	Whether to update the ellipsis: true/'window' */
					watch		: false,
				
					/*	Optionally set a max-height, if null, the height will be measured. */
					height		: 36,
			 
					/*	Deviation for the height-option. */
					tolerance	: 0,
			 
					/*	Callback function that is fired after the ellipsis is added,
						receives two parameters: isTruncated(boolean), orgContent(string). */
					callback	: function( isTruncated, orgContent ) {},
			 
					lastCharacter	: {
			 
						/*	Remove these characters from the end of the truncated text. */
						remove		: [ ' ', ',', ';', '.', '!', '?' ],
			 
						/*	Don't add an ellipsis if this array contains 
							the last character of the truncated text. */
						noEllipsis	: []
					}
				});
			});
		</script>
	</body>
</html>