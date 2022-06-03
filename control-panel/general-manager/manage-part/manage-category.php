<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../made-css/manger.css">
    <?php include('manage-navbar.php'); require('../../../connection.php'); include('../login-check.php'); ?>
    <title>Manage Category</title>
</head>
<body>

    <div class="btn1">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addcategory">
        Add Category
        </button>
    </div>


    <div class="container mt-4">
        <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);//to remove session message
        }
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);//to remove session message
        }
        ?>
        <h1>Manage Category</h1>
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Method</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql= "SELECT * FROM `category-tb` WHERE 1";
                    $res =mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($res);
                    if($res)
                    {
                        $count =mysqli_num_rows($res);
                        if($count >0)
                        {
                            foreach($res as $i)
                            {
                                $category_name =$i['category-name'];
                                $id  =$i['category-id']; 
                                echo'
                                <tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$category_name.'</td>
                                <td class="d-flex flex-row">     
                                    <a href="delete-category.php?category-id='.$id.'" type="button" class="btn btn-danger d-print-none">Delete</a> &nbsp
                                    <a href="update-category.php?id-category='.$id.'" type="button" class="btn btn-info" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">Update</a>
                                    
                                </td>
                                </tr>';

                            }
                        }
                        else
                        {
                            echo'<td collape=6> No data </td>';
                        }
                    }
                
                ?>
                    
            </table>
        </div>
    </div>
<!-- collapse -->
        
    <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
            <div class="card card-body" style="width: 600px;">
                <form action="update-category.php" method="POST">
                    <div class="modal-body">
                        
                        <div class="mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="category-name" required value="">
                        </div>
                        <div class="mb-3 mt-3">
                        <input type="number" class="form-control" placeholder="Enter Category ID" name="category-id" required value="">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" name="submit" value="Save" class="btn btn-success"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- start -->
    <div class="modal fade" id="addcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Enter information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="add-category.php" method="POST">
                    <div class="modal-body">
                        
                        <div class="mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="category-name" required>
                        </div>
                        <div class="mb-3 mt-3">
                        <input type="number" class="form-control" placeholder="Enter Category ID" name="category-id" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" name="submit" value="Save" class="btn btn-success"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- End -->

    <?php include('../componants/footer.php'); ?>
    <script src="../../js/bootstrap.bundle.min.js"></script>

    

</body>
</html>
