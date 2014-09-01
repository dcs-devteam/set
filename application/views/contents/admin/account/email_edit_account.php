<html>
<head></head>
<body>
	<div>
		<p><strong>eValuation <?php echo ucfirst($account['role'])?> Account Edition</strong></p>
		<p>The eValuation <?php echo $account['role']?> account for <?php echo $account['first_name'].' '.$account['last_name']?> has been edited.</p>
		<p>The account was changedd by <?php echo $admin['first_name'].' '.$admin['last_name'].' ('.$admin['email_address'].')'?> of the University of the Philippines Cebu's <?php echo $admin['office']?>.</p>
		<p>Please disregard this email if you are not <?php echo $account['first_name'].' '.$account['last_name']?> or contact 
			<a href="mailto:<?php echo $admin['email_address']?>?subject=eValuation%20Account%20Error&body=This%20is%20to%20inform%20you%20that%20the%20owner%20of%20the%20email%20address%20<?php echo $account['email_address']?>%20is%20not%20<?php echo $account['first_name'].' '.$account['last_name']?>.%20Please%20edit%20the%20account's%20email%20address%20to%20the%20correct%20one." target="_blank">
				<?php echo $admin['email_address']?>
			</a> to inform him/her of the mistake.
		</p>
		<br>
		<br>
		<?php if ($account['role'] === 'evaluator'):?>
			<p>As an evaluator, you will be responsible for facilitating the evaluation process.</p>
			<ol>
				<li>During the evaluation period, login to the <a href="<?php echo base_url('login')?>">eValuation website</a>.</li>
				<li>Upon successful login, you will see a list of classes to be evaluated or are currently evaluated by other evaluators.</li>
				<li>Choose a class to facilitate the evaluation by clicking on the corresponding "Start Evaluation" button.</li>
				<li>When the class evaluation was successfully started, print the generated access codes.</li>
				<li>Give each student in the class an access code and let them evaluate the teacher of the class through the <a href="<?php echo base_url()?>">eValuation website</a>.</li>
				<li>After every student has finished evaluating: in your account, find the class in the Currently Evaluated list and select the corresponding "Stop" button.</li>
			</ol>
			<ul>
				<li>You could also cancel a class evaluation if there are insufficient students available. To cancel an evaluation, click on the "Cancel" button of the currently evaluated class.</li>
				<li>Access codes can be reprinted by clicking on the "Access Codes" button.</li>
			</ul>
		<?php elseif ($account['role'] === 'staff'):?>
			<p>As a staff, you will be responsible for generating and printing the evaluation reports.</p>
			<ol>
				<li>After the evaluation period, login to the <a href="<?php echo base_url('login')?>">eValuation website</a>.</li>
				<li>Upon successful login, you will see a list of classes that are already evaluated.</li>
				<li>Click on the "Generate Report" button of the class you want to print the report of.</li>
				<li>Print or download the file for distribution.</li>
			</ol>
			<ul>
				<li>You can use the Search bar at the upper right of the list to filter the classes according to course, teacher, etc.</li>
			</ul>
		<?php endif;?>
		<br>
		<p><strong>Account Details:</strong></p>
		<p>First Name: <strong><?php echo $account['first_name']?></strong></p>
		<p>Last Name: <strong><?php echo $account['last_name']?></strong></p>
		<p>Email Address: <strong><?php echo $account['email_address']?></strong></p>
		<p>Role: <strong><?php echo ucfirst($account['role'])?></strong></p>
		<br>
		<p>Click on this <a href="<?php echo base_url()?>">link</a> to setup your new password.</p>
		<p>You can also login to the <a href="<?php echo base_url('login')?>">eValuation website</a> using the following credentials and change your password by clicking on your name at the upper right of the page and selecting "Change Password".</p>
		<p>Email Address: <strong><?php echo $account['email_address']?></strong></p>
		<p>Password: <strong><?php echo $account['password']?></strong></p>
		<br>
		<p>Thank you for your time.</p>
		--
		<p><a href="<?php echo base_url()?>">eValuation</a></p>
		<p><small><i>An online Students' Evaluation of Teachers tool for the University of the Philippines Cebu</i></small></p>
		<br>
		<p><i>This is a computer generated email.</i></p>
	</div>
</body>
</html>