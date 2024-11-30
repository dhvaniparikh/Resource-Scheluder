<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    #cover {
    background: #222 url('https://img.freepik.com/free-photo/side-view-cropped-unrecognizable-business-people-working-common-desk_1098-20474.jpg?size=626&ext=jpg&ga=GA1.2.1853454529.1603189534');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}

#cover-caption {
    width: 100%;
    position: relative;
    z-index: 1;
    /* margin-left: 400px; */
}
.row{
    margin-left:100px;
}
.container{
    /* padding-right:300px; */
    margin-left:190px;
}

form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}

</style>
</head>
<body>
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
                echo "Your Login Name or Password is invalid.";
            }
        }
    ?>

<div class="background">
  <div class="transbox">
    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <h1 class="display-4 py-2 text-truncate">Login</h1>
                        <div class="px-2">
                            <form action="" method="post" class="justify-content-center">
                                <div class="form-group">
                                    <label class="pull-left">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="txtusername" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="txtpassword" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="btnsubmit">Submit</button>

                                <a href="reset-pass1.php"><button type="button" class="btn btn-primary btn-lg" name="btnforgot">Forgot Password</button></a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>

</body>
</html>