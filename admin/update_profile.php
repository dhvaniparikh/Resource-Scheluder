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
		$id=$_SESSION["userid"];
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from user where userid='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$a=$row["userid"];
		$b=$row["fname"];
        $c=$row["lname"];
        $d=$row["dob"];
        $e=$row["contact"];
        $f=$row["email"];
        $g=$row["address"];
        $h=$row["qualification"];
        $i=$row["username"];
		$k=$row["doj"];
			if(isset($_POST["btnsubmit"]))
			{
				$cnn=mysqli_connect("localhost","root","","project");
				$a=$_POST["txtuid"];
                $b=$_POST["txtfname"];
                $c=$_POST["txtlname"];
                $d=$_POST["txtdob"];
                $e=$_POST["txtcontact"];
                $f=$_POST["txtemail"];
                $g=$_POST["txtaddress"];
                $h=$_POST["txtqaulification"];
                $i=$_POST["txtusername"];
				$k=$_POST["txtdoj"];
				$qry="update user set userid='$a',fname='$b',lname='$c',dob='$d',contact='$e',email='$f',address='$g',qualification='$h',username='$i',doj='$k' where userid='$id'";
				$result=$cnn->query($qry);
				$yourURL="home.php";
				echo ("<script>location.href='$yourURL'</script>");
			}
	?>
	<form method="post" class="form-horizontal" action="">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Identification Code </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter User Identification Code" class="col-xs-10 col-sm-5" name="txtuid" value="<?php echo $a; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter First Name" class="col-xs-10 col-sm-5" name="txtfname" value="<?php echo $b; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Last Name" class="col-xs-10 col-sm-5" name="txtlname" value="<?php echo $c; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Birth </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Birth" class="col-xs-10 col-sm-5" name="txtdob" value="<?php echo $d; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact Number </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Contact Number" class="col-xs-10 col-sm-5" name="txtcontact" value="<?php echo $e; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Email ID" class="col-xs-10 col-sm-5" name="txtemail" value="<?php echo $f; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Address" class="col-xs-10 col-sm-5" name="txtaddress" value="<?php echo $g; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Qualification </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Qualification" class="col-xs-10 col-sm-5" name="txtqaulification" value="<?php echo $h; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Username" class="col-xs-10 col-sm-5" name="txtusername" value="<?php echo $i; ?>" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Join </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Join" class="col-xs-10 col-sm-5" name="txtdoj" value="<?php echo $k; ?>" required>
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
