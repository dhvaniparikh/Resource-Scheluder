<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

<?php
include_once("header.php");
?>
<?php
    $pid=$_GET["id"];
    $cnn=mysqli_connect("localhost","root","","project");
    $qry="DELETE from project where pid='$pid'";
    $result=$cnn->query($qry);
    $yourURL="view_project.php";
        echo ("<script>location.href='$yourURL'</script>");
?>
    </body>
</html>