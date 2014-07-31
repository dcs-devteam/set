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
			<a class="navbar-brand" href="<?php echo base_url()?>">
				eValuation
				<?php if ($this->session->userdata('email_address')):?>
					<small>(<?php echo $this->office_model->get($this->office_id)->name?>)</small>
				<?php endif;?>
			</a>
		</div>
		<?php if ($this->session->userdata('email_address')):?>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php if ($this->session->userdata('role') == 'admin'):?>
					<ul class="nav navbar-nav">
						<li class="<?php if (($this->uri->segment(2) === 'evaluation') OR ($this->uri->uri_string() === 'admin')) echo 'active'?>">
							<a href="<?php echo base_url('admin/evaluation')?>">Evaluation</a>
						</li>
						<li class="<?php if (($this->uri->segment(2) === 'reports')) echo 'active'?>"><a href="#">Reports</a></li>
						<li class="<?php if (($this->uri->segment(2) === 'classes')) echo 'active'?>"><a href="#">Classes</a></li>
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