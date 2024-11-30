<?php
include_once("header.php");
?>
    <form method="post" class="form-horizontal" action="user_proj1.php">
    <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Title </label>

			<div class="col-sm-9">
			<select name="cmbblock" class="col-sm-3 control-label no-padding-right"for="form-field-1">
					<?php
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from project";
                    $result=$cnn->query($qry);
                    $row=$result->fetch_assoc();
                    if(isset($_POST["btnsubmit"]))
                    {
                    $proj=$_POST["cmbblock"];
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from project,proj_employee,user,role where user.rid=role.rid and project.pid=proj_employee.pid and proj_employee.userid=user.userid and project.pid='$proj' and job_status='working'";
                    $result=$cnn->query($qry);
                    }
					while($row=$result->fetch_assoc())
					{
						echo "<option value=".$row["pid"].">".$row["ptitle"]."</option>";
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