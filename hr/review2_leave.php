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
					Reviewed Requests
				</small>
			</h1>
		</div>
	</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user_leave,user where user_leave.userid=user.userid and to_date !='0000-00-00' and doapprove !='0000-00-00'";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Apply</th><th>Leave From Date</th><th>Leave To Date</th><th>Reason</th><th>Approval</th>
            <th>Notes</th><th>Date Of Approve</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["doapply"]."</td><td>".$row["from_date"]."</td><td>".$row["to_date"]."</td><td>".$row["reason"]."</td><td>".$row["isapprove"]."</td>
                <td>".$row["notes"]."</td><td>".$row["doapprove"]."</td></tr>";
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>