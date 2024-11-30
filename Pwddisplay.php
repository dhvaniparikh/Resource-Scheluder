<html>
    <body>
    <?php
    session_start();

    if(isset($_POST["btnsubmit"]))
    {
        $x=$_POST["txtotp"];
        $fpass=$_POST["txtpass"];
    // Print
    //print_r($randomNumber);
  
    // New Line
    //print_r("\n");
      
    // Generating a random number in a 
    // Specified range.
        
    $uname=$_SESSION["uname"];
    $otp=$_SESSION["otp"];
        if($x==$otp)
        {
            $cnn=mysqli_connect("localhost","root","","project");
			$qry="UPDATE user set password='$fpass' where username='$uname'";
			$result=$cnn->query($qry);
            header("location:new.php");
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
    <td>password</td>
    <td><input type="password" name="txtpass"></td>
    </tr>
    <tr><td><input type="submit" name="btnsubmit" value="submit"></td></tr>
    </table>
    
    
    </form>
    </body>
</html>