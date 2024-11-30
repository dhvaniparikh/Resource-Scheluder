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
									Employee
								</small>
							</h1>
						</div>
		<?php
            $id=$_GET["id"];
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user where rid=$id or rid='5' or rid='6' or rid='7' and job_status='working'";
            $result=$cnn->query($qry);
                    
                    $table="<table>";
                    $x=1;
                while($row=$result->fetch_assoc())
                    {
                        $userid=$row["userid"];
                        if($x==1)
                        {
                            $table.="<tr>";
                        }
                        $table.="<td style='padding:30px;'><a href='user_details.php?id=$userid'><img src=img\\".$row["userimg"]." height='200px' width='200px'><br>".$row["fname"]." ".$row["lname"]."</td>";
                        $x++;

                        if($x==5)
                        {
                            $table.="</tr>";
                            $x=1;
                        }
                    }
                    $table.="</table>";
                    echo $table;
		?>
	</body>
</html>

<?php
include_once("footer.php");
?>