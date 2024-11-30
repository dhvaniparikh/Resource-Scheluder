<?php
include_once("header.php");
?>
<?php
    $cnn=mysqli_connect("localhost","root","","project");
    $qry="select * from project";
    $result=$cnn->query($qry);
    $row=$result->fetch_assoc();
    if(isset($_POST["btnsubmit"]))
    {
    $proj=$_POST["cmbblock"];
    $cnn=mysqli_connect("localhost","root","","project");
    $qry="select * from project,proj_employee,user,role where user.rid=role.rid and project.pid=proj_employee.pid and proj_employee.userid=user.userid and project.pid='$proj' and job_status='working'";
    $result=$cnn->query($qry);
    $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Role In Company</th><th>View More</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["rname"]."</td><td><a href='user_details.php?id=".$row["userid"]."'><i class='fa fa-eye' aria-hidden='true'></i></a></td></tr>";
			}
            $str.="</table>";
            echo $str;	
    }
?>