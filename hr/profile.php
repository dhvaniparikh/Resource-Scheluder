<?php
	include_once("header.php");
?>
<?php
		$id=$_SESSION["userid"];
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from user where userid='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$a=$row["username"];
		$b=$row["fname"];
        $c=$row["lname"];
        $d=$row["dob"];
        $e=$row["contact"];
        $f=$row["email"];
			if(isset($_POST["btnsubmit"]))
			{
				$cnn=mysqli_connect("localhost","root","","project");
                $b=$_POST["txtfname"];
                $c=$_POST["txtlname"];
                $d=$_POST["txtdob"];
                $e=$_POST["txtcontact"];
                $f=$_POST["txtemail"];
                $i=$_POST["txtusername"];
				$qry="update user set fname='$b',lname='$c',dob='$d',contact='$e',email='$f',username='$i' where userid='$id'";
				$result=$cnn->query($qry);
				$yourURL="home.php";
				echo ("<script>location.href='$yourURL'</script>");
			}
	if(isset($_POST["btnpasssubmit"]))
    {
        $newpass=$_POST["txtnewpass"];
        $conpass=$_POST["txtconpass"];
        if($newpass==$conpass)
        {
            if($newpass==$conpass)
            {
                $cnn=mysqli_connect("localhost","root","","project");
                $qry="UPDATE user set password='$newpass' where userid='$id'";
                $result=$cnn->query($qry);
                $yourURL="home.php";
				echo ("<script>location.href='$yourURL'</script>");
            }
        }
        else
        {
            echo "check your passwords and enter again.";
        }
    }
	?>

<div class="">
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<div class="well well-sm">
												<!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
												<!-- /<div class="inline middle blue bigger-110"> Your profile is 70% complete </div> -->

												<!-- &nbsp; &nbsp; &nbsp;
												<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
													<div class="progress-bar progress-bar-success" style="width:70%"></div>
												</div> -->
											<!-- </div>/.well -->

											<div class="space"></div>

											<form class="form-horizontal" method="post">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic" aria-expanded="true">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Basic Info
															</a>
														</li>

														<li class="">
															<a data-toggle="tab" href="#edit-password" aria-expanded="false">
																<i class="blue ace-icon fa fa-key bigger-125"></i>
																Password
															</a>
														</li>
													</ul> 
<br>
<br>
													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<label class="ace-file-input ace-file-multiple"><input type="file"><span class="ace-file-container" data-title="Change avatar"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-picture-o"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
																</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="txtusername" id="form-field-username" placeholder="Username" value="<?php echo $a; ?>">
																		</div>
																	</div>

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

																		<div class="col-sm-8">
																			<input class="input-small" type="text" id="form-field-first" name="txtfname" placeholder="First Name" value="<?php echo $b; ?>">
																			<input class="input-small" type="text" id="form-field-last" name="txtlname" placeholder="Last Name" value="<?php echo $c; ?>">
																		</div>
																	</div>
																	
																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-date">Birth Date</label>

																		<div class="col-sm-8">
																			<div class="input-medium">
																				<div class="input-group">
																					<input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" name="txtdob" placeholder="dd-mm-yyyy" value="<?php echo $d; ?>">
																					<span class="input-group-addon">
																						<i class="ace-icon fa fa-calendar"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="form-field-email" name="txtemail" value="<?php echo $f; ?>">
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-medium input-mask-phone" type="text" id="form-field-phone" name="txtcontact" value="<?php echo $e; ?>">
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>

														</div>

														<div id="edit-password" class="tab-pane">
															<div class="space-10"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass1" name="txtnewpass">
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass2" name="txtconpass">
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="submit" name="btnpasssubmit">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											</form>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

<?php
	include_once("footer.php");
?>