<?php
include_once("header.php");
?>

    <form method="post" class="form-horizontal" action="user_desg1.php">
    <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Designation </label>

			<div class="col-sm-9">
			<select name="cmbblock" class="col-sm-3 control-label no-padding-right"for="form-field-1">

					<?php
            
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from role";
                    $result=$cnn->query($qry);
                    $row=$result->fetch_assoc();
                    if(isset($_POST["btnsubmit"]))
                    {
                    $desg=$_POST["cmbblock"];
                    $cnn=mysqli_connect("localhost","root","","project");
                    $qry="select * from user,role where user.rid=role.rid and role.rid='$desg' and job_status='working'";
                    $result=$cnn->query($qry);
                    $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Role In Company</th><th>View More</th></tr>";
                            while($row=$result->fetch_assoc())
                            {			
                                $str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["rname"]."</td><td><a href='user_details.php?id=".$row["userid"]."'><i class='fa fa-eye' aria-hidden='true'></i></a></td></tr>";
                            }
                            $str.="</table>";
                            echo $str;	
                    }
        while($row=$result->fetch_assoc())
					{
						echo "<option value=".$row["rid"].">".$row["rname"]."</option>";
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