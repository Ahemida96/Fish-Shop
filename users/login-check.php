<?php 
 if(!isset($_SESSION['user-email']) and !isset($_SESSION['user-password'] ))
 {
    $_SESSION['login-message']="<div class='mx-2 text-center' style='color: red;'>Please login First</div>";
    header('location:'.SITEURL.'users/login.php');
 }
?>