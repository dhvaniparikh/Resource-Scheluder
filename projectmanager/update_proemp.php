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
		$qry="select * from proj_employee where peid='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$x=$row["peid"];
		$y=$row["pid"];
		$z=$row["utid"];
		$ds=$row["dos"];
		$de=$row["doe"];
			if(isset($_POST["btnsubmit"]))
			{
				$cnn=mysqli_connect("localhost","root","","project");
				$x=$_POST["txtpeid"];
				$y=$_POST["txtpid"];
				$z=$_POST["txtutid"];
				$ds=$_POST["txtdos"];
				$de=$_POST["txtdoe"];
				$qry="update proj_employee set peid='$x',pid='$y',utid='$z',dos='$ds',doe='$de' where peid='$id'";
				$result=$cnn->query($qry);
				$yourURL="table_proemp.php";
				echo ("<script>location.href='$yourURL'</script>");
			}
	?>
	<form method="post" class="form-horizontal" action="">
	<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Employee ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Employee ID" class="col-xs-10 col-sm-5" name="txtpeid" value="<?php echo $x; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project ID" class="col-xs-10 col-sm-5" name="txtpid" value="<?php echo $y; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Tag ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter User Tag ID" class="col-xs-10 col-sm-5" name="txtutid" value="<?php echo $z; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Start </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Start" class="col-xs-10 col-sm-5" name="txtdos" value="<?php echo $ds; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of End </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of End" class="col-xs-10 col-sm-5" name="txtdoe" value="<?php echo $de; ?>" required>
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
