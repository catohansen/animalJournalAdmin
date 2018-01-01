<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()  ?>assets/images/favicon.ico">

    <title>AnimalJournal Admin - Dashboard  Contact </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/css/master_style.css">

	<!-- Aries_admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/css/skins/_all-skins.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="<?php echo base_url()  ?>assets/images/aries-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="<?php echo base_url()  ?>assets/images/aries-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="<?php echo base_url()  ?>assets/images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="<?php echo base_url()  ?>assets/images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 5 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()  ?>assets/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()  ?>assets/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()  ?>assets/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()  ?>assets/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url()  ?>assets/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 7 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nunc fringilla lorem 
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-message"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 6 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
		  <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()  ?>assets/images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()  ?>assets/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  Juliya Brus
                  <small class="mb-5">jb@gmail.com</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="<?php echo base_url()  ?>assets/images/user5-128x128.jpg" alt="user">
            <span>Cato Hansen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="javascript:void()">My Profile </a></li>
			<li><a href="javascript:void()">My Balance</a></li>
			<li><a href="javascript:void()">Inbox</a></li>
			<li><a href="javascript:void()">Account Setting</a></li>
			<li><a href="javascript:void()">Logout</a></li>
          </ul>
        </li>
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li>
          <a href="../../index.html">
            <i class="fa fa-home"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-plus"></i> <span>Start Session</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-address-book-o"></i> <span>Contacts</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-paw"></i> <span>Animals</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-calendar"></i> <span>Calendar</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-envelope"></i> <span>Send E-mail</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-money"></i> <span>Accounting</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-th"></i>
                  <span>Reports</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="app-chat.html">Payements</a></li>
                  <li><a href="app-contact.html">Invoices</a></li>
                  <li><a href="app-ticket.html">Sales History</a></li>
                  <li class="active"><a href="calendar.html">Sessions</a></li>
              </ul>
          </li>
          <li>
              <a href="../../index.html">
                  <i class="fa fa-cogs"></i> <span>Settings</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
          </li>
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-history"></i>
                  <span>Recent</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="app-chat.html">Contact</a></li>
                  <li><a href="app-contact.html">Session</a></li>
                  <li><a href="app-ticket.html">Animal</a></li>
              </ul>
          </li>
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-question-circle"></i>
                  <span>Help</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="app-chat.html">Our Video channel</a></li>
                  <li><a href="app-contact.html">Our App on Apple Itunes</a></li>
                  <li><a href="app-ticket.html">Our App on Google Play</a></li>
                  <li class="active"><a href="calendar.html">Contact support</a></li>
              </ul>
          </li>
        
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Examples</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!--<div class="col-lg-3 col-md-12">
			<div class="box">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						<li class="box-label"><a href="javascript:void(0)">All Contacts <span>123</span></a></li>
						<li class="divider"></li>
						<li><a href="javascript:void(0)">Work <span>103</span></a></li>
						<li><a href="javascript:void(0)">Family <span>19</span></a></li>
						<li><a href="javascript:void(0)">Friends <span>623</span></a></li>
						<li><a href="javascript:void(0)">Private <span>53</span></a></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-info text-white mt-10">+ Create New Label</a></li>
						<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Add Lable</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">

										<from class="form-horizontal">
											<div class="form-group">
												<label class="col-md-12">Name of Label</label>
												<div class="col-md-12">
													<input type="text" class="form-control" placeholder="type name"> </div>
											</div>
											<div class="form-group">
												<label class="col-md-12">Select Number of people</label>
												<div class="col-md-12">
													<select class="form-control">
														<option>All Contacts</option>
														<option>10</option>
														<option>20</option>
														<option>30</option>
														<option>40</option>
														<option>Custome</option>
													</select>
												</div>
											</div>
										</from>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
										<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
									</div>
								</div>

							</div>

						</div>
					</ul>
				</div>
			  </div>
            </div>

        </div>-->
        <!-- /.col -->
        <div class="col-lg-12 col-md-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h3 class="box-title">Contacts  List</h3>
				</div>
            <div class="box-body">
              <div class="table-responsive">
				<table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>Full Name</th>
                            <th>Business Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
							<th>Phone</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                            <?php
                            if($contacts_data->num_rows() > 0)
                            {
                            foreach($contacts_data->result() as $row)
                            {
                            ?>
                        <tr>
                            <td><a href="profile.html"><img src="<?php echo base_url()  ?>uploads/<?php echo $row->avatar; ?>" alt="user" class="avatar avatar-sm mr-5" /><?php echo $row->full_name; ?></a></td>
                            <td><?php echo $row->business_name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->city; ?></td>
                            <td><?php echo $row->country; ?></td>
                            <td><?php echo $row->phone_no; ?></td>
                            <?php if($row->role == 'Veterinary'){?>
                            <td><span class="label label-danger"><?php echo $row->role; ?></span> </td>
                            <?php }else if($row->role == 'Horse Tereapaut'){ ?>
                            <td><span class="label label-primary"><?php echo $row->role; ?></span> </td>
                            <?php }?>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <?php
                        }
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="9">No Contacts Found</td>
                            </tr>
                            <?php
                        }
                        ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
							</td>
							<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
                                                <p class="statusMsg"></p>
											<from class="form-horizontal form-element" method="post" id="contactForm" enctype="multipart/form-data">
												<div class="col-md-12 m-b-20">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Full name"  id="fullname"> </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Business name" id="businessname"> </div>
													<div class="form-group">
														<input type="email" class="form-control" placeholder="Email" id="email"> </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Address" id="address"> </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="City" id="city"> </div>
													<div class="form-group">
                                                        <span>Country : </span>
                                                        <select class="js-example-basic-single" name="state" id="country">
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="France">France</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="The Netherlands">The Netherlands</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                        </select>
                                                    </div>
													<div class="form-group">
														<input type="tel" class="form-control" placeholder="Phone No" id="phoneNo"> </div>
													<div class="form-group">
                                                        <span>Role : </span>
                                                        <select class="js-example-basic-single" name="role" id="role">
                                                            <option value="Veterinary">Veterinary</option>
                                                            <option value="Horse Tereapaut">Horse Tereapaut</option>
                                                            <!--<option value="addValue">Add value</option>-->
                                                        </select>
                                                    </div>
													<div class="form-group">
														<div class="fileupload btn btn-danger">
															<div class="file-group">
															  <span><i class="fa fa-camera file-browser mr-10"></i>Upload Contact Image</span>
															  <input type="file" name="avatar" id="avatar">
                                                                <br />
                                                                <span id="uploaded_image"></span>
															</div>
														</div>
													</div>
												</div>
											</from>
										</div>
                                        <!--data-dismiss="modal"-->
										<div class="modal-footer">
											<button type="button" class="btn btn-info submitBtn" onclick="submitContactForm()" id="save" name="save">Save</button>
											<button type="button" class="btn btn-default float-right" data-dismiss="modal" onClick="refreshPage()">Cancel</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<td colspan="7">
								<div class="text-right">
									<ul class="pagination"> </ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2017 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
	
	<!-- DataTables -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- This is data table -->
    <script src="<?php echo base_url()  ?>assets/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Aries_admin App -->
	<script src="<?php echo base_url()  ?>assets/admin/js/template.js"></script>
	
	<!-- Aries_admin for demo purposes -->
	<script src="<?php echo base_url()  ?>assets/admin/js/demo.js"></script>
	
	<!-- Aries_admin for Data Table -->
	<script src="<?php echo base_url()  ?>assets/admin/js/pages/data-table.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
