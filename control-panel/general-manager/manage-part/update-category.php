<?php
require_once('../../../connection.php');

    echo $id = $_GET['id'];

    if(isset($_POST['submit']))
    {
        
        $name= $_POST['category-name'];
        $ID= $_POST['category-id'];
    }
    
    $sql ="UPDATE `category-tb` SET `category-id`='$ID',`category-name`='$name' WHERE `category-id` =$id";

    $res =mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['update']= "<div class='mx-2' style='color: green;'>Worker Deleted Successfully</div>";
        echo("<meta http-equiv='refresh' content='1'>");
    }
    else
    {
        $_SESSION['update']= "<div class='mx-2' style='color: red;'>Couldn't Delete Worker</div>";
        
        echo("<meta http-equiv='refresh' content='1'>");
    }
?>