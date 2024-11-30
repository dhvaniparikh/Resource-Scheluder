<?php
include_once("header.php");
?>
<body>
		<?php
            $id=$_GET["id"];
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
                        $table.="<td style='padding:30px;'><a href='project_form.php?id=$pid&a=$id'><img src=img\\".$row["pimg"]." height='150px' width='150px'><br>".$row["ptitle"]."</td>";
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