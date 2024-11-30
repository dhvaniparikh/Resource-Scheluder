<?php
include_once("header.php");
?>

<form method="post" class="form-horizontal" action="user_name1.php">
    <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Name </label>

			<div class="col-sm-9">
			<select name="cmbblock" class="col-sm-3 control-label no-padding-right"for="form-field-1">
					<?php
					$cnn=mysqli_connect("localhost","root","","project");
					$qry="select * from user where job_status='working'";
					$result=$cnn->query($qry);
					$row=$result->fetch_assoc();
					if(isset($_POST["btnsubmit"]))
					{
						$name=$_POST["cmbblock"];
						$cnn=mysqli_connect("localhost","root","","project");
						$qry="select * from user,role where user.rid=role.rid and userid='$name' and job_status='working'";
						$result=$cnn->query($qry);
						$str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Role In Company</th><th>View More</th></tr>";
					}
					while($row=$result->fetch_assoc())
					{
						echo "<option value=".$row["userid"].">".$row["fname"]." ".$row["lname"]."</option>";
					}
					?>
				</select>
			</div>
			</div>
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" name="btnsubmit" class="btn btn-info">
				</div>
		</form>
    
<?php
include_once("footer.php");
?>