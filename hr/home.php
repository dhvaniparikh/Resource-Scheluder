<?php
include_once("header.php");
?>

 	<div class="page-header">
		<h1>Welcome</h1>
		<img src="https://image.freepik.com/free-photo/thoughtful-african-american-businessman-using-laptop-pondering-project-business-strategy-puzzled-employee-executive-looking-laptop-screen-reading-email-making-decision-office_231208-676.jpg" height="400px" width="600px">
	</div> 

<?php
		$userid=$_SESSION["userid"];
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select max(loginid) as loginid from login where userid=$userid";
        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
		$_SESSION["loginid"]=$row["loginid"];
?>
<?php
include_once("footer.php");
?>