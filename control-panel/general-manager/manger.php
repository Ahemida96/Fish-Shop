<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../made-css/manger.css">
</head>



<body class="boody">

<?php include('componants/navbar.php');  require_once('../../connection.php'); include('login-check.php'); ?>

    <h5 class="welcome-text">General Manager</h5>

    <div class="card">
    <h5 class="card-heade"> Information of manager</h5>
    <div class="card">
        <p class="card-text"> Username : </p>
        <p class="card-text"> Email : </p>
        <p class="card-text"> Phone number : </p>
        <p class="card-text"> Job title : </p>
    </div>
    </div>

    <?php include('componants/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>