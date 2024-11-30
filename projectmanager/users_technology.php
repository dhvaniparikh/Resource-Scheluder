<?php
include_once("header.php");
?>
<body>
	<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Technology
								</small>
							</h1>
						</div>
		<?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from technology";
            $result=$cnn->query($qry);
                    
                    $table="<table>";
                    $x=1;
                while($row=$result->fetch_assoc())
                    {
                        $techid=$row["techid"];
                        if($x==1)
                        {
                            $table.="<tr>";
                        }
                        $table.="<td style='padding:30px;'><a href='users_tech.php?id=$techid'><img src=img\\".$row["techpic"]." height='150px' width='150px'><br>".$row["techname"]."</td>";
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