<html>
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

        $to_email = "dhvani.parikh15@gmail.com";
        $subject = "OTP";
        $body = "Your OTP is $otp";
        $headers = "From:dhvani.parikh15@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
            header("location:pwd_otp.php");
        } else {
            echo "Email sending failed...";
            ini_set("error_reporting", E_ALL);
            print_r(error_get_last());
        }
    }

    ?>
    <form name="frm1" method="post">
    <table border="2">
    <tr>
    <td>User name</td>
    <td><input type="text" name="txtuname" placeholder="Username"></td>
   
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="text" name="txtemail" placeholder="Email Address"></td>
   
    </tr>
    <tr><td><input type="submit" name="btnsubmit" value="Send OTP"></td></tr>
    </table>
    
    
    </form>
    </body>
</html>