<?php
include_once("header.php");
?>
<?php
    $id=$_GET["id"];
    $cnn=mysqli_connect("localhost","root","","project");
	$qry="select user.userid as userid,userimg,fname,lname from project,proj_employee,user where project.pid=proj_employee.pid and proj_employee.userid=user.userid and project.pid='$id'";
	$result=$cnn->query($qry);
	$table="<table>";
	while($row=$result->fetch_assoc())
	{
		$userid=$row["userid"];
		$table.="<tr><td><a href='user_details.php?id=$userid'><img src=img\\".$row['userimg']." height='100px' width='100px'></td><br><td>".$row["fname"]."</td><td>".$row["lname"]."</td></tr>";
	}
		$table.="</table>";
		echo $table;
	?>
							
<?php
include_once("footer.php");
?>
