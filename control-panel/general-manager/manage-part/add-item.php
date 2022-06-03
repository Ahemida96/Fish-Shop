<?php
    require('../../../connection.php'); include('../login-check.php');

    if(isset($_POST['submit']))
    {
        $name =$_POST['title'];
        $description =$_POST['description'];
        $price =$_POST['price'];
        $quantity =$_POST['quantity'];
        $categoryID =$_POST['categoryID'];
        $status =$_POST['status'];
        if(isset($_POST['best-sells']))
        {$best_sells =$_POST['best-sells'];}

        else{$best_sells ="no";} //as default
        if(isset($_POST['status']))
        {$status =$_POST['status'];}

        else{$status ="";} //as default

        if(isset($_POST['active'])){$active =$_POST['active'];}
        else{$active ="no";} //as default
        //print_r($_FILES['image']);
        if(isset($_FILES['image']['name']))
        {
            $image =$_FILES['image']['name'];
            //ckeck if selected image or not 
            if($image != "")
            {
                //image is selected
                $ext =end(explode('.', $image));//get the extention by seperate the image
                $image ="Item_name_".rand(0000,9999).'.'.$ext; //translate it into Item-name.444.jpg
                $src =$_FILES['image']['tmp_name']; //get the source
                $dst="menu-images/".$image; //to save the photos into my code
                $upload = move_uploaded_file($src,$dst);//upload it
                if($upload ==false)
                {
                    //failed to upload the img
                    $_SESSION['upload']="<div class'text-danger'>Failed To Upload Image</div>";
                    header('location: manage-menu.php');
                    die();//to unsave the other data
                }

            }

        }
        else{$image ="";}
        //insert the data into database
        $sql="INSERT INTO `menu-tb`( `item-name`, `item-quantity`, `item-description`, `item-price`, `category-id`, `item-image`, `item-status`, `active`, `best-sells`) VALUES
                                    ('$name','$quantity','$description','$price','$categoryID','$image','$status','$active','$best_sells')";
        $res=mysqli_query($conn,$sql);
        
        if($res)
        {
            $_SESSION['add']= "<div class='mx-2' style='color: green;'>Item Added Successfuly</div>";
            header('location: manage-menu.php');
        }
        else
        {
            $_SESSION['add']= "<div class='mx-2' style='color: red;'>Failed to add item</div>";
            header('location: manage-menu.php');
        }

        
        
    }
?>