<?php
require_once('../../connection.php');
$id =$_GET['order-id'];

$sql ="DELETE FROM `orders-tb` WHERE `order-id` = $id";
$res =mysqli_query($conn,$sql);

$_SESSION['ready-order']= "<div class='mx-2' style='color: green;'>Your Order is ready</div>";
header('location:'.SITEURL.'control-panel/workers/orders.php');