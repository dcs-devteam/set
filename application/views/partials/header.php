<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">eValuation</a>
		</div>
		<?php if ($this->session->userdata('username')):?>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php if ($this->session->userdata('account_type') == 'a'):?>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Evaluation</a></li>
						<li><a href="#">Reports</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="#">Students</a></li>
						<li><a href="#">Teachers</a></li>
						<li><a href="#">Accounts</a></li>
					</ul>
				<?php endif;?>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('last_name').', '.$this->session->userdata('first_name')?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Change Email</a></li>
							<li><a href="#">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="session/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		<?php endif;?>
	</div><!-- /.container-fluid -->
</nav>