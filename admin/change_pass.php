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
    $pass=$row["password"];
    if(isset($_POST["btnsubmit"]))
    {
        $oldpass=$_POST["txtoldpass"];
        $newpass=$_POST["txtnewpass"];
        $conpass=$_POST["txtconpass"];
        if($pass==$oldpass)
        {
            if($newpass==$conpass)
            {
                $cnn=mysqli_connect("localhost","root","","project");
                $qry="UPDATE user set password='$newpass' where userid='$id'";
                $result=$cnn->query($qry);
                $yourURL="../login.php";
				echo ("<script>location.href='$yourURL'</script>");
            }
            else
            {
                echo "check your new password and try again.";
            }
        }
        else
        {
            echo "check your old password and try again.";
        }
    }
?>
<form method="post" class="form-horizontal" action="">

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Old Password </label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" placeholder="Enter Old Password Here" class="col-xs-10 col-sm-5" name="txtoldpass" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> New Password </label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" placeholder="Enter New Password Here" class="col-xs-10 col-sm-5" name="txtnewpass" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Confirm New Password </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Confirm New Password Here" class="col-xs-10 col-sm-5" name="txtconpass" required>
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
