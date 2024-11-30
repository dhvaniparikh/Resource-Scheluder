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
							<h4>Required Task Files</h4>
	<?php
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from taskfiles where taskid=$id";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$tfpath=$row["tfpath"];
		echo "<a href='../projectmanager/img/$tfpath'>$tfpath</a>";
	?>
<?php
include_once("footer.php");
?>
