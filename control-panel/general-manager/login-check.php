<?php 
 if(!isset($_SESSION['admin']))
 {
    $_SESSION['login-message']="<div class='mx-2 text-center' style='color: red;'>Please login to access control panal</div>";
    header('location:'.SITEURL.'control-panel/general-manager/login-manager.php');
 }
?>