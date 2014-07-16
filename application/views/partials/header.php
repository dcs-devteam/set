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
			<a class="navbar-brand" href="<?php echo base_url()?>">eValuation</a>
		</div>
		<?php if ($this->session->userdata('username')):?>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php if ($this->session->userdata('account_type') == 'a'):?>
					<ul class="nav navbar-nav">
						<li class="dropdown <?php if (($this->uri->segment(2) === 'evaluation') OR ($this->uri->uri_string() === 'admin')) echo 'active'?>">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Evaluation <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li class="<?php if (($this->uri->uri_string() === 'admin/evaluation/view')) echo 'active'?>">
									<a href="<?php echo base_url('admin/evaluation')?>">View Evaluation Periods</a>
								</li>
								<li class="<?php if (($this->uri->uri_string() === 'admin/evaluation/set') OR ($this->uri->uri_string() === 'admin')) echo 'active'?>">
									<a href="<?php echo base_url('admin/evaluation/set')?>">Set Evaluation Period</a>
								</li>
							</ul>
						</li>
						<li class="<?php if (($this->uri->segment(2) === 'reports')) echo 'active'?>"><a href="#">Reports</a></li>
						<li class="<?php if (($this->uri->segment(2) === 'classes')) echo 'active'?>"><a href="#">Classes</a></li>
						<li class="<?php if (($this->uri->segment(2) === 'students')) echo 'active'?>"><a href="#">Students</a></li>
						<li class="<?php if (($this->uri->segment(2) === 'teachers')) echo 'active'?>"><a href="#">Teachers</a></li>
						<li class="<?php if (($this->uri->segment(2) === 'accounts')) echo 'active'?>"><a href="#">Accounts</a></li>
					</ul>
				<?php endif;?>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							<?php if (!empty($this->session->userdata('first_name'))):?>
								<?php echo $this->session->userdata('last_name').', '.$this->session->userdata('first_name')?>
							<?php else:?>
								<?php echo $this->session->userdata('username')?>
							<?php endif;?>
							 <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Change Email</a></li>
							<li><a href="#">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('session/logout')?>">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		<?php endif;?>
	</div><!-- /.container-fluid -->
</nav>