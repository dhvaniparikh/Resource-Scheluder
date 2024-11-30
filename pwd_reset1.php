<html>
    <body>
    <?php
        session_start();
        $cnn=mysqli_connect("localhost","root","","pet");
$fpass="";
$fpass1="";

    if(isset($_POST["btnsubmit"]))
    {
        $fpass=$_POST["txtpass"];
        $fpass1=$_POST["txtpass1"];
        
        $uname=$_SESSION["uname"];
        // $otp=$_SESSION["otp"];
        if($fpass==$fpass1)
        {
            $qry="select * from user where username='$uname'";            
            $result=$cnn->query($qry);
            $cnt=mysqli_num_rows($result);
            if($cnt==1)
            {
                $qry="UPDATE user set pwd='$fpass' where username='$uname'";
                $result=$cnn->query($qry);
                header("location:login.php");
            }

            else {
                    $qry="select * from doctor where uname='$uname'";
                    $result=$cnn->query($qry);
                    $cnt=mysqli_num_rows($result);
                    if($cnt==1)
                    {
                        $qry="UPDATE doctor set pwd='$fpass' where uname='$uname'";
                        $result=$cnn->query($qry);
                        header("location:login.php");
                    }

                    else {
                            $qry="select * from groomer where uname='$uname'";
                            $result=$cnn->query($qry);
                            $cnt=mysqli_num_rows($result);
                            if($cnt==1)
                            {
                                $qry="UPDATE groomer set pwd='$fpass' where uname='$uname'";
                                $result=$cnn->query($qry);
                                header("location:login.php");
                            }  
                            
                            else {
                                $qry="select * from trainer where uname='$uname'";
                                $result=$cnn->query($qry);
                                $cnt=mysqli_num_rows($result);
                                if($cnt==1)
                                {
                                    $qry="UPDATE trainer set pwd='$fpass' where uname='$uname'";
                                    $result=$cnn->query($qry);
                                    header("location:login.php");
                                }  

                                    else {
                                        $qry="select * from shop where uname='$uname'";
                                        $result=$cnn->query($qry);
                                        $cnt=mysqli_num_rows($result);
                                        if($cnt==1)
                                        {
                                            $qry="UPDATE shop set pwd='$fpass' where uname='$uname'";
                                            $result=$cnn->query($qry);
                                            header("location:login.php");
                                        } 
                                        
                                            else {
                                                $qry="select * from admin where uname='$uname'";
                                                $result=$cnn->query($qry);
                                                $cnt=mysqli_num_rows($result);
                                                if($cnt==1)
                                                {
                                                    $qry="UPDATE admin set pwd='$fpass' where uname='$uname'";
                                                    $result=$cnn->query($qry);
                                                    header("location:login.php");
                                                } 
                                            } 
                                            
                                        }
                                    }
                            }
                    }
             
                }
        else {
                echo '<script language="javascript">';
                echo 'alert("opps!!both password not matched\n")';
                echo '</script>';
            }
}

    ?>
    <form name="frm1" method="post">
    <table border="2">
    <tr>
    <td>password</td>
    <td><input type="password" name="txtpass" placeholder="password"></td>
    </tr>
    <tr>
    <td>confirm password</td>
    <td><input type="password" name="txtpass1" placeholder="confirm password"></td>
    </tr>
    <tr><td><input type="submit" name="btnsubmit" value="Change"></td></tr>
    </table>
    
    
    </form>
    </body>
</html>