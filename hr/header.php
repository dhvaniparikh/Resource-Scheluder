<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<!-- <meta charset="utf-8" /> -->
		<title>Dashboard - HR</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.myDiv {
				background-color: #438EB9;
			}
			.myDiv1 {
					border: 2px outset #B8BCBC ;
					color: black;
					background-color: black;
					text-align: center;
					}
		</style>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state   myDiv" >
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							E Resource Scheduler
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right myDiv1" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?php echo "img/".$_SESSION["userimg"]; ?>">
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION["fname"]; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Update Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<!-- <script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script> -->

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state    myDiv">
				<!-- <script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script> -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="home.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">All Table </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="view_user.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Users
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="view_project.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Project
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="all_activity.php">
									<i class="menu-icon fa fa-caret-right"></i>
									activity
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="all_leave.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Leave
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>

						<li class="">
						<a href="registration.php" target="_BLANK">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Registration Form </span>
						</a>

						<b class="arrow"></b>
						</li>

					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

					</div>

					
					<div class="page-content">