﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Aries Admin - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/admin/css/bootstrap.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/admin/css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="admin/css/master_style.css">
	
	<!-- Aries_admin skins. choose a skin from the admin/css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="admin/css/skins/_all-skins.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-datepicker/dist/admin/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	

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
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="images/aries-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="images/aries-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="images/logo-dark-text.png" alt="logo" class="dark-logo">
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
                        <img src="images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
                        <img src="images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
              <img src="images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

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
			<img src="images/user5-128x128.jpg" alt="user">
            <span>Juliya Brus</span>
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
        <li class="active">
          <a href="index.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/app/app-chat.html">Chat app</a></li>
            <li><a href="pages/app/app-contact.html">Contact / Employee</a></li>
            <li><a href="pages/app/app-ticket.html">Support Ticket</a></li>
			<li><a href="pages/app/calendar.html">Calendar</a></li>
            <li><a href="pages/app/profile.html">Profile</a></li>
            <li><a href="pages/app/userlist-grid.html">Userlist Grid</a></li>
			<li><a href="pages/app/userlist.html">Userlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/mailbox/mailbox.html">Inbox</a></li>
            <li><a href="pages/mailbox/compose.html">Compose</a></li>
            <li><a href="pages/mailbox/read-mail.html">Read</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/badges.html">Badges</a></li>
            <li><a href="pages/UI/border-utilities.html">Border</a></li>
            <li><a href="pages/UI/buttons.html">Buttons</a></li>
            <li><a href="pages/UI/bootstrap-switch.html">Bootstrap Switch</a></li>
            <li><a href="pages/UI/cards.html">User Card</a></li>
            <li><a href="pages/UI/color-utilities.html">Color</a></li>
			<li><a href="pages/UI/date-paginator.html">Date Paginator</a></li>
            <li><a href="pages/UI/dropdown.html">Dropdown</a></li>
            <li><a href="pages/UI/dropdown-grid.html">Dropdown Grid</a></li>
            <li><a href="pages/UI/general.html">General</a></li>
            <li><a href="pages/UI/icons.html">Icons</a></li>
            <li><a href="pages/UI/media-advanced.html">Advanced Medias</a></li>
			<li><a href="pages/UI/modals.html">Modals</a></li>
            <li><a href="pages/UI/nestable.html">Nestable</a></li>
            <li><a href="pages/UI/notification.html">Notification</a></li>
            <li><a href="pages/UI/portlet-draggable.html">Draggable Portlets</a></li>
            <li><a href="pages/UI/ribbons.html">Ribbons</a></li>
            <li><a href="pages/UI/sliders.html">Sliders</a></li>
            <li><a href="pages/UI/sweatalert.html">Sweet Alert</a></li>
            <li><a href="pages/UI/tab.html">Tabs</a></li>
            <li><a href="pages/UI/timeline.html">Timeline</a></li>
            <li><a href="pages/UI/timeline-horizontal.html">Horizontal Timeline</a></li>			  
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/widgets/blog.html">Blog</a></li>
            <li><a href="pages/widgets/chart.html">Chart</a></li>
            <li><a href="pages/widgets/list.html">List</a></li>
            <li><a href="pages/widgets/social.html">Social</a></li>
            <li><a href="pages/widgets/statistic.html">Statistic</a></li>
            <li><a href="pages/widgets/weather.html">Weather</a></li>
            <li><a href="pages/widgets/widgets.html">Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/boxed.html">Boxed</a></li>
            <li><a href="pages/layout/fixed.html">Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
          </ul>
        </li>		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-square-o"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/box/advanced.html">Advanced</a></li>
            <li><a href="pages/box/basic.html">Boxed</a></li>
            <li><a href="pages/box/color.html">Color</a></li>
			<li><a href="pages/box/group.html">Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html">ChartJS</a></li>
            <li><a href="pages/charts/flot.html">Flot</a></li>
            <li><a href="pages/charts/inline.html">Inline charts</a></li>
            <li><a href="pages/charts/morris.html">Morris</a></li>
            <li><a href="pages/charts/peity.html">Peity</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/advanced.html">Advanced Elements</a></li>
            <li><a href="pages/forms/code-editor.html">Code Editor</a></li>
            <li><a href="pages/forms/editor-markdown.html">Markdown</a></li>
            <li><a href="pages/forms/editors.html">Editors</a></li>
            <li><a href="pages/forms/form-validation.html">Form Validation</a></li>
            <li><a href="pages/forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="pages/forms/general.html">General Elements</a></li>
            <li><a href="pages/forms/mask.html">Formatter</a></li>
            <li><a href="pages/forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html">Simple tables</a></li>
            <li><a href="pages/tables/data.html">Data tables</a></li>
            <li><a href="pages/tables/editable-tables.html">Editable Tables</a></li>
            <li><a href="pages/tables/table-color.html">Table Color</a></li>
          </ul>
        </li>
		<li>
          <a href="pages/email/index.html">
            <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/map/map-google.html">Google Map</a></li>
            <li><a href="pages/map/map-vector.html">Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/extension/fullscreen.html">Fullscreen</a></li>
          </ul>
        </li>        
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/samplepage/blank.html">Blank</a></li>
            <li><a href="pages/samplepage/coming-soon.html">Coming Soon</a></li>
            <li><a href="pages/samplepage/custom-scroll.html">Custom Scrolls</a></li>
			<li><a href="pages/samplepage/faq.html">FAQ</a></li>
			<li><a href="pages/samplepage/gallery.html">Gallery</a></li>
			<li><a href="pages/samplepage/invoice.html">Invoice</a></li>
			<li><a href="pages/samplepage/lightbox.html">Lightbox Popup</a></li>
			<li><a href="pages/samplepage/pace.html">Pace</a></li>
			<li><a href="pages/samplepage/pricing.html">Pricing</a></li>
            <li class="treeview">
              <a href="#">Authentication 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/samplepage/login.html">Login</a></li>
                <li><a href="pages/samplepage/register.html">Register</a></li>
                <li><a href="pages/samplepage/lockscreen.html">Lockscreen</a></li>
                <li><a href="pages/samplepage/user-pass.html">Recover password</a></li>				  
              </ul>
            </li>            
			<li class="treeview">
              <a href="#">Error Pages 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/samplepage/404.html">404</a></li>
                <li><a href="pages/samplepage/500.html">500</a></li>
                <li><a href="pages/samplepage/maintenance.html">Maintenance</a></li>		  
              </ul>
            </li> 
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
	  <div class="row">
        <div class="col-xl-3 col-md-6 col-12 ">
          	<div class="box box-body bg-purple">
              <div class="flexbox">
                <span class="ion ion-ios-person-outline font-size-50"></span>
                <span class="font-size-40 font-weight-200">12,568</span>
              </div>
              <div class="text-right">Users</div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12 ">
          	<div class="box box-body bg-red">
              <div class="flexbox">
                <span class="ion ion-ios-copy-outline font-size-50"></span>
                <span class="font-size-40 font-weight-200">8,568</span>
              </div>
              <div class="text-right">Invoices</div>
            </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body">
              <div class="flexbox">
                <span class="ion ion-ios-paper-outline text-purple font-size-50"></span>
                <span class="font-size-40 font-weight-200">+100</span>
              </div>
              <div class="text-right">Article</div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body">
              <div class="flexbox">
                <span class="ion ion-ios-briefcase-outline text-red font-size-50"></span>
                <span class="font-size-40 font-weight-200">16,568</span>
              </div>
              <div class="text-right">Income</div>
            </div>
        </div>
        <!-- /.col -->
      </div>
		
      <div class="row">
        <div class="col-xl-8 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:270px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		  
		<div class="col-xl-4 col-12">
            <div class="box">
              <div class="box-header with-border">
                <h5 class="box-title">Top Locations</h5>
				<div class="box-tools pull-right">
					<ul class="card-controls">
					  <li class="dropdown">
						<a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item active" href="#">Today</a>
						  <a class="dropdown-item" href="#">Yesterday</a>
						  <a class="dropdown-item" href="#">Last week</a>
						  <a class="dropdown-item" href="#">Last month</a>
						</div>
					  </li>
					  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
					</ul>
				</div>
              </div>

              <div class="box-body">
                <div class="text-center py-20">
					<div class="donut" data-peity='{ "fill": ["#e9ab2e", "#398bf7", "#06d79c"], "radius": 80, "innerRadius": 60  }' >9,6,5</div>
                </div>

                <ul class="flexbox flex-justified text-center mt-30">
                  <li class="br-1">
                    <div class="font-size-20 text-primary">953</div>
                    <small>New York</small>
                  </li>

                  <li class="br-1">
                    <div class="font-size-20 text-info">813</div>
                    <small>Los Angeles</small>
                  </li>

                  <li>
                    <div class="font-size-20 text-yellow">369</div>
                    <small>Dallas</small>
                  </li>
                </ul>
              </div>
            </div>
          </div>
		  
      </div>      
      <!-- /.row -->
	  
	  <div class="row">
		  
          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="linechart" >1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>New Users</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">113</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="barchart">1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>Monthly Sale</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">%80</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="discretechart">1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>Impressions</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">%80</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
		  
      </div>      
      <!-- /.row -->		
		
              
      <!-- /.row -->
      <div class="row">
		  
		 <div class="col-xl-4 col-lg-6 col-12">	
          <!-- PRODUCT LIST -->
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Recently Products</h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <ul class="products-list product-list-in-box">
					<li class="item">
					  <div class="product-img">
						<img src="images/default-50x50.gif" alt="Product Image">
					  </div>
					  <div class="product-info">
						<a href="javascript:void(0)" class="product-title">iphone 7plus
						  <span class="label label-warning pull-right">$300</span></a>
						<span class="product-description">
							  12MP Wide-angle and telephoto cameras.
							</span>
					  </div>
					</li>
					<!-- /.item -->
					<li class="item">
					  <div class="product-img">
						<img src="images/default-50x50.gif" alt="Product Image">
					  </div>
					  <div class="product-info">
						<a href="javascript:void(0)" class="product-title">Apple Tv
						  <span class="label label-info pull-right">$400</span></a>
						<span class="product-description">
							  Library | For You | Browse | Radio
							</span>
					  </div>
					</li>
					<!-- /.item -->
					<li class="item">
					  <div class="product-img">
						<img src="images/default-50x50.gif" alt="Product Image">
					  </div>
					  <div class="product-info">
						<a href="javascript:void(0)" class="product-title">MacBook Air<span
							class="label label-danger pull-right">$450</span></a>
						<span class="product-description">
							  Make big things happen. All day long.
							</span>
					  </div>
					</li>
					<!-- /.item -->
					<li class="item">
					  <div class="product-img">
						<img src="images/default-50x50.gif" alt="Product Image">
					  </div>
					  <div class="product-info">
						<a href="javascript:void(0)" class="product-title">iPad Pro
						  <span class="label label-success pull-right">$289</span></a>
						<span class="product-description">
							  Anything you can do, you can do better.
							</span>
					  </div>
					</li>
					<!-- /.item -->
				  </ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
				  <a href="javascript:void(0)" class="uppercase">View All Products</a>
				</div>
				<!-- /.box-footer -->
			  </div>           
		 </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <!-- Widget: user widget style 3 -->
          <div class="box box-widget widget-user-3">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-purple"  style="background: url('images/photo1.png') center center;">
              <div class="info-user">
				  <h3 class="widget-user-username">Michael Jorden</h3>
				  <h6 class="widget-user-desc">Developer</h6>
              </div>
              <div class="widget-user-image clearfix">
                <img class="rounded-circle" src="images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
            </div>
            <div class="box-footer no-padding">
              <ul class="nav d-block nav-stacked">
                <li class="nav-item"><a href="#" class="nav-link">Sales <span class="pull-right badge bg-blue">1310</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Projects <span class="pull-right badge bg-green">120</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Followers <span class="pull-right badge bg-yellow">8K</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Tasks <span class="pull-right badge bg-red">58</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->			
			
          	<div class="flexbox flex-justified text-center bg-white">
              <div class="no-shrink py-30">
                <span class="ion ion-social-facebook font-size-50" style="color: #3b5998"></span>
              </div>

              <div class="py-25 bg-blue">
                <div class="font-size-30">+250</div>
                <span>Likes</span>
              </div>
            </div>
			
        </div>
        <!-- /.col -->  
		  
		  <div class="col-xl-4 col-lg-6 col-12">
          <!-- DIRECT CHAT DANGER -->
          <div class="box direct-chat direct-chat-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Direct Chat</h3>

              <div class="box-tools pull-right">
				<span data-toggle="tooltip" title="1 New Messages" class="badge bg-red">1</span>
				<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
				  <i class="fa fa-comments"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
				</button>
			  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages" id="direct-chat">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">James Anderson</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Michael Jorden</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				 <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">James Anderson</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Michael Jorden</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				  
				  <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">James Anderson</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Michael Jorden</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				  
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
					<a href="#">
					  <img class="contacts-list-img" src="images/user1-128x128.jpg" alt="User Image">

					  <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Pavan kumar
							  <small class="contacts-list-date pull-right">April 14, 2017</small>
							</span>
						<span class="contacts-list-email">info@.multipurpose.com</span>
					  </div>
					  <!-- /.contacts-list-info -->
					</a>
				  </li>
				  <!-- End Contact Item -->
				  <li>
					<a href="#">
					  <img class="contacts-list-img" src="images/user7-128x128.jpg" alt="User Image">

					  <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Sonu Sud
							  <small class="contacts-list-date pull-right">March 14, 2017</small>
							</span>
						<span class="contacts-list-email">sonu@gmail.com</span>
					  </div>
					  <!-- /.contacts-list-info -->
					</a>
				  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </div>
        		  
      </div>
      <!-- /.row -->
      <div class="row">
      	<div class="col-xl-7 col-12">
      		<!-- quick email widget -->
          <div class="box">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
            </div>
          </div>
      	</div>
      	<div class="col-xl-5 col-12">
            <div class="box">
              <div class="card-body bg-img py-60" style="background-image: url(images/gallery/thumb/5.jpg)" data-overlay="5">
                <blockquote class="blockquote blockquote-inverse no-border no-margin">
                  <p class="font-size-22">Some quick example text to build blockquote content long enough.</p>
                  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
              </div>

              <div class="box-body">
                <h4><a href="#">Awesome Quote Blog Post</a></h4>
                <p><time>October 16, 2017</time></p>

                <p>Holisticly maximize team building ROI via next-generation resources. Enthusiastically promote team driven customer service and error-free solutions. Dynamically myocardinate vertical leadership for synergistic "outside the box" thinking. Efficiently extend global.</p>

                <div class="flexbox align-items-center mt-3">
                  <a class="btn btn-blue" href="#">Read more</a>

                  <div class="gap-items-4">
                    <a class="text-muted" href="#">
                      <i class="fa fa-heart mr-1"></i> 12
                    </a>
                    <a class="text-muted" href="#">
                      <i class="fa fa-comment mr-1"></i> 3
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>      	
      	
      </div>
      
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
	<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- ChartJS -->
	<script src="assets/vendor_components/chart-js/chart.js"></script>
	
	<!-- Sparkline -->
	<script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- daterangepicker -->
	<script src="assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- datepicker -->
	<script src="assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- peity -->
	<script src="assets/vendor_components/jquery.peity/jquery.peity.js"></script>
	
	<!-- Aries_admin App -->
	<script src="admin/js/template.js"></script>
	
	<!-- Aries_admin dashboard demo (This is only for demo purposes) -->
	<script src="admin/js/pages/dashboard.js"></script>
	
	<!-- Aries_admin for demo purposes -->
	<script src="admin/js/demo.js"></script>

	
</body>
</html>
