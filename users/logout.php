<?php
include('../connection.php');

//destroy session
session_destroy();
//redirect
header('location:'.SITEURL.'users/login.php');

?>