<?php
    require_once('../../connection.php');
    include('login-check.php');

    if(isset($_POST['submit']))
    {
        $worker_name  = $_POST['worker-name'] ;
        $worker_ID    = $_POST['worker-NID'];
        $worker_email = $_POST['worker-email'];
        $worker_phone = $_POST['worker-phone'];
        $worker_role = $_POST['worker-role'];
    }

    $sql ="INSERT INTO `workers-tb`(`worker-name`, `worker-NID`, `worker-email`, `worker-phone`,`worker-role`) 
                            VALUES ('$worker_name','$worker_ID','$worker_email','$worker_phone','$worker_role')";
    
    $result =mysqli_query($conn, $sql) or die(mysqli_error()); //Execute Querry

    if($result)
    {
        //create a session to display messasge
        $_SESSION['add'] ="<div class='mx-2' style='color: green;'>Worker Added Successfully</div>";
        header('location:'.SITEURL.'control-panel/general-manager/staff.php');
    }
    else
    {
        $_SESSION['add'] ="<div class='mx-2' style='color: red;'>Failed to Add Worker</div>";
        header('location:'.SITEURL.'control-panel/general-manager/staff.php');
    }
?>