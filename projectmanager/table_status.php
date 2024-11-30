<?php
include_once("header.php");
?>
<div class="row page-header">
		<div class="col-md-10">
			<h1>
				Tables
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Project Status
				</small>
			</h1>
		</div>
		<div class="col-md-2">
					<button class="btn btn-lg pull-right"><a href="add_status.php">Insert Data</a></button>
		</div><br>
	</div>
<?php
$cnn=mysqli_connect("localhost","root","","project");
$qry="Select * from status";

$result=$cnn->query($qry);

$str="<table class='table table-bordered table-hover'><tr><th>Status ID</th><th>Status Name</th><th>Edit</th><th>Delete</th></tr>";
while($row=$result->fetch_assoc())
{
$Statusid=$row["status_id"];
$Statusname=$row["status_name"];
$str.="<tr><td>$Statusid</td><td>$Statusname</td><td><a class='btn btn-xs btn-success' href='update_status.php?id=".$row["status_id"]."'><i class='ace-icon fa fa-edit bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='table_delete.php?id=".$row["status_id"]."&d=st'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
}
$str.="</table>";
echo $str;
?>
<?php
include_once("footer.php");
?>