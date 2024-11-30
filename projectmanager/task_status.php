<?php
include_once("header.php");
?>
<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Incompleted Tasks
								</small>
							</h1>
						</div>
<?php
		$date = date('Y-m-d');
		$cnn=mysqli_connect("localhost","root","","project");
        $qry="select * from task,project,user where task.pid=project.pid and task.userid=user.userid and task_edate<'$date'";
        $result=$cnn->query($qry);
		$str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Project title</th><th>Task Details</th><th>Task Start Date</th><th>Task End Date</th></tr>";
		while($row=$result->fetch_assoc())
		{			
			$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["ptitle"]."</td><td>".$row["task_details"]."</td><td>".$row["task_sdate"]."</td><td>".$row["task_edate"]."</td></tr>";
		}
        $str.="</table>";
        echo $str;	
	?>
<?php
include_once("footer.php");
?>