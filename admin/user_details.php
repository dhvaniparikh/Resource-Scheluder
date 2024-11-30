<?php
include_once("header.php");
?>
<?php
    $id=$_GET["id"];
    $cnn=mysqli_connect("localhost","root","","project");
	$qry="select * from user where userid='$id'";
    $result=$cnn->query($qry);
    $row=$result->fetch_assoc();
    $userimg=$row["userimg"];
    $fname=$row["fname"];
    $lname=$row["lname"];
    $contact=$row["contact"];
    $email=$row["email"];
    $dob=$row["dob"];
    $address=$row["address"];
    $qualification=$row["qualification"];
    $doj=$row["doj"];
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
													<div class="profile-info-name"> Contact Number </div>

													<div class="profile-info-value">
														<span class="" id="contact"><?php echo $contact?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Email ID </div>

													<div class="profile-info-value">
														<span class="" id="email"><?php echo $email?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Date Of Birth </div>

													<div class="profile-info-value">
														<span class="" id="dob"><?php echo $dob?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Address </div>

													<div class="profile-info-value">
														<span class="" id="address"><?php echo $address?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Qualification </div>

													<div class="profile-info-value">
														<span class="" id="qualification"><?php echo $qualification?></span>
													</div>
												</div>

                                                <div class="profile-info-row">
													<div class="profile-info-name"> Date Of Join </div>

													<div class="profile-info-value">
														<span class="" id="doj"><?php echo $doj?></span>
													</div>
												</div>

											</div>
							
										</div>
									</div>
								</div>
<?php
include_once("footer.php");
?>
