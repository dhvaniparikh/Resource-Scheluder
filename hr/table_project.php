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
					Project
				</small>
			</h1>
		</div>
		<div class="col-md-2">
					<button class="btn btn-lg pull-right"><a href="add_project.php">Insert Data</a></button>
		</div><br>
	</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from project";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Project Title</th><th>Date Of Start</th><th>Date Of End</th><th>Project type</th><th>Project Description</th><th>Client</th><th>Edit</th><th>Delete</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["ptitle"]."</td><td>".$row["proj_sdate"]."</td><td>".$row["proj_edate"]."</td><td>".$row["ptype"]."</td><td>".$row["pdesc"]."</td><td>".$row["client"]."</td><td><a class='btn btn-xs btn-success' href='update_project.php?id=".$row["pid"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='table_delete.php?id=".$row["pid"]."&d=p'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
				
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>