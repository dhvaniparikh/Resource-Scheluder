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
                    $a=$_POST['txtpeid'];
                    $b=$_POST['txtpid'];
                    $c=$_POST['txtutid'];
                    $d=$_POST['txtdos'];
                    $e=$_POST['txtdoe'];
                    $qry="INSERT INTO proj_employee (peid,pid,utid,dos,doe) VALUES ('$a','$b','$c','$d','$e')";
                    $result=$cnn->query($qry);
                    $yourURL="table_proemp.php";
					echo ("<script>location.href='$yourURL'</script>");
            }
	?>
	<form method="post" class="form-horizontal" action="">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Employee ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Employee ID" class="col-xs-10 col-sm-5" name="txtpeid" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project ID" class="col-xs-10 col-sm-5" name="txtpid" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Tag ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter User Tag ID" class="col-xs-10 col-sm-5" name="txtutid" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Start </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Start" class="col-xs-10 col-sm-5" name="txtdos" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of End </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of End" class="col-xs-10 col-sm-5" name="txtdoe" required>
					</div>
			</div>
			
			<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="btnsubmit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

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
