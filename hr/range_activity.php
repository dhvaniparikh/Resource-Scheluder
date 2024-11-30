
<?php
include_once("header.php");
?>
    <body>
	<div class="row page-header">
		<div class="col-md-10">
			<h1>
				Tables
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Activity By Range
				</small>
			</h1>
		</div>
    </div>
	<?php
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from user";
		$result=$cnn->query($qry);
		$row=$result->fetch_assoc();
		if(isset($_POST['btnsubmit']))
		{
			$cnn=mysqli_connect("localhost","root","","project");
			//$a=$_POST['txtfname'];
			//$b=$_POST['txtlname'];
			$c=$_POST['txtdos'];
			$d=$_POST["txtdoe"];
            $e=$_POST["cmbblock"];
			//$new_date = date("Y-m-d H:i:s",strtotime($c));
			//echo $new_date;
			$qry="select * from login,user where user.userid=login.userid and user.userid='$e' and date_login BETWEEN '$c' and '$d' and date_logout!='0000-00-00'";
			$result=$cnn->query($qry);
			$cnt=mysqli_num_rows($result);
			if($cnt>0)
			{
			$str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Login</th><th>Date Of Logout</th></tr>";
			while($row=$result->fetch_assoc())
			{		
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["dologin"]."</td><td>".$row["dologout"]."</td></tr>";
			}
            $str.="</table>";
            echo $str;
			}
			else
			{
				echo "sorry no records found";
			}
		}
	?>
    <form method="post" class="form-horizontal" action="">
			<!-- <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter First Name" class="col-xs-10 col-sm-5" name="txtfname" required>
					</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter Last Name" class="col-xs-10 col-sm-5" name="txtlname" required>
					</div>
			</div> -->

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
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

			<div class="col-sm-9">
			<select name="cmbblock" class="col-sm-3 control-label no-padding-right"for="form-field-1">
					<?php
					while($row=$result->fetch_assoc())
					{
						echo "<option value=".$row["userid"].">".$row["fname"]." ".$row["lname"]."</option>";
					}
					?> 
				</select>
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
    </body>
<?php
include_once("footer.php");
?>
