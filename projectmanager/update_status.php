<?php
include_once("header.php");
?>
<?php
$id=$_GET["id"];
$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from status where status_id='$id'";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		$Statusid=$row["status_id"];
		$Statusname=$row["status_name"];
if(isset($_POST["btnsubmit"]))
{
	$statusid=$_POST["txtstatusid"];
	$statusname=$_POST["txtstatusname"];
    $cnn=mysqli_connect("localhost","root","","project");
	$qry="Update Status set status_id='$statusid',status_name='$statusname' where status_id='$id'";
	$result=$cnn->query($qry);
    $yourURL="table_status.php";
	echo ("<script>location.href='$yourURL'</script>");
}
?>
<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status ID </label>

										<div class="col-sm-9">
											<input type="text" name="txtstatusid" id="form-field-1" placeholder="Enter Status ID" class="col-xs-10 col-sm-5" value="<?php echo $Statusid; ?>">
										</div>
									</div>

									<div class="space-4"></div>

    	                               <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status Name </label>

										<div class="col-sm-9">
											<input type="text" name="txtstatusname" id="form-field-1" placeholder="Enter Status Name" class="col-xs-10 col-sm-5" value="<?php echo $Statusname; ?>">
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

</form>				
    <?php
    include_once("footer.php");
    ?>