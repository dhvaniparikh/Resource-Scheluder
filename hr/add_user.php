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
                    $a=$_POST["txtuid"];
					$b=$_POST["txtfname"];
					$c=$_POST["txtlname"];
					$d=$_POST["txtdob"];
					$e=$_POST["txtcontact"];
					$f=$_POST["txtemail"];
					$g=$_POST["txtaddress"];
					$h=$_POST["txtqaulification"];
					$i=$_POST["txtusername"];
					$j=$_POST["txtpassword"];
					$k=$_POST["txtdoj"];
					$l=$_POST["txtrid"];
                    $qry="INSERT INTO user (userid,fname,lname,dob,contact,email,address,qualification,username,password,doj,rid) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
                    $result=$cnn->query($qry);
                    $yourURL="table_user.php";
					echo ("<script>location.href='$yourURL'</script>");
            }
	?>
	<form method="post" class="form-horizontal" action="">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Identification Code </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter User Identification Code" class="col-xs-10 col-sm-5" name="txtuid" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter First Name" class="col-xs-10 col-sm-5" name="txtfname" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Last Name" class="col-xs-10 col-sm-5" name="txtlname" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Birth </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Birth" class="col-xs-10 col-sm-5" name="txtdob" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact Number </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Contact Number" class="col-xs-10 col-sm-5" name="txtcontact" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Email ID" class="col-xs-10 col-sm-5" name="txtemail" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Address" class="col-xs-10 col-sm-5" name="txtaddress" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Qualification </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Qualification" class="col-xs-10 col-sm-5" name="txtqaulification" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Username" class="col-xs-10 col-sm-5" name="txtusername" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" placeholder="Enter Password" class="col-xs-10 col-sm-5" name="txtpassword" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Join </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Join" class="col-xs-10 col-sm-5" name="txtdoj" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role ID </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Role ID" class="col-xs-10 col-sm-5" name="txtrid" required>
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
