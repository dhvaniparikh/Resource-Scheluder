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
			if(isset($_POST['btnsubmit']))
			{ 
                    $cnn=mysqli_connect("localhost","root","","project");
                    $a=$_POST['txttaskid'];
                    $b=$_POST['txtdos'];
                    $c=$_POST['txtdoe'];
                    $d=$_POST['txtstatus'];
                    $e=$_POST['txtpid'];
                    $qry="INSERT INTO task (taskid,task_sdate,task_edate,taskstatus,pid) VALUES ('$a','$b','$c','$d','$e')";
                    $result=$cnn->query($qry);
                    $yourURL="table_task.php";
					echo ("<script>location.href='$yourURL'</script>");
            }
	?>
	<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task ID </label>

										<div class="col-sm-9">
											<input type="text" name="txttaskid" id="form-field-1" placeholder="Enter Task ID" class="col-xs-10 col-sm-5">
										</div>
									</div>

									<div class="space-4"></div>

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

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task Status </label>

										<div class="col-sm-9">
											<input type="text" name="txtstatus" id="form-field-1" placeholder="Enter Task Status" class="col-xs-10 col-sm-5">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project ID </label>

										<div class="col-sm-9">
											<input type="text" name="txtpid" id="form-field-1" placeholder="Enter Project ID" class="col-xs-10 col-sm-5">
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
