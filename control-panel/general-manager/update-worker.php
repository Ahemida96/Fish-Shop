<?php include('componants/navbar.php');
require_once('../../connection.php');
include('login-check.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Update Worker</title>
</head>
<body>

    <?php
        $NID =$_GET['worker-NID'];

        $sql1 ="SELECT * FROM `workers-tb` WHERE `worker-NID` =$NID";
        $info = mysqli_query($conn,$sql1);

        if($info)
        {
            $count =mysqli_num_rows($info);
            if($count == 1)
            {
                $worker =mysqli_fetch_assoc($info);

                $name   =$worker['worker-name'];
                $email  =$worker['worker-email'];
                $phone  =$worker['worker-phone'];
                $hired  =$worker['Hired-date'];
                $role   =$worker['worker-role'];
            
            }
            else
            {
                echo'<td colspan=6> Worker doesn\'t exist </td>';
                die();
            }
        }

    ?>

    <div class="container-fluid w-75 h-75 border border-3 border-dark mt-3">
        <center><h5 class=" display-4 "><?php echo $name; ?> information</h5></center>
        <form action="" method="POST">
            <div class="modal-body">

                <label>Name</label>
                <div class="mb-3 mt-3">
                <input type="text" class="form-control"  placeholder="Enter Name" name="worker-name" required value="<?php echo $name; ?>">
                </div>

                <label>National ID</label>
                <div class="mb-3 mt-3">
                <input type="number" class="form-control" placeholder="Enter National ID" name="worker-NID" required value="<?php echo $NID; ?>">
                </div>

                <label>Email</label>
                <div class="mb-3 mt-3">
                <input type="email" class="form-control"  placeholder="Enter Email" name="worker-email" required value="<?php echo $email; ?>">
                </div>

                <label>Phone Number</label>
                <div class="mb-3 mt-3">
                <input type="number" class="form-control"  placeholder="Enter Phone Number" name="worker-phone" required value="<?php echo $phone; ?>">
                </div>

                <label>Role</label>
                <select class="form-select mt-3" aria-label="Role" name="worker-role" required >
                        <option selected><?php echo $role; ?></option>
                        <option value ="Sell Worker">Sell Department</option>
                        <option value="Cooking Worker">Cooking Department</option>
                        <option value="Delivery Worker">Delivery Department</option>
                </select>
            </div>
            <div class="modal-footer mt-3">
                <input type="submit" name="submit" value="Submit" class="btn btn-success"></input>
                <a href="staff.php"  class="btn btn-dark">Back</a>
            </div>
        </form>
            
    </div>

    <?php
    if(isset($_POST['submit']))
    {
        $name= $_POST['worker-name'];
        $ID= $_POST['worker-NID'];
        $email= $_POST['worker-email'];
        $phone= $_POST['worker-phone'];
        $role= $_POST['worker-role'];

        $sql ="UPDATE `workers-tb` SET 
        `worker-name`='$name',
        `worker-NID`='$ID',
        `worker-email`='$email',
        `worker-phone`='$phone',
        `worker-role`='$role' WHERE `worker-NID` =$NID";

        $res =mysqli_query($conn,$sql);
        if($res)
        {
            $_SESSION['update-worker']= "<div class='mx-2' style='color: green;'>Worker's Info Updated</div>";
            //header('location:'.SITEURL.'control-panel/general-manger/staff.php');
            //header("Refresh:0");
            //header("Refresh:0; url=update-worker.php");
            //echo("<meta http-equiv='refresh' content='1'>");
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=staff.php\">";
        }
        else
        {
            $_SESSION['update-worker']= "<div class='mx-2' style='color: red;'>Worker's Info Failed To Updated</div>";
           // header('location:'.SITEURL.'control-panel/general-manager/staff.php');
           //header("Refresh:0; url=update-worker.php");
           echo "<meta http-equiv=\"refresh\" content=\"0;URL=staff.php\">";
            
        }
    }
    ?>

</body>
</html>