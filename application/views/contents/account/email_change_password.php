<html>
<head></head>
<body>
	<div>
		<p>Your eValuation account password has been successfully changed.</p>
		<p>If you were the one who changed the password, please disregard this email.</p>
		<p>If you were NOT the one who changed the password, click on this <a href="<?php echo base_url('account/reset_password')?>">link</a> to reset your password.</p>
		<br>
		<p><strong>Account Details:</strong></p>
		<p>First Name: <strong><?php echo $account['first_name']?></strong></p>
		<p>Last Name: <strong><?php echo $account['last_name']?></strong></p>
		<p>Email Address: <strong><?php echo $account['email_address']?></strong></p>
		<p>Role: <strong><?php echo ucfirst($account['role'])?></strong></p>
		<br>
		<p>Thank you for your time.</p>
		--
		<p><a href="<?php echo base_url()?>">eValuation</a></p>
		<p><small><i>An online Students' Evaluation of Teachers tool for the University of the Philippines Cebu</i></small></p>
		<br>
		<p><i>This is a computer-generated email.</i></p>
	</div>
</body>
</html>