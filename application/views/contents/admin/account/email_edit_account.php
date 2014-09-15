<html>
<head></head>
<body>
	<div>
		<p>The eValuation account for <?php echo $account['first_name'].' '.$account['last_name']?> has been edited.</p>
		<p>The account was changed by <?php echo $admin['first_name'].' '.$admin['last_name'].' ('.$admin['email_address'].')'?> of the University of the Philippines Cebu's <?php echo $admin['office']?>. Please disregard this email if you are not <?php echo $account['first_name'].' '.$account['last_name']?> or contact 
			<a href="mailto:<?php echo $admin['email_address']?>?subject=eValuation%20Account%20Error&body=This%20is%20to%20inform%20you%20that%20the%20owner%20of%20the%20email%20address%20<?php echo $account['email_address']?>%20is%20not%20<?php echo $account['first_name'].'%20'.$account['last_name']?>,%20a/an%20<?php echo ucfirst($account['role'])?>%20assigned%20to%20the%20<?php echo $admin['office']?>.%20Please%20edit%20the%20account's%20email%20address%20to%20the%20correct%20one." target="_blank">
				<?php echo $admin['email_address']?>
			</a> to inform him/her of the mistake.
		</p>
		<br>
		<?php if (!empty($changes['role']) && $changes['role'] === TRUE):?>
			<p><strong>Your eValuation role has changed.</strong> Refer below for information about your new role.</p>
			<?php if ($account['role'] === 'admin'):?>
				<p>As an administrator, you will be responsible for managing the courses, classes, teachers, and other eValuation accounts belonging to the <?php echo $admin['office']?>.</p>
				<ol>
					<li>To view, add, edit, and delete the courses, classes, teachers, and eValuation accounts, login first to the <a href="<?php echo base_url('login')?>">eValuation website</a>.</li>
					<li>To view, click on either "Classes", "Teachers", "Courses", or "Accounts". Select "View ..." to view all class, teacher, course, or account entries.</li>
					<li>In the View page, you can edit or delete a specific entry by clicking on the "Edit" or "Delete" button to the right of the respective entry.</li>
					<li>To add a class, teacher, course, or account, select "Add ..." under the Classes, Teachers, Courses, or Accounts dropdown menu. Fill up the details in the form, and click on Add ... button.</li>
				</ol>
				<ul>
					<li>As an administrator, you are also an evaluator or staff. Refer below for the roles' information.</li>
				</ul>
				<br>
			<?php endif;?>
			<?php if ($account['role'] === 'evaluator' OR $account['role'] === 'admin'):?>
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
				<br>
			<?php endif;?>
			<?php if ($account['role'] === 'staff' OR $account['role'] === 'admin'):?>
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
		<?php endif;?>
		<br>
		<p><strong>New Account Details:</strong></p>
		<p>Office: <?php echo $admin['office']?></p>
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
		<p>Role: 
			<?php if (!empty($changes['role']) && $changes['role'] === TRUE):?>
				<strong><?php echo ucfirst($account['role'])?></strong>
			<?php else:?>
				<?php echo ucfirst($account['role'])?>
			<?php endif;?>
		</p>
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