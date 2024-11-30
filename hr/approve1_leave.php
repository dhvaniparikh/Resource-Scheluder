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
		$qry="select * from user_leave,user where user_leave.userid=user.userid and leaveid='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$userimg=$row["userimg"];
		$fname=$row["fname"];
        $lname=$row["lname"];
        $doapply=$row["doapply"];
		$ldate=$row["from_date"];
		$reason=$row["reason"];
			if(isset($_POST["btnsubmit"]))
			{
                $date=date('Y-m-d');
				$cnn=mysqli_connect("localhost","root","","project");
				$a=$_POST['txtapproval'];
                $b=$_POST['txtnotes'];
                $qry="update user_leave set isapprove='$a',notes='$b',doapprove='$date' where leaveid='$id'";
				$result=$cnn->query($qry);
				$yourURL="pen1_leave.php";
				echo ("<script>location.href='$yourURL'</script>");
			}
	?>
    <div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="img-responsive" alt="User Image" src="img\\<?php echo $userimg; ?>">
												</span>
											</div>

										</div>

										<div class="col-xs-12 col-sm-9">
                                                <div class="center">
											</div>

                                            <div class="space-12"></div>
                                                <div class="center">

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> First Name </div>

													<div class="profile-info-value">
														<span class="" id="fname"><?php echo $fname?></span>
													</div>
                                                </div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Last Name </div>

													<div class="profile-info-value">
														<span class="" id="lname"><?php echo $lname?></span>
													</div>
                                                </div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Date Of Apply </div>

													<div class="profile-info-value">
														<span class="" id="doapply"><?php echo $doapply?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Leave On Date </div>

													<div class="profile-info-value">
														<span class="" id="ldate"><?php echo $ldate?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Reason </div>

													<div class="profile-info-value">
														<span class="" id="reason"><?php echo $reason?></span>
													</div>
												</div>

											</div>
							
										</div>
									</div>
								</div>
	<form method="post" class="form-horizontal" action="">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Approval </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Approval Status" class="col-xs-10 col-sm-5" name="txtapproval" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Notes </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Additional Note" class="col-xs-10 col-sm-5" name="txtnotes" required>
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
