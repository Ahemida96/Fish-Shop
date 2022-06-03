<?php require_once('../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../made-css/manger.css">
    </head>



    <body class="boody" style="background: gray;">
    <?php include('componants/navbar.php'); ?>

        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>

                <tbody>
                <?php

                    $sql="SELECT * FROM `orders-tb` WHERE 1";
                    $res=mysqli_query($conn,$sql);
                    if($res)
                    {
                        foreach($res as $i)
                        {
                            $id= $i['order-id'];
                            $name= $i['order-name'];
                            $time= $i['order-time'];
                            ?>

                        
                    <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $time; ?></td>
                    </tr>
 
                <?php
                    }
                }

            ?>

                </tbody>
            </table>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>