<?php
include_once("header.php");
?>
    <?php
        $pid=$_GET["id"];
        $userid=$_GET["a"];
        $cnn=mysqli_connect("localhost","root","","project");
        $qry="select * from project where pid=$pid";
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
                        $table.="<td><a href='project_form.php?id=$pid'><img src=img\\".$row["pimg"]." height='200px' width='200px'><br>".$row["ptitle"]."</td>";
                        $x++;

                        if($x==5)
                        {
                            $table.="</tr>";
                            $x=1;
                        }
                    }
                    $table.="</table>";
                    echo $table;

        $cnn=mysqli_connect("localhost","root","","project");
        $qry="select * from user where userid=$userid";
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
            $table.="<td><a href='user_details.php?id=$userid'><img src=img\\".$row["userimg"]." height='200px' width='200px'></a><br>".$row["fname"]."<br><a href=pm_project.php?id=$userid>add</td>";
            $x++;

            if($x==5)
            {
                $table.="</tr>";
                $x=1;
            }
        }
        $table.="</table>";
        echo $table;
        if(isset($_POST['btnsubmit']))
        {
            $c=$_POST['txtdos'];
            $d=$_POST['txtdoe'];
            $cnn=mysqli_connect("localhost","root","","project");
            $qry="INSERT INTO proj_employee (pid,userid,dos,doe) VALUES ('$pid','$userid','$c','$d')";
            $result=$cnn->query($qry);
            $yourURL="users_technology.php";
			echo ("<script>location.href='$yourURL'</script>");
        }
    ?>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

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
<?php
include_once("footer.php");
?>