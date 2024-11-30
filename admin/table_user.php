<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Users
								</small>
							</h1>
						</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Contact Number</th><th>Email ID</th><th>Address</th><th>Qualification</th><th>Username</th><th>Date Of Join</th><th>Role In Company</th>></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["dob"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["qualification"]."</td><td>".$row["username"]."</td><td>".$row["doj"]."</td><td>".$row["rid"]."</td></tr>";
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>