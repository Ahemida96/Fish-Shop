<?php
require_once('../../connection.php');
    $NID =$_GET['worker-NID'];
    $sql ="DELETE FROM `workers-tb` WHERE `worker-NID` =$NID";

    $res =mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['delete']= "<div class='mx-2' style='color: green;'>Worker Deleted Successfully</div>";
        header('location:'.SITEURL.'control-panel/general-manager/staff.php');
    }
    else
    {
        $_SESSION['delete']= "<div class='mx-2' style='color: red;'>Couldn't Delete Worker</div>";
        
        header('location:'.SITEURL.'control-panel/general-manager/staff.php');
    }
?>