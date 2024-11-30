<?php
include_once("header.php");
?>
<?php
    $id=$_GET["id"];
        $cnn=mysqli_connect("localhost","root","","project");
        $qry="select * from user,technology,user_technology where user.userid=user_technology.userid and user_technology.techid=technology.techid and technology.techid='$id' and job_status='working'";
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
            $table.="<td style='padding:30px;'><a href='user_details.php?id=$userid'><img src=img\\".$row["userimg"]." height='150px' width='150px'></a><br>".$row["fname"]."<br><a href=pm_project.php?id=$userid>add</td>";
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