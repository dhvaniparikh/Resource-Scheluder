<?php
include_once("header.php");
?>
<?php
    $id=$_GET["id"];
        $cnn=mysqli_connect("localhost","root","","project");
        $qry="select * from user,proj_employee where user.userid=proj_employee.userid and pid=$id";
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
            $table.="<td style='padding:30px;'><a href='user_details.php?id=$userid'><img src=img\\".$row["userimg"]." height='150px' width='150px'></a><br>".$row["fname"]."<br><a href=give_task.php?id=$userid&a=$id>Assign Task</td>";
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
<?php
include_once("footer.php");
?>