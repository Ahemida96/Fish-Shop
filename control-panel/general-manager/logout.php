<?php
include('../../connection.php');

//destroy session
session_destroy();
//redirect
header('location:'.SITEURL.'control-panel/general-manager/login-manager.php');

?>