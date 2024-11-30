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
            $id=$_GET["id"];
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select project.pid as pid ,pimg,ptitle from project,status,proj_status where status.status_id=proj_status.status_id and proj_status.pid=project.pid and status.status_id='$id'";
            $result=$cnn->query($qry);
                    
                    $table="<table>";
                    $x=1;
                while($row=$result->fetch_assoc())
                    {
						$pid=$row["pid"];
                        if($x==1)
                        {
                            $table.="<tr>";
                        }
                        $table.="<td style='padding:30px;'><a href='view_project.php?id=$pid'><img src=img\\".$row["pimg"]." height='150px' width='150px'><br>".$row["ptitle"]."</td>";
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