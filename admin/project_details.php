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
    <?php
			
    ?>
    <body>
    <div class="row">
                <?php
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from project";
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
        
    </div>          

    </body>
</html>
<?php
include_once("footer.php");
?>
