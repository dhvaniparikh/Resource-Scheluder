<?php
include_once("header.php");
?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <?php
			$cnn=mysqli_connect("localhost","root","","project");
            $qry="select * from task,project,user,status where task.pid=project.pid and task.status_id=status.status_id and task.userid=user.userid";
            $result=$cnn->query($qry);
            $row=$result->fetch_assoc();
            // $fname=$row["fname"];
            // $lname=$row["lname"];
            // $ptitle=$row["ptitle"];
            // $task=$row["task_details"];
        ?>
<div class="card">
    <div class="header">
        <h2>TASK INFOS</h2>
        <!-- <ul class="header-dropdown m-r--5">
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <i class="material-icons">more_vert</i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                </ul>
            </li>
        </ul> -->
    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="table table-hover dashboard-task-infos">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Project Title</th>
                        <th>Task Details</th>
                        <th>Progress</th>
                    </tr>
                </thead>
            
                <tbody>
                <?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['ptitle']; ?></td>
                        <td><span class="bg-info"><?php echo $row['task_details']; ?></span></td>
                        <?php if($row['status_id'] == 1){ ?>
                            <td><span class="badge badge-primary"><?php echo $row['status_name']; ?></span></td>
                        <?php }else if($row['status_id'] == 2){ ?>
                            <td><span class="badge badge-success"><?php echo $row['status_name']; ?></span></td>
                        <?php }else if($row['status_id'] == 3){ ?>
                            <td><span class="badge badge-warning"><?php echo $row['status_name']; ?></span></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
                    <!-- <tr>
                        <td>2</td>
                        <td>Task B</td>
                        <td><span class="label bg-primary">To Do</span></td>
                        <td>John Doe</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Task C</td>
                        <td><span class="label bg-info">On Hold</span></td>
                        <td>John Doe</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Task D</td>
                        <td><span class="label bg-warning">Wait Approvel</span></td>
                        <td>John Doe</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Task E</td>
                        <td>
                            <span class="label bg-danger">Suspended</span>
                        </td>
                        <td>John Doe</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                            </div>
                        </td>
                    </tr> -->
                </tbody>
                
            </table>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>