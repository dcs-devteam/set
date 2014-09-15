<html>
<head></head>
<body>
	<div>
		<p>The eValuation account for <?php echo $account['first_name'].' '.$account['last_name']?> has been edited.</p>
		<p>The account was changed by <?php echo $admin['first_name'].' '.$admin['last_name'].' ('.$admin['email_address'].')'?>, the super admin of eValuation. Please disregard this email if you are not <?php echo $account['first_name'].' '.$account['last_name']?> or contact 
			<a href="mailto:<?php echo $admin['email_address']?>?subject=eValuation%20Account%20Error&body=This%20is%20to%20inform%20you%20that%20the%20owner%20of%20the%20email%20address%20<?php echo $account['email_address']?>%20is%20not%20<?php echo $account['first_name'].'%20'.$account['last_name']?>,%20a/an%20<?php echo ucfirst($account['role'])?>%20assigned%20to%20the%20<?php echo $account['office']?>.%20Please%20edit%20the%20account's%20email%20address%20to%20the%20correct%20one." target="_blank">
				<?php echo $admin['email_address']?>
			</a> to inform him/her of the mistake.
		</p>
		<br>
		<p><strong>New Account Details:</strong></p>
		<p>Office: 
			<?php if (!empty($changes['office']) && $changes['office'] === TRUE):?>
				<strong><?php echo $account['office']?></strong>
			<?php else:?>
				<?php echo $account['office']?>
			<?php endif;?>
		</p>
		<p>First Name: 
			<?php if (!empty($changes['first_name']) && $changes['first_name'] === TRUE):?>
				<strong><?php echo $account['first_name']?></strong>
			<?php else:?>
				<?php echo $account['first_name']?>
			<?php endif;?>
		</p>
		<p>Last Name: 
			<?php if (!empty($changes['last_name']) && $changes['last_name'] === TRUE):?>
				<strong><?php echo $account['last_name']?></strong>
			<?php else:?>
				<?php echo $account['last_name']?>
			<?php endif;?>
		</p>
		<p>Email Address: 
			<?php if (!empty($changes['email_address']) && $changes['email_address'] === TRUE):?>
				<strong><?php echo $account['email_address']?></strong>
			<?php else:?>
				<?php echo $account['email_address']?>
			<?php endif;?>
		</p>
		<p>Role: <?php echo ucfirst($account['role'])?></p>
		<br>
		<p>Your password has remained the same.</p>
		<p>You can login to eValuation by clicking on this <a href="<?php echo base_url('login')?>">link</a>.</p>
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