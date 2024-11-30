<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<div class="row page-header">
		<div class="col-md-10">
			<h1>
				Tables
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Task
				</small>
			</h1>
		</div>
	</div>
		<?php
            $id=$_GET["id"];
            $pid=$_GET["a"];
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from task,user where task.userid=user.userid and task.userid=$id";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>Date Of Start</th><th>Date Of End</th><th>Task Details</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["task_sdate"]."</td><td>".$row["task_edate"]."</td><td>".$row["task_details"]."</td></tr>";
			}
            $str.="</table>";
            echo $str;	
            if(isset($_POST["btnsubmit"]))
            {
                $cnn=mysqli_connect("localhost","root","","project");
                $t=$_POST['tasktitle'];
                $x=$_POST["txtdetails"];
                $y=$_POST["txtdos"];
                $z=$_POST["txtdoe"];
                $qry="INSERT INTO task (task_sdate,task_edate,task_title,task_details,pid,userid) VALUES ('$y','$z','$t','$x','$pid','$id')";
                $result=$cnn->query($qry);
                $yourURL="pm_task.php";
                echo ("<script>location.href='$yourURL'</script>");
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
                        <input type="text" name="txtdetails" id="form-field-1" placeholder="Enter Task Details Here..." class="col-xs-10 col-sm-5">
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

	</body>
</html>

<?php
include_once("footer.php");
?>