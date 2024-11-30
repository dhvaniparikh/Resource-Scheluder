<?php
	include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv = "refresh" content = "5; url =../login.php" />
        <style>
            img
            {
                margin-left:20%;
            }
        </style>
    </head>
    <body>
        <img src="img/logout.gif" height="50%" width="50%">
        <?php
            $userid=$_SESSION["userid"];
            $loginid=$_SESSION["loginid"];
            $logout=date('Y-m-d');
            $cnn=mysqli_connect("localhost","root","","project");
            $qry="UPDATE login set dologout=now(),date_logout='$logout' where userid=$userid and loginid=$loginid";
            $result=$cnn->query($qry);
            session_destroy();
        ?>
    </body>
</html>
<?php
	include_once("footer.php");
?>