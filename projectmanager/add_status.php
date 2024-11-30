<?php
include_once("header.php");
?>
<?php
if(isset($_POST['btnsubmit']))
			{ 
                    $cnn=mysqli_connect("localhost","root","","project");
                   	$Statusid=$_POST['txtstatusid'];
                    $Statusname=$_POST['txtstatusname'];
                    $qry="INSERT INTO Status (status_id,status_name) VALUES ('$Statusid','$Statusname')";
					$result=$cnn->query($qry);
					$yourURL="table_status.php";
					echo ("<script>location.href='$yourURL'</script>");
            }
?>
<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status ID </label>

										<div class="col-sm-9">
											<input type="text" name="txtstatusid" id="form-field-1" placeholder="Enter Status ID" class="col-xs-10 col-sm-5">
										</div>
									</div>

									<div class="space-4"></div>

    	                               <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> status Name </label>

										<div class="col-sm-9">
											<input type="text" name="txtstatusname" id="form-field-1" placeholder="Enter Status Name" class="col-xs-10 col-sm-5">
										</div>
									   </div>

									<div class="space-4"></div>

								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
                                            <input type="submit" name="btnsubmit" class="btn btn-info">
											
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									
    <?php
    include_once("footer.php");
    ?>