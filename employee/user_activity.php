<?php
include_once("header.php");
?>
    <body>
    <div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Login Details
								</small>
							</h1>
						</div>
        <?php
            $userid=$_SESSION["userid"];
            $cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from login,user where login.userid=user.userid and user.userid=$userid and date_logout!='0000-00-00'";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Login</th><th>Date Of Logout</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["dologin"]."</td><td>".$row["dologout"]."</td></tr>";
			}
            $str.="</table>";
            echo $str;
        ?>
    </body>
<?php
include_once("footer.php");
?>