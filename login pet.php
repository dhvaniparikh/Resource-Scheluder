<!DOCTYPE html>
<html dir="ltr" class="bg">
<style>

.bg{
    background:#353433;
    background-image:url('lgg10.jpg');
}

.xx {
 
  position: relative;
  animation: mymove 5s infinite;
  animation-timing-function: linear;
  /* background:#353433; */
  background-image:url('lgg10.jpg');
  
}
@keyframes mymove {
    
  from {background:#a9e4d400; left: 0px;}
  to {background:#a9e4d400; left: 1300px;}

  
}
.error {color: #FF0000;}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Pet Wolly</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href=" /assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href=" dist/css/style.min.css" rel="stylesheet">

</head>

<body class="bg">
    <?php 
    $lerror=""; 
    $eunm="";
    $epwd=""; 
    $flag="";

    $username="";
    $pwd="";
        if(isset($_POST["btnsubmit"]))
        {
            $username=$_POST["txtuname"];
            $pwd=$_POST["txtpwd"];
            $cnn=mysqli_connect("localhost","root","","pet");
            $qry="select * from user where username='$username' and pwd='$pwd'";
         
            function test_input($data) 
            {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
         {
            if (empty($username))
            {
               $eunm = "Username is required";
               $flag=1;
               } 
               else
               {
                   $uname = test_input($username);
               }
            
            if (empty($pwd))
            {
               $epwd = "Password is required";
               $flag=1;
               } 
               else
               {
                   $lpwd = test_input($pwd);
               }
            }

        if($flag==0)
          {

            $result=$cnn->query($qry);
            $cnt=mysqli_num_rows($result);
            session_start();
            $row=$result->fetch_assoc();
            $uid=$row["uid"];
            $_SESSION["uid"]=$uid;
            if($cnt==1)
            {    

                $cnn=mysqli_connect("localhost","root","","pet");
                $qry2="select * from user where uid='$uid' ";

                $result2=$cnn->query($qry2);
                $row2=$result2->fetch_assoc();

                $uid=$row2["uid"];
                $name=$row2["fname"]." ".$row2["lname"];
                $_SESSION["uid"]=$uid;
                $_SESSION["name"]=$name;

                header("Location:home.php");
            }
            else
            {
        
                $qry1="select * from doctor where uname='$username' and pwd='$pwd' AND isapprove='1'";
                // $qry1="select * from doctor where uname='$username' and pwd='$pwd'";

                $result1=$cnn->query($qry1);
               
                $cnt=mysqli_num_rows($result1);
                $row=$result1->fetch_assoc();
                $did=$row["did"];
                // $isapprove=$row["isapprove"];
                $_SESSION["did"]=$did;

                if($cnt==1)
                {
                    $cnn=mysqli_connect("localhost","root","","pet");
                    $qry2="select * from doctor where did='$did' ";
    
                    $result2=$cnn->query($qry2);
                    $row2=$result2->fetch_assoc();
    
                    $did=$row["did"];
                    $_SESSION["did"]=$did;

                    header("Location:doctor/home2.php");
                }
                else 
                {
                    $qry1="select * from groomer where uname='$username' and pwd='$pwd'";
                    
                    $result1=$cnn->query($qry1);
                    $row=$result1->fetch_assoc();
                    $cnt=mysqli_num_rows($result1);
                    if($cnt==1)
                    {
                        $cnn=mysqli_connect("localhost","root","","pet");
                        $qry2="select * from groomer where gid='$gid' ";
        
                        $result2=$cnn->query($qry2);
                        $row2=$result2->fetch_assoc();
        
                        $gid=$row["gid"];
                        $_SESSION["gid"]=$gid;
        
                        header("Location:groomer/home2.php");
                    }
                    else 
                    {
                        $qry1="select * from trainer where uname='$username' and pwd='$pwd'";
                        
                        $result1=$cnn->query($qry1);
                        $row=$result1->fetch_assoc();
                        $cnt=mysqli_num_rows($result1);

                        if($cnt==1)
                        {
                            $cnn=mysqli_connect("localhost","root","","pet");
                            $qry2="select * from trainer where tid='$tid' ";
            
                            $result2=$cnn->query($qry2);
                            $row2=$result2->fetch_assoc();
            
                            $tid=$row["tid"];
                            $_SESSION["tid"]=$tid;
            
                            header("Location:trainer/home2.php");
                        }
                        else 
                        {
                            $qry1="select * from shop where uname='$username' and pwd='$pwd' AND isapprove='1'";
                            $result1=$cnn->query($qry1);
                            $row=$result1->fetch_assoc();
                            $cnt=mysqli_num_rows($result1);

                            if($cnt==1)
                            {
                                $cnn=mysqli_connect("localhost","root","","pet");
                                $qry2="select * from shop where shid='$shid' ";
                
                                $result2=$cnn->query($qry2);
                                $row2=$result2->fetch_assoc();
                
                                $shid=$row["shid"];
                                $_SESSION["shid"]=$shid;
                
                                header("Location:shop/home.php");
                            }
                            else {
                                    $qry="select * from admin where uname='$username' and pwd='$pwd'";
                                    
                                    $result=$cnn->query($qry);
                                    $row=$result->fetch_assoc();
                                    $cnt=mysqli_num_rows($result);
                                    
                                    if($cnt==1)
                                    {    
                                        $cnn=mysqli_connect("localhost","root","","pet");
                                        $qry2="select * from admin where adminid='$adminid' ";
                        
                                        $result2=$cnn->query($qry2);
                                        $row2=$result2->fetch_assoc();
                        
                                        $adminid=$row["adminid"];
                                        $_SESSION["adminid"]=$adminid;
                        
                                        header("Location:admin/home.php");
                                    }
                                    else
                                    {
                                        $lerror="* The username or password is incorrect";
                                    }            
                                }
                            }
                        }
                    }
                }
            }
        }
?>

    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg">
            <div class="auth-box bg border-top border-secondary">
                <div id="loginform">
                    
                    <!-- Form --><br>
                    <div class="text-warning text-center p-t-20">
                        <h1 style="font-family:Calisto MT; color:black; font-size:40px; ">Login Form</h1>
                    </div>
                    <form class="form-horizontal m-t-20" method="post">
                        <div class="row p-b-30">
                            <div class="col-12">

                            <span class="error"> <?php echo $eunm;?></span>
					</span>  
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <!-- <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span> -->
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        name="txtuname" value="<?php echo $username;?>">
                                </div>

                                <span class="error"> <?php echo $epwd;?></span>
					</span>  
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <!-- <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                                class="fa fa-lock m-r-5"></i></span> -->
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        aria-label="Password" aria-describedby="basic-addon1" name="txtpwd">
                                </div>
                            <span class="error"> <?php echo $lerror;?></span>
					</span>  
                            </div>
                        </div>

                        <a href="ureg.php" style="color:black; font-size:15px;">Don't have an account?<b> Sign up.</b></a>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                    <a href="forgot.php">
                                        <button class="btn btn-info" id="to-recover" type="button"><i
                                                class="ti-pencil"></i> Lost password?</button>
                                                </a>
                                        <button class="btn btn-success float-right" type="submit"
                                            name="btnsubmit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div>
                            <img src="assets/images/img3.jpg" />
                        </div> -->

                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="  assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="  assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="  assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function() {

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>
<div class="bg xx">
<img src="login1.gif">

</div>


</html>