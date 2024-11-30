<html>
    <body>
    <?php
    session_start();

    if(isset($_POST["btnsubmit"]))
    {
        $x=$_POST["txtotp"];
        $uname=$_SESSION["uname"];
        $otp=$_SESSION["otp"];
        if($x==$otp)
        {
            header("location:pwd_reset1.php");
        }
        else
			{
				echo '<script language="javascript">';
				echo 'alert("Invalid otp")';
				echo '</script>';
			}
 }

    ?>
    <form name="frm1" method="post">
    <table border="2">
    <tr>
    <td>otp</td>
    <td><input type="text" name="txtotp"></td>
    </tr>
    <tr>
    <tr><td><input type="submit" name="btnsubmit" value="Next"></td></tr>
    </table>
    
    
    </form>
    </body>
</html>