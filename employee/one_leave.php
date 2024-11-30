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
            $userid=$_SESSION["userid"];
			if(isset($_POST['btnsubmit']))
			{ 
                    $date=date('Y-m-d');
                    $cnn=mysqli_connect("localhost","root","","project");
                    $a=$_POST['txtlod'];
                    $b=$_POST['txtreason'];
                    $qry="INSERT INTO user_leave (userid,doapply,from_date,to_date,reason,isapprove,notes,doapprove) VALUES ('$userid','$date','$a','','$b','','','')";
                    $result=$cnn->query($qry);
                    $yourURL="user_leave.php";
					echo ("<script>location.href='$yourURL'</script>");
            }
	?>
	<form method="post" class="form-horizontal" action="">

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Leave On Date </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Leave Date" class="col-xs-10 col-sm-5" name="txtlod" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Reason </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Reason" class="col-xs-10 col-sm-5" name="txtreason" required>
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
