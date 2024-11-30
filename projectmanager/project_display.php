<?php
include_once("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Project Details</title>
        <style>
            /* img 
            {
                height : 250px;
                width : 250px;
                margin-top : 20px;
                margin-right : 20px;
            } */
        </style>
    </head>
    
    <body>
        <div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Project status
								</small>
							</h1>
						</div>
    <div class="row">
                <?php
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from status where status_id='2' or status_id='3'";
                    $result=$cnn->query($qry);
                    
                    $table="<table>";
                    $x=1;
                while($row=$result->fetch_assoc())
                    {
                        $statusid=$row["status_id"];
                        if($x==1)
                        {
                            $table.="<tr>";
                        }
                        $table.="<td style='padding:30px;'><a href='project_details.php?id=$statusid'><img src=img\\".$row["status_img"]." height='150px' width='150px'><br>".$row["status_name"]."</td>";
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
        
    </div>          

    </body>
</html>
<?php
include_once("footer.php");
?>
