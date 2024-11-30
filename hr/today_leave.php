
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <script>
        function dprint()
        {
        window.print();
        }
    </script>

	<div class="row page-header">
		<div class="col-md-10">
			<h1>
				Tables
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Absent Employees
				</small>
			</h1>
		</div>
        <input type="button" value="Print" onclick="dprint()">
	</div>
		<?php
            $date=date('Y-m-d');
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from user_leave,user where user_leave.userid=user.userid and (('$date' between from_date AND to_date ) or from_date='$date') and isapprove='yes'";
            $result=$cnn->query($qry);
            $str="<table border='1' class='table table-bordered table-hover'><tr><th>First Name</th><th>Last Name</th><th>Date Of Apply</th><th>Leave Date</th><th>Reason</th><th>Approval</th>
            <th>Notes</th><th>Date Of Approve</th></tr>";
			while($row=$result->fetch_assoc())
			{			
				$str.="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["doapply"]."</td><td>".$row["from_date"]."</td><td>".$row["reason"]."</td><td>".$row["isapprove"]."</td>
                <td>".$row["notes"]."</td><td>".$row["doapprove"]."</td></tr>";
			}
            $str.="</table>";
            echo $str;	
		?>
	</body>
</html>
