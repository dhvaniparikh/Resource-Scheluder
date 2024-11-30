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
            $cnn=mysqli_connect("localhost","root","","project");
            $qry="select project.pid as pid ,pimg,ptitle from project";
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
                        $table.="<td style='padding:30px;'><a href='view_proj.php?id=$pid'><img src=img\\".$row["pimg"]." height='150px' width='150px'><br>".$row["ptitle"]."</td>";
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