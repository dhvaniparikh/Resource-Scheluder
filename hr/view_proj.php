<?php
include_once("header.php");
?>

<?php
    $id=$_GET["id"];
    $cnn=mysqli_connect("localhost","root","","project");
	$qry="select * from project where pid='$id'";
    $result=$cnn->query($qry);
	$row=$result->fetch_assoc();
    $img=$row["pimg"];
    $ptitle=$row["ptitle"];
    $ptype=$row["ptype"];
    $pdesc=$row["pdesc"];
	$client=$row["client"];
?>
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="img-responsive" alt="Project Image" src="img\\<?php echo $img; ?>">
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
													<div class="profile-info-name"> Project Type </div>

													<div class="profile-info-value">
														<span class="" id="ptype"><?php echo $ptype?></span>
													</div>
                                                </div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Project Description </div>

													<div class="profile-info-value">
														<span class="" id="pdesc"><?php echo $pdesc?></span>
													</div>
                                                </div>
                                                
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Client </div>

													<div class="profile-info-value">
														<span class="" id="client"><?php echo $client?></span>
													</div>
												</div>

											</div>
							
										</div>
									</div>
                        
									<?php
										$cnn=mysqli_connect("localhost","root","","project");
										$qry1="select techpic from proj_technology,technology where proj_technology.techid=technology.techid and pid='$id'";
										$result=$cnn->query($qry1);
										$table="<table>";
										while($row1=$result->fetch_assoc())
										{
											$table.="<tr>Technology Used:</tr><br><tr><img src=img\\".$row1["techpic"]." height='100px' width='100px'></tr>";
										}
										$table.="</table>";
										echo $table;
											
									?>
                                    
								</div>
						
<?php
include_once("footer.php");
?>
