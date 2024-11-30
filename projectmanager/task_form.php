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
                <?php
                    $id=$_GET["id"];
                    $uid=$_GET["uid"];
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from project where pid='$id'";
                    $result=$cnn->query($qry);
                    $table="<table>";
                    $x=1;
                    while($row=$result->fetch_assoc())
                    {
                        $pid=$row["pid"];
                       
                        $table.="<td><a href='project_details.php?id=$pid'><img src=img\\".$row["pimg"]." height='200px' width='200px'><br>".$row["ptitle"]."</td>";
                        
                    }
                    $table.="</table>";
                    echo $table;


                    $qry="select * from user where userid='$uid'";
                    $result=$cnn->query($qry);
                    $table="<table>";
                    $x=1;
                    while($row=$result->fetch_assoc())
                    {
                        $userid=$row["userid"];
                       
                        $table.="<h4>Assign Task to....</h4><tr><td><a href='user_details.php?id=$userid'><img src=img\\".$row['userimg']." height='100px' width='100px'></td><br><td>".$row["fname"]."</td>
                        <td>".$row["lname"]."</td></tr>";
                    }
                    $table.="</table>";
                    echo $table;
                    if(isset($_POST['btnsubmit']))
                    { 
                            $cnn=mysqli_connect("localhost","root","","project");
                            $t=$_POST['tasktitle'];
                            $a=$_POST['taskdetails'];
                            $b=$_POST['txtdos'];
                            $c=$_POST['txtdoe'];
                            $d=$_GET['id'];
                            $uid=$_GET["uid"];
                            $qry="INSERT INTO task (task_sdate,task_edate,task_title,task_details,pid,userid) VALUES ('$b','$c','$t','$a','$d','$userid')";
                            $result=$cnn->query($qry);
                            $yourURL="task_form.php?id=$d&uid=$uid";
                            echo ("<script>location.href='$yourURL'</script>");
                    }
                  
                    if(isset($_POST["btnsubmits1"]))
                    {
                           
                            $cnn=mysqli_connect("localhost","root","","project");
                            $mpic=$_FILES['file5']['name'];                        
                            $qry1="select max(taskid) as taskid from task";
                            $result=$cnn->query($qry1);
                            $row=$result->fetch_assoc();
                            $taskid=$row["taskid"];
                            $qry="INSERT INTO taskfiles (tfpath,taskid) VALUES ('$mpic','$taskid')";
                            $result=$cnn->query($qry);
                            $yourURL="home.php";
                            echo ("<script>location.href='$yourURL'</script>");

                            if($_FILES['file5']['name'] != "" )
                            {
                                move_uploaded_file($_FILES["file5"]["tmp_name"],
                                "img/" . $_FILES["file5"]["name"]);
                                echo "File is uploaded";	
                            }
                    } 
            ?>


            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task Name </label>

                    <div class="col-sm-9">
                        <input type="text" name="tasktitle" id="form-field-1" placeholder="Enter Task Name Here..." class="col-xs-10 col-sm-5">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task Details </label>

                    <div class="col-sm-9">
                        <input type="text" name="taskdetails" id="form-field-1" placeholder="Enter Task Details Here..." class="col-xs-10 col-sm-5">
                    </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Start </label>

                <div class="col-sm-9">
                    <input type="date" name="txtdos" id="form-field-1" placeholder="Enter Date Of Start" class="col-xs-10 col-sm-5">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of End </label>

                <div class="col-sm-9">
                    <input type="date" name="txtdoe" id="form-field-1" placeholder="Enter Date Of End" class="col-xs-10 col-sm-5">
                </div>
            </div>

            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" name="btnsubmit" class="btn btn-info">
                    
                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                    </button>
                </div>
            </div>
        </form>	  

        <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task File 1 </label>

                    <div class="col-sm-9">
                        <input type="file" name="file5" id="form-field-1" placeholder="Choose File" class="col-xs-10 col-sm-5">
                    </div>
                    <div><input type="submit" name="btnsubmits1" placeholder="Click Me"></div>
                </div>
        </form>    
    </body>
</html>
<?php
include_once("footer.php");
?>
