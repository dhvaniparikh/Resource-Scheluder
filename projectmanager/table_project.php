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
									Project
								</small>
							</h1>
						</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from project";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Project Title</th><th>Date Of Start</th><th>Date Of End</th><th>Project type</th><th>Project Description</th><th>Client</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["ptitle"]."</td><td>".$row["proj_sdate"]."</td><td>".$row["proj_edate"]."</td><td>".$row["ptype"]."</td><td>".$row["pdesc"]."</td><td>".$row["client"]."</td></tr>";
				
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>