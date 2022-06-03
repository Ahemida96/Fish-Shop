<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../made-css/manger.css">
    <?php include('manage-navbar.php'); require('../../../connection.php'); include('../login-check.php'); ?>
    <title>Manage Menu</title>
</head>
<body>

    <!-- start -->
    <div class="modal fade" id="addcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Enter information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method ="POST" action="add-item.php" enctype="multipart/form-data">
                    <div class="modal-body">
                    
                        <div class="mb-3 mt-3">
                        <input type="text" name="title" class="form-control" placeholder="Enter Food Name" >
                        </div>

                        <div class="mb-3 mt-3">
                        <textarea name="description" class="form-control" placeholder="Enter Food Description" ></textarea>
                        </div>

                        <div class="mb-3 mt-3">
                        <input type="number" name="price" class="form-control" placeholder="Enter Food Price" >
                        </div>

                        <div class="mb-3 mt-3">
                        <input type="number" name="quantity" class="form-control" placeholder="Enter Food Quantity" >
                        </div>

                        <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02"> Food Image</label>
                        </div>
                        
                        <div class="input-group mb-3 d-block">
                            <label class="me-2">Status: </label>
                            <input  type="radio" name="status"  value="fresh"> Fresh
                            <input  type="radio" name="status"  value="cooked"> Cooked
                        </div>
                        <div class="input-group mb-3 d-block">
                            <label class="me-2">Best Sells: </label>
                            <input  type="radio" name="best-sells"  value="yes"> Yes
                            <input  type="radio" name="best-sells"  value="no"> NO
                        </div>

                        <div class="input-group mb-3 d-block">
                            <label class="me-2">Active: </label>
                            <input  type="radio" name="active"  value="yes"> Yes
                            <input  type="radio" name="active"  value="no"> NO
                        </div>

                        <?php
                            $sql ="SELECT * FROM `category-tb` WHERE 1";
                            $res =mysqli_query($conn,$sql);
                        ?>
                        <label class="mb-2">Category: </label>
                        <select class="form-select" aria-label="Role" name="categoryID">
                            <option selected>Choose</option>
                            <?php
                                if($res)
                                {
                                    $count =mysqli_num_rows($res);
                                    if($count > 0)
                                    {
                                        foreach($res as $i)
                                        {
                                            echo'
                                            <option value="'.$i['category-id'].'">'.$i['category-name'].'</option>';
                                        }
                                    }
                                }
                            ?>
                        </select>

                    </div>
                        <div class="modal-footer">
                            <input name="submit" type="submit" value="Add" class="btn btn-success">
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End -->

    <div class="container mt-4">
        <div >
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addcategory">
            Add Food
            </button>
        </div>

        <?php
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        ?>
        
        <h1>Manage Menu</h1>
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Active</th>
                    <th scope="col">Best Sells</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Method</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql2="SELECT * FROM `menu-tb` WHERE 1";
                    $res2=mysqli_query($conn,$sql2);
                    $count = mysqli_num_rows($res2);
                    $sn =1;
                    if($count > 0)
                    {
                        foreach($res2 as $i)
                        {
                            $id = $i['item-id'];
                            $title = $i['item-name'];
                            $quantity = $i['item-quantity'];
                            $description = $i['item-description'];
                            $price = $i['item-price'];
                            $status = $i['item-status'];
                            $categoryName = $i['category-name'];
                            $active = $i['active'];
                            $best_sells = $i['best-sells'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $sn++;?>.</th>
                                <td><?php echo $title; ?></td> 
                                <td><?php echo $description; ?></td> 
                                <td><?php echo $quantity; ?></td> 
                                <td>$<?php echo $price; ?></td> 
                                <td><?php echo $status; ?></td> 
                                <td><?php echo $active; ?></td> 
                                <td><?php echo $best_sells; ?></td> 
                                <td><?php echo $categoryName; ?></td>
                                <td>     
                                    <a href="delete-item.php?item-id=<?php echo $id;?>" type="button" class="btn btn-danger d-print-none">Delete</a> &nbsp
                                    <a type="button" class="btn btn-info">More</a>
                                </td>
                            </tr>
                            <?php

                        }
                    }
                    else
                    {
                        echo "<tr> <td colspan='7' class='text-danger'> Food not Added Yet. </td> </tr>";
                    }

                ?>
                    
            </table>
        </div>
    </div>

    <?php include('../componants/footer.php'); ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>

</body>
</html>
