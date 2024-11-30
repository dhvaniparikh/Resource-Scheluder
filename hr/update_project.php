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
		$qry="select * from project where pid='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$a=$row["pid"];
		$b=$row["ptitle"];
        $c=$row["proj_sdate"];
        $d=$row["proj_edate"];
		$e=$row["ptype"];
		$f=$row["pdesc"];
		$g=$row["client"];
			if(isset($_POST["btnsubmit"]))
			{
				$cnn=mysqli_connect("localhost","root","","project");
				$a=$_POST['txtpid'];
                $b=$_POST['txtpt'];
                $c=$_POST['txtdos'];
                $d=$_POST['txtdoe'];
				$e=$_POST['txtptype'];
				$f=$_POST['txtpd'];
				$g=$_POST['txtc'];
                $qry="update project set pid='$a',ptitle='$b',proj_sdate='$c',proj_edate='$d',ptype='$e',pdesc='$f',client='$g' where pid='$a'";
				$result=$cnn->query($qry);
				$yourURL="table_project.php";
				echo ("<script>location.href='$yourURL'</script>");
			}
	?>
	<form method="post" class="form-horizontal" action="">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project ID" class="col-xs-10 col-sm-5" name="txtpid" value="<?php echo $a; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Title </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Title" class="col-xs-10 col-sm-5" name="txtpt" value="<?php echo $b; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Start </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Start" class="col-xs-10 col-sm-5" name="txtdos" value="<?php echo $c; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of End </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of End" class="col-xs-10 col-sm-5" name="txtdoe" value="<?php echo $d; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Type </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Type" class="col-xs-10 col-sm-5" name="txtptype" value="<?php echo $e; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Description </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Description" class="col-xs-10 col-sm-5" name="txtpd" value="<?php echo $f; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Client </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Client" class="col-xs-10 col-sm-5" name="txtc" value="<?php echo $g; ?>" required>
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
