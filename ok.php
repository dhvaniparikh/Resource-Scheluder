<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
    #cover {

        background: #222 url('new.jpeg') center center no-repeat;

        /* background-size: cover;
        height: 100%;
        text-align: center;
        display: flex;
        align-items: center;
        position: relative; */
        height:100vh;
    -webkit-background-size:cover;
    background-size:cover;
    background-position:center center;
    position:relative;
    text-align: center;
    display: flex;
        align-items: center;
    
    }

     body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #f4efef;
        background-color: white;
    }

    #cover-caption {
        width: 100%;
        position: relative;
        z-index: 1;
        margin-left: 550px;
    }

    .main-container {
        margin-left:30%;
        opacity:0.8;
        position: relative;
        
   
        
    }

    h1 {
        font-size: 2em;
        margin: .67em 0;
        margin-right: 450
    }

    .no-border {
        content: '';
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: -1;
        border-radius: 10px;
    }
	 .login-layout .widget-box .widget-main {
    padding: 16px 36px 36px;
    background-color: rgba(0, 0, 0, 0.3)
}
.row{
    margin-right:200px;
}

    </style>
</head>


	<body class="login-layout">
	<?php
        if(isset($_POST["btnsubmit"]))
        {
            $uname=$_POST["txtusername"];
            $pwd=$_POST["txtpassword"];
            $cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user where Username='$uname' and Password='$pwd' and job_status='working'";
            $result=$cnn->query($qry);
            $cnt=mysqli_num_rows($result);
            if($cnt>0)
            {
                $row=$result->fetch_assoc();
                $rid=$row["rid"];
                $userid=$row["userid"];
                $sid=date('Y-m-d');
                $cnn=mysqli_connect("localhost","root","","project");
                $qry1="INSERT INTO login (userid,dologin,date_login,dologout,date_logout) values ('$userid',now(),'$sid','','')";
                $result=$cnn->query($qry1);
                // $qry2="select max(loginid) as loginid from login";
                // $result=$cnn->query($qry2);
                // $row2=$result->fetch_assoc();
                session_start();
                // $_SESSION["loginid"]=$row2["loginid"];
                $_SESSION["username"]=$row["username"];
                $_SESSION["userid"]=$row["userid"];
                $_SESSION["fname"]=$row["fname"];
                $_SESSION["userimg"]=$row["userimg"];
                if($rid==1)
                {
                    header("location:admin/home.php");
                }
                if($rid==2)
                {
                    header("location:hr/home.php");
                }
                if($rid==3)
                {
                    header("location:projectmanager/home.php");
                }
                if($rid==4)
                {
                    header("location:employee/home.php");
                }
                if($rid==5)
                {
                    header("location:employee/home.php");
                }
                if($rid==6)
                {
                    header("location:employee/home.php");
                }
                if($rid==7)
                {
                    header("location:employee/home.php");
                }
            }
            else
            {
				echo '<script language="javascript">';
				echo 'alert("Invalid Login Credentials")';
				echo '</script>';
            }
        }
        if(isset($_POST["btnfsubmit"]))
        {
            $fuser=$_POST["txtfuser"];
        }

    ?>
 <div class="background">
        <div class="transbox">
            <section id="cover" class="min-vh-100">
            <div class="main-container">
			<!-- <div class="main-content"> -->
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">BSP</span>
									<span class="white" id="id-text2">Technology</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-lock green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="txtusername" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="txtpassword" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" name="btnsubmit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="space-6"></div>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter details carefully
											</p>

											<form method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name="txtfuser" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
                                                    

													<div class="clearfix">
														<button type="submit" name="btnfsubmit" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110" data-target="verify-otp">Send OTP!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login">
												Back to Login!
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="verif-otp" class="verify-otp widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Verify OTP to reset your password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter OTP carefully
											</p>

											<form method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="OTP" name="userotp" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
                                                    
													<div class="clearfix">
														<button type="submit" name="btnfsubmit" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110" >Send OTP!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#verify-otp" class="verify-otp-link">
												Verify OTP
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.verify-otp -->

							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div>
        <!-- </div>    /.main-container -->
</section>
 </div> 
</div>
        	<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
</body>	
</html>
