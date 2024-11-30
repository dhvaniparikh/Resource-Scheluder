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
	$id=$_GET["id"];
    $cnn=mysqli_connect("localhost","root","","project");
	$qry="select * from task where pid='$id' and userid='$userid'";
	$result=$cnn->query($qry);
	$str="<table border='1' class='table table-bordered table-hover'><tr><th>Task Details</th><th>Date Of Start</th><th>Date Of End</th><th>View More</th></tr>";
	while($row=$result->fetch_assoc())
	{
		$str.="<tr><td>".$row['task_details']."</td><td>".$row["task_sdate"]."</td><td>".$row["task_edate"]."</td><td><a class='btn btn-xs btn-success' href='all_task.php?id=".$row["taskid"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td></tr>";
	}
		$str.="</table>";
		echo $str;
?>
							
<?php
include_once("footer.php");
?>
