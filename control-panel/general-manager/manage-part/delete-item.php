<?php
    require('../../../connection.php'); include('../login-check.php');

    $ID = $_GET['item-id'];
    $sql ="DELETE FROM `menu-tb` WHERE `item-id` =$ID";
    $res =mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['delete']= "<div class='mx-2' style='color: green;'>Item Deleted Successfully</div>";
        header('location:'.SITEURL.'control-panel/general-manager/manage-part/manage-menu.php');
    }
    else
    {
        $_SESSION['delete']= "<div class='mx-2' style='color: red;'>Couldn't Delete Item</div>";
        
        header('location:'.SITEURL.'control-panel/general-manager/manage-part/manage-menu.php');
    }
?>