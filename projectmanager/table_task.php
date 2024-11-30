<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<div class="row page-header">
		<div class="col-md-10">
			<h1>
				Tables
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Task
				</small>
			</h1>
		</div>
		<div class="col-md-2">
					<button class="btn btn-lg pull-right"><a href="add_task.php">Insert Data</a></button>
		</div><br>
	</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from task";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Date Of Start</th><th>Date Of End</th><th>Task Status</th><th>Project ID</th><th>Edit</th><th>Delete</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["task_sdate"]."</td><td>".$row["task_edate"]."</td><td>".$row["taskstatus"]."</td><td>".$row["pid"]."</td><td><a class='btn btn-xs btn-success' href='update_task.php?id=".$row["taskid"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='table_delete.php?id=".$row["taskid"]."&d=t'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
				
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>