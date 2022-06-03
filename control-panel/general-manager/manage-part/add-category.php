<?php
    require_once('../../../connection.php');
    include('../login-check.php');
    if(isset($_POST['submit']))
    {
        $getname= $_POST['category-name'];
        $getid =$_POST['category-id'];
    }
        $sql="INSERT INTO `category-tb`(`category-id`, `category-name`) VALUES ('$getid','$getname')";
        $result =mysqli_query($conn,$sql) or die(mysqli_error());;
        if($result)
        {
            $_SESSION['add'] ="<div class='mx-2' style='color: green;'>Category Added Successfully</div>";
            header('location:'.SITEURL.'control-panel/general-manager/manage-part/manage-category.php');
        }
        else
        {
            $_SESSION['add'] ="<div class='mx-2' style='color: red;'>Failed to Add Worker</div>";
            header('location:'.SITEURL.'control-panel/general-manager/manage-part/manage-category.php');
        }

    ?>