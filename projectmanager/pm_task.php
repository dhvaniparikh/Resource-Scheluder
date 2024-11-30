<?php
include_once("header.php");
?>
	<?php
		$cnn=mysqli_connect("localhost","root","","project");
		$qry="select * from project";
		$result=$cnn->query($qry);
		if(isset($_POST["btnsubmit"]))
		{
			$a=$_POST["cmbblock"];
			$yourURL="new_task.php?id=$a";
            echo ("<script>location.href='$yourURL'</script>");	
		}
	?>
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
				<div class="col-sm-2">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> New Task: </label>
				</div>
				<select name="cmbblock" class="col-sm-3 control-label no-padding-right"for="form-field-1">
					<?php
					while($row=$result->fetch_assoc())
					{
						echo "<option value=".$row["pid"].">".$row["ptitle"]."</option>";
					}
					?> 
				</select>
				</div>
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" name="btnsubmit" class="btn btn-info">
				</div>
		</form>
		
<?php
include_once("footer.php");
?>