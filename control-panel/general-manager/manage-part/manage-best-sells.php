<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../made-css/manger.css">
    <?php include('manage-navbar.php'); require('../../../connection.php'); include('../login-check.php'); ?>

    <title>Manage Best-Sells</title>
</head>
<body>

<h1 class="p-2 mx-4">Manage Best Sells</h1>

<div class="card text-center card-st ">

    <div class="card-header">
        <nav class="nav justify-content-center">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Fresh</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Prepration</button>
            </div>
        </nav>

    </div>

    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <div class="container mt-4">
                
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql ="SELECT * FROM `menu-tb` WHERE `active` ='yes' AND `best-sells` ='yes' AND `item-status` ='fresh'";
                                $res=mysqli_query($conn,$sql);
                                if($res)
                                {
                                    $count=mysqli_num_rows($res); 
                                    if($count >0)
                                    {
                                        foreach($res as $i)
                                        {
                                            $id =$i['item-id'];
                                            $name =$i['item-name'];
                                            $description =$i['item-description'];
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $id ?></th>
                                                <td><?php echo $name ?></td>
                                                <td><textarea readonly style="width: 700px; border:none;"><?php echo $description ?></textarea></td>
                                                <td>     
                                                <a href="manage-menu.php" type="submit" class="btn btn-info">Go to Menu</a>
                                                </td>
                                            </tr>
                                            <?php

                                        }

                                    }
                                    else
                                    {
                                        echo "<tr> <td colspan='7' class='text-danger'> Food not Added Yet. </td> </tr>";
                                    }
                                }

                            ?>
                            
                    </table>
                </div>
            </div>

        </div>
    

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

            <div class="container mt-4">

                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $sql2 ="SELECT * FROM `menu-tb` WHERE `active` ='yes' AND `best-sells` ='yes' AND `item-status` ='cooked'";
                                $res2=mysqli_query($conn,$sql2);
                                if($res)
                                {
                                    $count2=mysqli_num_rows($res2); 
                                    if($count2 >0)
                                    {
                                        foreach($res2 as $i)
                                        {
                                            $id =$i['item-id'];
                                            $name =$i['item-name'];
                                            $description =$i['item-description'];
                                            $best_sells =$i['best-sells'];
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $id ?></th>
                                                <td><?php echo $name ?></td>
                                                <td><textarea readonly style="width: 700px; border:none;"><?php echo $description ?></textarea></td>
                                                <td >     
                                                    <a href="manage-menu.php" type="submit" class="btn btn-info">Go to Menu</a>
                                                </td>
                                            </tr>
                                            <?php

                                        }

                                    }
                                    else
                                    {
                                        echo "<tr> <td colspan='7' class='text-danger'> Food not Added Yet. </td> </tr>";
                                    }
                                }

                            ?>
                    </table>
                </div>

            </div>
            
        </div>

    </div>   
</div>

<?php include('../componants/footer.php'); ?>

    <script src="../../js/bootstrap.js"></script>

</body>
</html>
