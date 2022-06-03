<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/menu.css">

    <title>Menu</title>
</head>
<body>

 

    <!-- store -->
  <section id="store" class="store py-5">
    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-10 mx-auto col-sm-6 text-center">
          <h1 class="text-capitalize">our <strong class="banner-title ">Menu</strong></h1>
        </div>
      </div>
      <!-- end of section title -->
      <!--filter buttons -->
      <div class="row">
        <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
          <?php
          $sql= "SELECT * FROM `category-tb` WHERE 1";
          $res =mysqli_query($conn,$sql);
          if($res)
          {
            $count = mysqli_num_rows($res);
            if($count > 0)
            {
              ?>
              <a href="#" class="btn btn-secondary btn-black text-uppercase filter-btn m-2" data-filter="all"> all</a>
              <?php
              foreach($res as $i)
              {
                $category_name =$i['category-name'];
                $id  =$i['category-id']; 
                ?>
                <a href="#" class="btn btn-secondary btn-black text-uppercase filter-btn m-2" data-filter="<?php echo $category_name; ?>"><?php echo $category_name; ?></a>
                

                <?php

              }
            }
            else
            {
              echo'<td collape=6> No data </td>';
            }
          }

          ?>
        </div>
      </div>
      <!-- search box -->
      <div class="row">

        <div class="col-10 mx-auto col-md-6">
          <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder='item....' id="search-item">
            </div>

          </form>
        </div>
      </div>
      <!--end of filter buttons -->
      <!-- store  items-->
      <div class="row row-cols-2" id="store-items">
      <?php

        $sql2="SELECT * FROM `menu-tb` WHERE `active` ='yes' ";
        $res2=mysqli_query($conn,$sql2);
        $count2 = mysqli_num_rows($res2);
        if($count2 > 0)
        {
          foreach($res2 as $i)
          {
              $id = $i['item-id'];
              $title = $i['item-name'];
              $quantity = $i['item-quantity'];
              $description = $i['item-description'];
              $price = $i['item-price'];
              $categoryID = $i['category-id'];
              $categoryName = $i['category-name'];
              $img =$i['item-image'];
      ?>
              
        <!-- single item -->
        <div class="col-6 col-sm-6 col-lg-4 mx-auto my-3 store-item <?php echo $categoryName; ?>" data-item="<?php echo $categoryName; ?>">
          <div class="card ">
            <div class="img-container">
              <img src="<?php echo SITEURL;?>control-panel/general-manager/manage-part/menu-images/<?php echo $img; ?>" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <!-- <form method="POST" action=""></form> -->
              <a href="users/cart.php?id_=<?php echo $id;?>"><i class="fas fa-shopping-cart"></i></a>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name"><?php echo $title; ?></h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold"><?php echo $price; ?></strong></h5>

              </div>
            </div>

          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->

      
      <?php
            
          }
        }

      ?> 
      </div>
  </section>
  <!--end of store items -->


    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    <script src="js/app.js"></script>
</body>
</html>