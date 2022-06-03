<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../made-css/manger.css">
    <?php include('componants/navbar.php'); require_once('../../connection.php'); include('login-check.php'); ?>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body class="boody">
    

    <div class="btn1">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Employee
        </button>
    </div>

    <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['update-worker']))
        {
            echo $_SESSION['update-worker'];
            unset($_SESSION['update-worker']);
        }

    ?>

<h5 style="text-align: center;  font-family: Verdana, Geneva, Tahoma, sans-serif;">Sell Department</h5>

<div class="card">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">National ID</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Hired Date</th>
            <th scope="col">Methods</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql= "SELECT * FROM `workers-tb` WHERE `worker-role` = 'Sell Worker'";
            $res =mysqli_query($conn,$sql) or die(mysqli_error());

            if($res)
            {
                $no =1;
                $count =mysqli_num_rows($res);
                if($count >0)
                {
                    foreach($res as $i)
                    {
        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $i['worker-name'] ?></td>
                            <td><?php echo $i['worker-NID'] ?></td>
                            <td><?php echo $i['worker-phone'] ?></td>
                            <td><?php echo $i['worker-email'] ?></td>
                            <td><?php echo $i['Hired-date'] ?></td>
                            <td>     
                                <a href="delete-worker.php?worker-NID=<?php echo $i['worker-NID'];?>" type="button" class="btn btn-danger">Delete</a> &nbsp
                                <a href="update-worker.php?worker-NID=<?php echo $i['worker-NID'];?>" type="button" class="btn btn-info">Update</a>
                            </td>
                        </tr>
        <?php
                    }
                }
                else
                {
                    echo'<td collape=6> No data </td>';
                }
            }
        ?>
        </table>
</div>

<h5 style="text-align: center;  font-family: Verdana, Geneva, Tahoma, sans-serif;">Cooking Department</h5>

<div class="card">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">National ID</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Hired Date</th>
            <th scope="col">Methods</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sql2= "SELECT * FROM `workers-tb` WHERE `worker-role` = 'Cooking Worker'";
            $res2 =mysqli_query($conn,$sql2) or die(mysqli_error());

            if($res2)
            {
                $no =1;
                $count =mysqli_num_rows($res2);
                if($count >0)
                {
                    foreach($res2 as $i)
                    {
        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $i['worker-name'] ?></td>
                            <td><?php echo $i['worker-NID'] ?></td>
                            <td><?php echo $i['worker-phone'] ?></td>
                            <td><?php echo $i['worker-email'] ?></td>
                            <td><?php echo $i['Hired-date'] ?></td>
                            <td>     
                                <a href="delete-worker.php?worker-NID=<?php echo $i['worker-NID'];?>" type="button" class="btn btn-danger">Delete</a> &nbsp
                                <a href="update-worker.php?worker-NID=<?php echo $i['worker-NID'];?>" type="button" class="btn btn-info">Update</a>
                            </td>
                        </tr>
        <?php
                    }
                }
                else
                {
                    echo'<td collape=6> No data </td>';
                }
            }
        ?>
        </table>
</div>

<h5 style="text-align: center;  font-family: Verdana, Geneva, Tahoma, sans-serif;">Delivery Department</h5>

<div class="card">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">National ID</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Hired Date</th>
            <th scope="col">Methods</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sql3= "SELECT * FROM `workers-tb` WHERE `worker-role` = 'Delivery Worker'";
            $res3 =mysqli_query($conn,$sql3) or die(mysqli_error());

            if($res3)
            {
                $no =1;
                $count =mysqli_num_rows($res3);
                if($count >0)
                {
                    foreach($res3 as $i)
                    {
        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $i['worker-name'] ?></td>
                            <td><?php echo $i['worker-NID'] ?></td>
                            <td><?php echo $i['worker-phone'] ?></td>
                            <td><?php echo $i['worker-email'] ?></td>
                            <td><?php echo $i['Hired-date'] ?></td>
                            <td>     
                                <a href="delete-worker.php?worker-NID=<?php echo $i['worker-NID'];?>" type="button" class="btn btn-danger">Delete</a> &nbsp
                                <a href="update-worker.php?worker-NID=<?php echo $i['worker-NID'];?>" type="button" class="btn btn-info">Update</a>
                            </td>
                        </tr>
        <?php
                    }
                }
                else
                {
                    echo'<td collape=6> No data </td>';
                }
            }
        ?>
        </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

        <div class="modal-header">
        <h5 class="modal-title">Enter information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="add-worker.php">
            <div class="modal-body">
                
                <div class="mb-3 mt-3">
                <input type="text" class="form-control" placeholder="Enter Name" name="worker-name">
                </div>

                <div class="mb-3 mt-3">
                <input type="number" class="form-control" placeholder="Enter National ID" name="worker-NID">
                </div>

                <div class="mb-3 mt-3">
                <input type="email" class="form-control" placeholder="Enter Email" name="worker-email">
                </div>

                <div class="mb-3 mt-3">
                <input type="number" class="form-control" placeholder="Enter Phone Number" name="worker-phone">
                </div>

                
                <select class="form-select" aria-label="Role" name="worker-role" >
                        <option selected>Choose</option>
                        <option value ="Sell Worker">Sell Worker</option>
                        <option value="Cooking Worker">Cooking Worker</option>
                        <option value="Delivery Worker">Delivery Worker</option>
                </select>
            </div>

            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
  </div>
</div>

<?php include('componants/footer.php'); ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>