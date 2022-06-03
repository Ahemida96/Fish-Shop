<?php
require_once('../../connection.php');
$id =$_GET['order-id'];

$sql ="DELETE FROM `orders-tb` WHERE `order-id` = $id";
$res =mysqli_query($conn,$sql);
header('location:'.SITEURL.'control-panel/workers/orders.php');