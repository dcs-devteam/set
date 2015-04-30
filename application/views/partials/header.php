				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo base_url()?>">
								Online SET
<?php if ($this->session->userdata('office_id')):?>
									<small>(<?php echo $this->office_model->get_by_id($this->office_id)->name?>)</small>
<?php endif;?>
							</a>
						</div>
<?php if ($this->session->userdata('first_name')):?>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-collapse">
<?php if ($this->session->userdata('role') == 'admin'):?>
									<ul class="nav navbar-nav">
										<!-- <li class="<?php if (($this->uri->segment(2) === 'report')) echo 'active'?>"><a href="<?php echo base_url('admin/report')?>">Evaluation Reports</a></li> -->
										<li class="dropdown <?php if (($this->uri->segment(2) === 'class')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Classes <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'admin/class') OR ($this->uri->uri_string() === 'admin/class/view')) echo 'active'?>"><a href="<?php echo base_url('admin/class/view')?>">View Classes</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'admin/class/add')) echo 'active'?>"><a href="<?php echo base_url('admin/class/add')?>">Add Class</a></li>
											</ul>
										</li>
										<li class="dropdown <?php if (($this->uri->segment(2) === 'teacher')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Teachers <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'admin/teacher') OR ($this->uri->uri_string() === 'admin/teacher/view')) echo 'active'?>"><a href="<?php echo base_url('admin/teacher/view')?>">View Teachers</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'admin/teacher/add')) echo 'active'?>"><a href="<?php echo base_url('admin/teacher/add')?>">Add Teacher</a></li>
											</ul>
										</li>
										<li class="dropdown <?php if (($this->uri->segment(2) === 'course')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'admin/course') OR ($this->uri->uri_string() === 'admin/course/view')) echo 'active'?>"><a href="<?php echo base_url('admin/course/view')?>">View Courses</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'admin/course/add')) echo 'active'?>"><a href="<?php echo base_url('admin/course/add')?>">Add Course</a></li>
											</ul>
										</li>
										<li class="dropdown <?php if (($this->uri->segment(2) === 'student')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'admin/student') OR ($this->uri->uri_string() === 'admin/student/view')) echo 'active'?>"><a href="<?php echo base_url('admin/student/view')?>">View Students</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'admin/student/password')) echo 'active'?>"><a href="<?php echo base_url('admin/student/password')?>">Print Temporary Passwords</a></li>
											</ul>
										</li>
										<li class="<?php if (($this->uri->uri_string() === 'admin/evaluation') OR ($this->uri->uri_string() === 'admin/evaluation/view')) echo 'active'?>"><a href="<?php echo base_url('admin/evaluation/view')?>"><strong>Evaluation Period</strong></a></li>
										<!-- <li class="dropdown <?php if (($this->uri->segment(2) === 'account')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'admin/account') OR ($this->uri->uri_string() === 'admin/account/view')) echo 'active'?>"><a href="<?php echo base_url('admin/account/view')?>">View Accounts</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'admin/account/add')) echo 'active'?>"><a href="<?php echo base_url('admin/account/add')?>">Add Account</a></li>
											</ul>
										</li> -->
									</ul>
<?php elseif ($this->session->userdata('role') == 'superadmin'):?>
									<ul class="nav navbar-nav">
										<li class="dropdown <?php if (($this->uri->segment(2) === 'yearsem') OR ($this->uri->uri_string() === 'superadmin')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Year and Semester <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'superadmin/yearsem') OR ($this->uri->uri_string() === 'superadmin/yearsem/view')) echo 'active'?>"><a href="<?php echo base_url('superadmin/yearsem/view')?>">View Year and Semesters</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'superadmin/yearsem/add')) echo 'active'?>"><a href="<?php echo base_url('superadmin/yearsem/add')?>">Add Year and Semester</a></li>
											</ul>
										</li>
										<li class="dropdown <?php if (($this->uri->segment(2) === 'office')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Offices <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'superadmin/office') OR ($this->uri->uri_string() === 'superadmin/office/view')) echo 'active'?>"><a href="<?php echo base_url('superadmin/office/view')?>">View Offices</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'superadmin/office/add')) echo 'active'?>"><a href="<?php echo base_url('superadmin/office/add')?>">Add Office</a></li>
											</ul>
										</li>
										<li class="dropdown <?php if (($this->uri->segment(2) === 'admin')) echo 'active'?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admins <span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li class="<?php if (($this->uri->uri_string() === 'superadmin/admin') OR ($this->uri->uri_string() === 'superadmin/admin/view')) echo 'active'?>"><a href="<?php echo base_url('superadmin/admin/view')?>">View Admins</a></li>
												<li class="<?php if (($this->uri->uri_string() === 'superadmin/admin/add')) echo 'active'?>"><a href="<?php echo base_url('superadmin/admin/add')?>">Add Admin</a></li>
											</ul>
										</li>
									</ul>
<?php endif;?>
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<a href="" class="dropdown-toggle" data-toggle="dropdown">
<?php if ($this->session->userdata('first_name')):?>
												<?php echo $this->session->userdata('last_name').', '.$this->session->userdata('first_name')?>
<?php else:?>
												<?php echo $this->session->userdata('username')?>
<?php endif;?>
											 <span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="<?php echo base_url('account/password/')?>">Change Password</a></li>
											<li class="divider"></li>
											<li><a href="<?php echo base_url('session/logout')?>">Logout</a></li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
<?php endif;?>
					</div><!-- /.container-fluid -->
				</nav>
