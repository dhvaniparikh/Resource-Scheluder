<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$id=$_GET["id"];
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from task where taskid='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$a=$row["taskid"];
		$b=$row["task_sdate"];
		$c=$row["task_edate"];
		$d=$row["taskstatus"];
		$e=$row["pid"];
			if(isset($_POST["btnsubmit"]))
			{
				$cnn=mysqli_connect("localhost","root","","project");
				$a=$_POST["txttaskid"];
				$b=$_POST["txtdos"];
				$c=$_POST["txtdoe"];
				$d=$_POST["txtstatus"];
				$e=$_POST["txtpid"];
				$qry="update task set taskid='$a',task_sdate='$b',task_edate='$c',taskstatus='$d',pid='$e' where taskid='$id'";
				$result=$cnn->query($qry);
				$yourURL="table_task.php";
				echo ("<script>location.href='$yourURL'</script>");
			}
	?>
	<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task ID </label>

										<div class="col-sm-9">
											<input type="text" name="txttaskid" id="form-field-1" placeholder="Enter Task ID" class="col-xs-10 col-sm-5" value="<?php echo $a; ?>">
										</div>
									</div>

									<div class="space-4"></div>

    	                               <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Start </label>

										<div class="col-sm-9">
											<input type="date" name="txtdos" id="form-field-1" placeholder="Enter Date Of Start" class="col-xs-10 col-sm-5" value="<?php echo $b; ?>">
										</div>
									   </div>

									   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of End </label>

										<div class="col-sm-9">
											<input type="date" name="txtdoe" id="form-field-1" placeholder="Enter Date Of End" class="col-xs-10 col-sm-5" value="<?php echo $c; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task Status </label>

										<div class="col-sm-9">
											<input type="text" name="txtstatus" id="form-field-1" placeholder="Enter Task Status" class="col-xs-10 col-sm-5" value="<?php echo $d; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project ID </label>

										<div class="col-sm-9">
											<input type="text" name="txtpid" id="form-field-1" placeholder="Enter Project ID" class="col-xs-10 col-sm-5" value="<?php echo $e; ?>">
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
