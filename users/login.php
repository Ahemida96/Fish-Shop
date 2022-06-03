<?php
include ("../connection.php");

if(isset($_POST['Sign'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM `users-tb` WHERE `user-email` = '$email' AND `user-password` = '$password'";
    $data = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($data) > 0)
    {
        $user = mysqli_fetch_assoc($data);
        session_abort();
        session_start();
        $_SESSION['user-password'] = $user['user-password'];
        $_SESSION['user-email'] = $user['user-email'];
        $_SESSION['user-fist'] = $user['user-firstname'];
        $_SESSION['user-last'] = $user['user-lastname'];
        $_SESSION['user-address'] = $user['user-address'];
        $_SESSION['user-phone'] = $user['user-phone'];
        $_SESSION['user-region'] = $user['user-region'];
        $_SESSION['user-id'] = $user['user-id'];
        
        $_SESSION['change']=1;

        $newURL = "Profile.php";
        header('Location: '.$newURL);
    }
    else
    {
        echo "<script> alert('Wrong Email Or Password') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <title>Login_Page</title>
</head>

<body>


    <div class="container-sm mt-5 p-3 border border-dark bg-light rounded-2 w-75 ">
        <p style=" font-family:Tahoma, Geneva, Verdana, sans-serif" class="display-5 mb-4 d-flex justify-content-center fw-bold text-dark "> Login</p>
        <?php
        if(isset($_SESSION['login-message']))
        {
            echo $_SESSION['login-message'];
            unset($_SESSION['login-message']);//to remove session message
        }
        ?>
        <form class="fs-3 fw-bold" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control"  placeholder="Email" name="email"required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="vstack gap-2 col-md-5 mx-auto mt-4">
                <button type="submit" class="btn btn-primary" name="Sign">Login</button>
                <a href="../index.php" class="btn btn-dark">Back To Home</a>
            </div>
        </form>
        <div class="row justify-content-center offset-2 ">
        <a href="client_Info.php" class="mt-1 text-decoration-none gap-2 col-md-5">Create account?</a>
        </div>  
    </div>


    <script type="text/javascript" src="../js/bootstrap.js"></script>
</body>

</html>