<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php require('../../connection.php'); ?>
    <title>Login_Page</title>
</head>

<body>


    <div class="container mt-5 p-3 border border-dark bg-light rounded-2 w-50 btn-warning">
        <p style=" font-family:Tahoma, Geneva, Verdana, sans-serif" class="display-5 mb-4 d-flex justify-content-center fw-bold text-dark ">Admin Login</p>
        <?php
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);//to remove session message
        }
        if(isset($_SESSION['login-message']))
        {
            echo $_SESSION['login-message'];
            unset($_SESSION['login-message']);//to remove session message
        }

    ?>
        <form class="fs-3 fw-bold" method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control"  placeholder="Username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="vstack gap-2 col-md-5 mx-auto mt-4">
                <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>  
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
          $user_name = $_POST['username'];
          $password = $_POST['password'];

         $sql =" SELECT * FROM `admin-tb` WHERE `user-name` ='$user_name' AND `password` = '$password'";
         $res =mysqli_query($conn,$sql) or die(mysqli_error());;
         $count =mysqli_num_rows($res);
         if($count ==1)
         {
             $_SESSION['admin']=$user_name;
            header('location:'.SITEURL.'control-panel/general-manager/staff.php');
         }
         else
         {
            $_SESSION['login']="<div class='mx-2 text-center' style='color: red;'>Wrong Username or Password</div>";
            header('location:'.SITEURL.'control-panel/general-manager/login-manager.php');
         }

    }

    

?>