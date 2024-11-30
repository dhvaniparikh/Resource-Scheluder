<?php
include_once("header.php");
?>
<?php
    $id=$_GET["id"];
    $cnn=mysqli_connect("localhost","root","","project");
	$qry="select * from task,project where task.pid=project.pid and taskid=$id";
    $result=$cnn->query($qry);
    $row=$result->fetch_assoc();
	$tasksdate=$row["task_sdate"];
	$taskedate=$row["task_edate"];
	$pimg=$row["pimg"];
	$ptitle=$row["ptitle"];
    $title=$row["task_title"];
    $details=$row["task_details"];
?>
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="img-responsive" alt="Project Image" src="img\\<?php echo $pimg; ?>">
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
															<span class="white"><?php echo $ptitle?></span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-9">
                                                <div class="center">
											</div>

                                            <div class="space-12"></div>
                                                <div class="center">

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Task Title </div>

													<div class="profile-info-value">
														<span class="" id="fname"><?php echo $title?></span>
													</div>
                                                </div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Task Details </div>

													<div class="profile-info-value">
														<span class="" id="lname"><?php echo $details?></span>
													</div>
                                                </div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Task Start Date </div>

													<div class="profile-info-value">
														<span class="" id="contact"><?php echo $tasksdate?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Task End Date </div>

													<div class="profile-info-value">
														<span class="" id="email"><?php echo $taskedate?></span>
													</div>
												</div>

											</div>
							
										</div>
									</div>
								</div>
	<?php
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from status";
		$result=$cnn->query($qry);
		if(isset($_POST["btnsubmit"]))
		{
			$date = date('Y-m-d');
			$a=$_POST["cmbblock"];
			$cnn=mysqli_connect("localhost","root","","project");
			$qry="update task set status_id='$a',sub_date='$date' where taskid='$id'";
			$result=$cnn->query($qry);
			$yourURL="home.php";
            echo ("<script>location.href='$yourURL'</script>");
		}
	?>
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
				<div class="col-sm-2">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Task Status: </label>
				</div>
				<select name="cmbblock" class="col-sm-3 control-label no-padding-right"for="form-field-1">
					<?php
					while($row=$result->fetch_assoc())
					{
						echo "<option value=".$row["status_id"].">".$row["status_name"]."</option>";
					}
					?> 
				</select>
				</div>
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" name="btnsubmit" class="btn btn-info">
				</div>
		</form>
<?php
include_once("footer.php");
?>
