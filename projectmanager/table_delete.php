<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
            $id=$_GET['id'];
            $d=$_GET['d'];
            $cnn=mysqli_connect("localhost","root","","project");

            if($d == 'p'){
                $qry="delete from project where pid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_project.php");
            }
            if($d == 'pe'){
                $qry="delete from proj_employee where peid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_proemp.php");
            }
            if($d == 'pt'){
                $qry="delete from proj_technology where ptid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_protech.php");
            }
            if($d == 'r'){
                $qry="delete from role where rid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_role.php");
            }
            if($d == 't'){
                $qry="delete from task where taskid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_task.php");
            }
            if($d == 'tf'){
                $qry="delete from taskfiles where tfid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_taskfile.php");
            }
            if($d == 'tc'){
                $qry="delete from technology where techid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_technology.php");
            }
            if($d == 'u'){
                $qry="delete from user where userid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_user.php");
            }
            if($d == 'ut'){
                $qry="delete from user_technology where utid='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_usertech.php");
            }
            if($d == 'st'){
                $qry="delete from status where status_id='$id' ";
                $result=$cnn->query($qry);
                header("Location:table_status.php");
            }
		?>
	</body>
</html>