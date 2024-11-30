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
					Project Employee
				</small>
			</h1>
		</div>
		<div class="col-md-2">
					<button class="btn btn-lg pull-right"><a href="add_proemp.php">Insert Data</a></button>
		</div><br>
	</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from proj_employee";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Project ID</th><th>User Tag ID</th><th>Date Of Start</th><th>Date Of End</th><th>Edit</th><th>Delete</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["pid"]."</td><td>".$row["utid"]."</td><td>".$row["dos"]."</td><td>".$row["doe"]."</td><td><a class='btn btn-xs btn-success' href='update_proemp.php?id=".$row["peid"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='table_delete.php?id=".$row["peid"]."&d=pe'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
				
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>