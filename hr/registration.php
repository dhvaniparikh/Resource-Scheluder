<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
	#cover{
	background: #222 url('https://img.freepik.com/free-photo/side-view-cropped-unrecognizable-business-people-working-common-desk_1098-20474.jpg?size=626&ext=jpg&ga=GA1.2.1853454529.1603189534') center center no-repeat;

    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-position: center;
    height: 170%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}

#cover-caption {
    width: 100%;
    position: relative;
    z-index: 1;
}
.row{
    margin-left:100px;
}
.container{
    margin-left:190px;}

form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color:rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}

</style>
</head>
<body>
	<?php
    $cnn=mysqli_connect("localhost","root","","project");
    $qry1="select * from role";
    $result=$cnn->query($qry1);
if(isset($_POST["btnsubmit"]))
{ 
		$Fname=$_POST["txtfname"];
		$Lname=$_POST["txtlname"];
		$DOB=$_POST["txtdob"];
		$Contact=$_POST["txtcontact"];
		$Email=$_POST["txtemail"];
		$Address=$_POST["txtaddress"];
		$Qualification=$_POST["txtqualification"];
		$Username=$_POST["txtusername"];
		$Password=$_POST["txtpassword"];
		$Doj=$_POST["txtdoj"];
		$Roleid=$_POST["cmbblock"];
		$qry="INSERT INTO user (fname,lname,dob,contact,email,address,qualification,Username,Password,doj,rid,job_status) VALUES ('$Fname','$Lname','$DOB','$Contact','$Email','$Address','$Qualification','$Username','$Password','$Doj','$Roleid','working')";
        $result=$cnn->query($qry);
        header("location:../login.php");
}
?>
<div class="background">
  <div class="transbox">
    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <h1 class="display-4 py-2 text-truncate">Registration</h1>
                        <div class="px-2">
                            <form action="" method="post" class="justify-content-center">
                                <div class="form-group">
                                    <label class="pull-left">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter First name" pattern="^[a-zA-Z]+$" name="txtfname" required>
                                </div>
                                 <div class="form-group">
                                    <label class="pull-left">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Last name" pattern="^[a-zA-Z]+$" name="txtlname" required>
                                </div>
                                 <div class="form-group">
                                    <label class="pull-left">Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="Enter Birth Of Date" name="txtdob" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Contact Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your moblie number" name="txtcontact" pattern="[0-9]{10}" maxlength="10" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Email ID</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" name="txtemail" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address" name="txtaddress" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Qualification</label>
                                    <input type="text" class="form-control" placeholder="Enter Qualification" name="txtqualification" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" pattern="^[0-9a-zA-Z-@]+$" name="txtusername" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" minlength="8" minlength="20" name="txtpassword" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Date Of Join</label>
                                    <input type="date" class="form-control" placeholder="Enter " name="txtdoj" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left">Role</label>
                                    <select name="cmbblock" class="col-sm-3 control-label no-padding-right form-control" for="form-field-1">
                                        <?php
                                        while($row1=$result->fetch_assoc())
                                        {
                                            echo "<option value=".$row1["rid"].">".$row1["rname"]."</option>";
                                        }
                                        ?> 
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg" name="btnsubmit" value="submit data">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>
</body>
</html>




