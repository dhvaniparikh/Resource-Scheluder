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
									Project Employee
								</small>
							</h1>
						</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select utid,dos,doe,ptitle,proj_sdate,proj_edate,ptype,pdesc,client from project,proj_employee where project.pid=proj_employee.pid";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Project Title</th><th>Project Type</th><th>Client</th><th>View</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["ptitle"]."</td><td>".$row["ptype"]."</td><td>".$row["client"]."</td><td><i class='fa fa-eye'></i></td></tr>";
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>
<?php
include_once("footer.php");
?>
