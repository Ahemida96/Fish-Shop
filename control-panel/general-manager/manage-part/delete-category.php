<?php
require_once('../../../connection.php');
include('../login-check.php');
    $ID =$_GET['category-id'];
    $sql ="DELETE FROM `category-tb` WHERE `category-id` =$ID";

    $res =mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['delete']= "<div class='mx-2' style='color: green;'>Category Deleted Successfully</div>";
        header('location:'.SITEURL.'control-panel/general-manager/manage-part/manage-category.php');
    }
    else
    {
        $_SESSION['delete']= "<div class='mx-2' style='color: red;'>Couldn't Delete Category</div>";
        
        header('location:'.SITEURL.'control-panel/general-manager/manage-part/manage-category.php');
    }
?>