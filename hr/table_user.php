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
					Users
				</small>
			</h1>
		</div>
		<div class="col-md-2">
					<button class="btn btn-lg pull-right"><a href="add_user.php">Insert Data</a></button>
		</div><br>
	</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Contact Number</th><th>Email ID</th><th>Address</th><th>Qualification</th><th>Username</th><th>Date Of Join</th><th>Role In Company</th><th>Edit</th><th>Delete</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["dob"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["qualification"]."</td><td>".$row["username"]."</td><td>".$row["doj"]."</td><td>".$row["rid"]."</td><td><a class='btn btn-xs btn-success' href='update_user.php?id=".$row["userid"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='table_delete.php?id=".$row["userid"]."&d=u'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>