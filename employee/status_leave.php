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
									Leave Details
								</small>
							</h1>
						</div>
		<?php
            $userid=$_SESSION["userid"];
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user_leave where userid=$userid";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Date Of Apply</th><th>Date Of Start</th><th>Date Of End</th><th>Reason</th><th>Approval</th><th>Notes</th><th>Date Of Approval</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["doapply"]."</td><td>".$row["from_date"]."</td><td>".$row["to_date"]."</td><td>".$row["reason"]."</td><td>".$row["isapprove"]."</td><td>".$row["notes"]."</td><td>".$row["doapprove"]."</td></tr>";
				
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>