<script>
    function refreshPage(){
        window.location.reload();
    }
</script>
<script>
    function submitContactForm(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var fullName = $('#fullname').val();
        var businessName = $('#businessname').val();
        var Email = $('#email').val();
        var Address = $('#address').val();
        var City = $('#city').val();
        var Country = $('#country').val();
        var PhoneNo = $('#phoneNo').val();
        var Role = $('#role').val();





        if(fullName.trim() == '' ){
            alert('Please enter your full name.');
            $('#fullname').focus();
            return false;
        }else if(businessName.trim() == '' ){
            alert('Please enter your business name.');
            $('#businessname').focus();
            return false;
        }else if(Email.trim() != '' && !reg.test(Email)){
            alert('Please enter valid email.');
            $('#email').focus();
            return false;
        }else if(Address.trim() == '' ){
            alert('Please enter your Address.');
            $('#address').focus();
            return false;
        }else if(City.trim() == '' ){
            alert('Please enter your City.');
            $('#city').focus();
            return false;
        }else if(Country.trim() == '' ){
            alert('Please enter your Country.');
            $('#country').focus();
            return false;
        }else if(PhoneNo.trim() == '' ){
            alert('Please enter your phone Number.');
            $('#phoneNo').focus();
            return false;
        }else if(Role.trim() == '' ){
            alert('Please enter your role.');
            $('#role').focus();
            return false;
        }else{

            var ava = document.getElementById("avatar").files[0];
            var Avatar = document.getElementById("avatar").files[0].name;
            var form_data = new FormData();
            var ext = Avatar.split('.').pop().toLowerCase();

            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("avatar").files[0]);
            var f = document.getElementById("avatar").files[0];
            var fsize = f.size||f.fileSize;
            var form_data = new FormData();
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
            {
                alert("Invalid Image File");
            }else if(fsize > 200000)
            {
                alert("Image File Size is very big");
            }else{
                form_data.append("contactFrmSubmit","1");
                form_data.append("fullname",fullName);
                form_data.append("businessname",businessName);
                form_data.append("email",Email);
                form_data.append("address",Address);
                form_data.append("city",City);
                form_data.append("country",Country);
                form_data.append("phoneNo",PhoneNo);
                form_data.append("role",Role);
                form_data.append("avatar", document.getElementById('avatar').files[0]);
                $.ajax({
                    type:'POST',
                    url:'addContacts',
                    //data:'contactFrmSubmit=1&fullname='+fullName+'&businessname='+businessName+'&email='+Email+'&address='+Address+'&city='+City+'&country='+Country+'&phoneNo='+PhoneNo+'&role='+Role+'&avatar='+ava,
                    data:form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled","disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success:function(msg){
                        //$('#uploaded_image').html(data);
                        if(msg == 'ok'){
                            $('#fullname').val('');
                            $('#businessname').val('');
                            $('#email').val('');
                            $('#address').val('');
                            $('#city').val('');
                            $('#phoneNo').val('');
                            $('.statusMsg').html('<span class="alert alert-success" style="color:white;">Thanks for adding the contact.</span>');
                        }else{
                            $('.statusMsg').html('<span class="alert alert-success" style="color:white;">Some problem occurred, please try again.</span>');
                        }
                        $('.submitBtn').removeAttr("disabled");
                        $('.modal-body').css('opacity', '');
                    }
                });
            }

        }
    }
</script>
</body>
</html>
