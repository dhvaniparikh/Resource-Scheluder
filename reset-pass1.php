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
    $uname=$_POST["txtuname"];
    $email=$_POST["txtemail"];

    $randomNumber = rand();
      
    $otp = rand(100000,999999);
    session_start();
    $_SESSION["otp"]= $otp;
    $_SESSION["uname"]=$uname;
    $_SESSION["email"]=$email;

        $to_email ="dhvani.parikh15@gmail.com";
        $subject = "OTP";
        $body = "Your OTP is $otp";
        $headers = "From:dhvani.parikh15@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
            header("location:reset-pass2.php");
        } else {
            echo "Email sending failed...";
            ini_set("error_reporting", E_ALL);
            print_r(error_get_last());
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
                        <h1 class="display-4 py-2 text-truncate">Reset Password</h1>
                        <div class="px-2">
                            <form action="" method="post" class="justify-content-center">
                                <div class="form-group">
                                    <label class="pull-left">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="txtuname" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email ID" name="txtemail" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="btnsubmit">Send OTP</button>
                                
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