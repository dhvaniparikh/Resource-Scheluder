<?php
include_once("header.php");
?>
<head>
	<style>
		img{
			margin-bottom:10%;
		}
	</style>
</head>
<?php
		$userid=$_SESSION["userid"];
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select max(loginid) as loginid from login where userid=$userid";
        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
		$_SESSION["loginid"]=$row["loginid"];
?>
<div class="col-sm-9 infobox-container">
	 <div class="infobox infobox-green">
			<img src="img/hr.jpeg" length="30%" width="30%">


		<div class="infobox-data">
			<span class="infobox-data-number">
			<?php
				$cnn=mysqli_connect("localhost","root","","project");
				$qry="select * from user where rid='2'";
				$result=$cnn->query($qry);
				$cnt=mysqli_num_rows($result);
				echo "$cnt";
			?>
			</span>
			<a href="admin_user.php?id=2">
			<div class="infobox-content">hr</div>
			</a>
		</div>
	</div>

	<div class="infobox infobox-blue">
			<img src="img/pm.jpeg" length="30%" width="30%">
	

		<div class="infobox-data">
			<span class="infobox-data-number">
			<?php
				$cnn=mysqli_connect("localhost","root","","project");
				$qry="select * from user where rid='3'";
				$result=$cnn->query($qry);
				$cnt=mysqli_num_rows($result);
				echo "$cnt";
			?>
			</span>
			<a href="admin_user.php?id=3">
			<div class="infobox-content">project manager</div>
			</a>
		</div>
	</div>

	<div class="infobox infobox-pink">
	<img src="img/emp.jpeg" length="30%" width="30%">

		<div class="infobox-data">
			<span class="infobox-data-number">
			<?php
				$cnn=mysqli_connect("localhost","root","","project");
				$qry="select * from user where rid='4' or rid='5' or rid='6' or rid='7'";
				$result=$cnn->query($qry);
				$cnt=mysqli_num_rows($result);
				echo "$cnt";
			?>
			</span>
			<a href="admin_users.php?id=4">
			<div class="infobox-content">Employee</div>
			</a>
		</div>
	</div>

	<div class="infobox infobox-red">
		<img src="img/ongoing.jpeg" length="25%" width="25%">

		<div class="infobox-data">
			<span class="infobox-data-number">
			<?php
				$cnn=mysqli_connect("localhost","root","","project");
				$qry="select * from project,proj_status where project.pid=proj_status.pid and status_id='1'";
				$result=$cnn->query($qry);
				$cnt=mysqli_num_rows($result);
				echo "$cnt";
			?>
			</span>
			<a href="admin_project.php?id=1">
			<div class="infobox-content">Ongoing Projects</div>
			</a>
		</div>
	</div>

	<div class="infobox infobox-orange2">
		<img src="img/finished.jpeg" length="30%" width="30%">

		<div class="infobox-data">
			<span class="infobox-data-number">
			<?php
				$cnn=mysqli_connect("localhost","root","","project");
				$qry="select * from project,proj_status where project.pid=proj_status.pid and status_id='2'";
				$result=$cnn->query($qry);
				$cnt=mysqli_num_rows($result);
				echo "$cnt";
			?>
			</span>
			<a href="admin_project.php?id=2">
			<div class="infobox-content">Finished Projects</div>
			</a>
		</div>
	</div>

	<div class="infobox infobox-black">
		<img src="img/pending.jpeg" length="25%" width="25%">

		<div class="infobox-data">
			<span class="infobox-data-number">
			<?php
				$cnn=mysqli_connect("localhost","root","","project");
				$qry="select * from project,proj_status where project.pid=proj_status.pid and status_id='3'";
				$result=$cnn->query($qry);
				$cnt=mysqli_num_rows($result);
				echo "$cnt";
			?> 

			</span>
			<a href="admin_project.php?id=3">
			<div class="infobox-content">Pending Projects</div>
			</a>
		</div>
	</div> 
</div>

<?php
include_once("footer.php");
?>