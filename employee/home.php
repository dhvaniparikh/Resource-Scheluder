<?php
include_once("header.php");
?>
<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Task Details
								</small>
							</h1>
						</div>
<?php
		$userid=$_SESSION["userid"];
		$cnn=mysqli_connect("localhost","root","","project");
		$qry1="select max(loginid) as loginid from login where userid=$userid";
        $result=$cnn->query($qry1);
        $row1=$result->fetch_assoc();
		$_SESSION["loginid"]=$row1["loginid"];


		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from task,project,status where task.status_id=status.status_id and task.pid=project.pid and userid=$userid";
		$result=$cnn->query($qry);
		$str="<table border='2' class='table  table-bordered table-hover'><tr><th>Task Title</th><th>Task Details</th><th>Task Start Date</th><th>Task End Date</th><th>Project Title</th><th>Task Status</th><th>View More</th></tr>";
		while($row=$result->fetch_assoc())
		{
		$str.="<tr><td>".$row["task_title"]."</td><td>".$row["task_details"]."</td><td>".$row["task_sdate"]."</td><td>".$row["task_edate"]."</td><td>".$row["ptitle"]."</td><td>".$row["status_name"]."</td><td><a class='' href='task_info.php?id=".$row["taskid"]."'><i class='ace-icon fa fa-eye bigger-120'></i></a></td></tr>";
		}
		$str.="</table>";
		echo $str;
?> 


<?php
include_once("footer.php");
?>