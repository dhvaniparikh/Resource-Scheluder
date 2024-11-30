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
			if(isset($_POST['btnsubmit']))
			{ 
                    $cnn=mysqli_connect("localhost","root","","project");
					$a=$_FILES['file1']['name'];
                    $b=$_POST['txtpt'];
                    $c=$_POST['txtdos'];
                    $d=$_POST['txtdoe'];
					$e=$_POST['txtptype'];
					$f=$_POST['txtpd'];
					$g=$_POST['txtc'];
                    $qry="INSERT INTO project (p_name,ptitle,proj_sdate,proj_edate,ptype,pdesc,client) VALUES ('$b','$c','$d','$e','$f','$g','$a')";
                    $result=$cnn->query($qry);
					if($_FILES['file1']['name'] != "" )
					{
						move_uploaded_file($_FILES["file1"]["tmp_name"],
						"img/" . $_FILES["file1"]["name"]);
						echo "File is uploaded";	
					}
					else
					{
						echo "File is not selected";
					}
                    //$yourURL="view_project.php";
					//echo ("<script>location.href='$yourURL'</script>");
            }
	?>
	<form method="post"  class="form-horizontal" action=""
		enctype="multipart/form-data">

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Title </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Title" class="col-xs-10 col-sm-5" name="txtpt" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Start </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of Start" class="col-xs-10 col-sm-5" name="txtdos" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of End </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" placeholder="Enter Date Of End" class="col-xs-10 col-sm-5" name="txtdoe" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Type </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Type" class="col-xs-10 col-sm-5" name="txtptype" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Description </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Project Description" class="col-xs-10 col-sm-5" name="txtpd" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Client </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Client" class="col-xs-10 col-sm-5" name="txtc" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Logo </label>

					<div class="col-sm-9">
						<input type="file" id="form-field-1" class="col-xs-10 col-sm-5" name="file1" required>
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
