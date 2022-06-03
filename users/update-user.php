<?php
include ("../connection.php");

if(isset($_POST['update-user'])) {
  $firstname =$_POST['firstname'];
  $lastname=$_POST['lastname']; 
  $email=$_POST['email'];
  $address=$_POST['address']; 
  $region=$_POST['resion'];
  $phone=$_POST['phone'];
  $id=$_POST['user-id'];
}


    $sql="UPDATE `users-tb` SET
     `user-firstname`='$firstname',
     `user-lastname`='$lastname',
     `user-email`='$email',
     `user-address`='$address',
     `user-region`='$region',
     `user-phone`='$phone' WHERE `user-id` = $id ";
      if(mysqli_query($conn,$sql)){
          
        $_SESSION['user-email'] = $email;
        $_SESSION['user-fist'] = $firstname;
        $_SESSION['user-last'] = $lastname;
        $_SESSION['user-address'] = $address;
        $_SESSION['user-phone'] = $phone;
        $_SESSION['user-region'] = $region;

        $_SESSION['updated']= "<script> alert('Info Updated') </script>";
        $newURL = "Profile.php";
        header('Location: '.$newURL);
        }
        else
        {
        $_SESSION['updated']= "<script> alert('Failed! Try again later') </script>";
        header('Location: '.$newURL);
        }

?>