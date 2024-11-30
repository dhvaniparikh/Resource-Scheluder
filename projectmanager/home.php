<?php
include_once("header.php");
?>
<body>
	<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Projects
								</small>
							</h1>
						</div>
		<?php
            $userid=$_SESSION["userid"];
            $cnn=mysqli_connect("localhost","root","","project");
            $qry1="select max(loginid) as loginid from login where userid=$userid";
            $result=$cnn->query($qry1);
            $row1=$result->fetch_assoc();
            $_SESSION["loginid"]=$row1["loginid"];

            
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select project.pid as pid ,pimg,ptitle from project,status,proj_status where status.status_id=proj_status.status_id and proj_status.pid=project.pid and status.status_id='1'";
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
<?php
include_once("footer.php");
?>