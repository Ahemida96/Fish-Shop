<?php
include ("../connection.php");

if(isset($_POST['Sign-Up'])) {
  $firstname =$_POST['firstname'];
  $lastname=$_POST['lastname']; 
  $email=$_POST['email'];
  $address=$_POST['address']; 
  $region=$_POST['resion'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];

    try {
    $sql="INSERT INTO `users-tb`(`user-firstname`, `user-lastname`, `user-email`, `user-address`, `user-region`, `user-phone`, `user-password`)
    VALUES ('$firstname','$lastname','$email','$address','$region','$phone','$password')";
      if(mysqli_query($conn,$sql)){
        $newURL = "login.php";
        header('Location: '.$newURL);
        }
  } 
  catch (\Throwable $th) {
    //$_SESSION['repeat']="<div class='mx-2' style ='color:red;'>Email Already Exested </div>";
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
      <title>Account</title>
  </head>
  <body class="bg-light">
    

    <div class="container mt-3 p-3 border border-dark rounded-2 w-50 text-dark">
    <p style=" font-family:Tahoma, Geneva, Verdana, sans-serif" class="display-5 mb-4 d-flex justify-content-center fw-bold text-dark "> Register</p>

      <form class="row g-3 p-2" method="POST" >

            <label for="clientname" class="form-label">Name</label>
  
            <div class="col-6">
              <input type="text" class="form-control" placeholder="First name" name="firstname"  required > 
            </div>

            <div class="col-6">
              <input type="text" class="form-control" placeholder="Last name" name="lastname" required >
              </div>

            <div class="col-md-12">
              <label for="clientemail" class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" required >
              <?php
              if(isset($_SESSION['repeat'])) {
                echo $_SESSION['repeat'];
                unset($_SESSION['repeat']);
              }

              ?>
              </div>

            <div class="col-md-12">
              <label for="clientpass" class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password"  required >
            </div>

            <div class="col-md-12">
              <label for="clientpass" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password"  required >
            </div>

            <div class="col-9">
              <label for="clientadd" class="form-label">Address</label>
              <input type="text" class="form-control" placeholder="1234 Main St" name="address"  required >
            </div>

            <div class="col-md-3">
                <label for="clientregion" class="form-label">Region</label>
                <select class="form-select" name="resion"  required>
                  <option selected>Choose...</option>
                  <option>Smouha</option>
                  <option>AlAgamy</option>
                  <option>Gleem</option>
                  <option>Stanly</option>
                  <option>Borg-Alarab</option>
                </select>
              </div>

            <div class="col-md-6">
              <label for="clientphone1" class="form-label" >Phone Number</label>
              <input type="number" class="form-control" name="phone" placeholder="01xxxxxxxxx" required >
              </div>

            <div class="vstack gap-2 col-md-7 mx-auto">
              <button type="submit" class="btn btn-primary" name="Sign-Up">Sign Up</button>
              <a href="login.php" class="btn btn-dark">Back To Login Screen</a>
          </div>

          </form>

    </div>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    </body>
</html>