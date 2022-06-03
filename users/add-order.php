<?php
include ("../connection.php");
require('login-check.php');

if(isset($_GET['id_']))
{
    $ID =$_GET['id_'];
  $sql2="SELECT * FROM `menu-tb` WHERE `item-id` =$ID ";
  $res2=mysqli_query($conn,$sql2);
  $data = $res2 -> fetch_assoc();

  $title = $data['item-name'];
  $description = $data['item-description'];
  $price = $data['item-price'];
  $img =$data['item-image'];
  $user_id =$_SESSION['user-id'];
}

$sql="INSERT INTO `orders-tb`( `order-name`, `order-discription`, `order-price`, `user-id`) 
VALUES ('$title','$description','$price','$user_id')";
$res =mysqli_query($conn,$sql);
if($res)
{
    $_SESSION['Order']="<script> alert('Order Completed') </script>";
    $newURL = "../index.php";
    header('Location: '.$newURL);
}