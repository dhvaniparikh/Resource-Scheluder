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
					Pending Requests
				</small>
			</h1>
		</div>
	</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user_leave,user where user_leave.userid=user.userid and doapprove IS NULL and to_date !='0000-00-00';";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Apply</th><th>Leave From Date</th><th>Leave To Date</th><th>Reason</th><th>Approval</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["doapply"]."</td><td>".$row["from_date"]."</td><td>".$row["to_date"]."</td><td>".$row["reason"]."</td><td><a class='btn btn-xs btn-success' href='approve2_leave.php?id=".$row["leaveid"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td></tr>";
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>