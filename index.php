<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Fish Shop</title>
    <?php include('bootstrap-linker.php'); require('connection.php'); ?>
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
    <?php
    if(isset($_SESSION['Order']))
    {
      echo $_SESSION['Order'];
      unset($_SESSION['Order']);
    }
    if(isset($_SESSION['empty-cart']))
    {
      echo $_SESSION['empty-cart'];
      unset($_SESSION['empty-cart']);
    }
    if(isset($_SESSION['ready-order']))
    {
      echo("<meta http-equiv='refresh' content='1'>");
      echo $_SESSION['ready-order'];
      unset($_SESSION['ready-order']);
    }
    
    
    ?>
    <!-- Navbar -->
    <?php include('componants-home/navbar.php'); ?>
    <!-- Navbar -->

    <section class="slided-photos">
            
      <!-- Carousel wrapper -->
      <div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Inner -->
      <div class="carousel-inner rounded-5 shadow-4-strong">
        <!-- Single item -->
        <div class="carousel-item active">
          <img src="home-img/3.jpg" class="d-block w-100"
            alt=""/>
          
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="home-img/2.jpg" class="d-block w-100"
            alt="" />
          
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="home-img/1.jpg" class="d-block w-100"
            alt="" />
          
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
      <!-- Carousel wrapper -->
    </section>

  <section class="about py-5" id="about">
    <div class="container">

      <div class="row">
        <div class="col-10 mx-auto col-md-6 my-5">
          <h1 class="text-capitalize">about <strong class="banner-title ">us</strong></h1>
          <p class="my-4 text-muted w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam voluptas
            beatae vitae expedita consectetur nesciunt quia deserunt asperiores facere fuga dicta fugiat corrupti et omnis
            porro at dolorum! Ad!</p>
          <a href="#" class="btn btn-light text-uppercase ">explore</a>

        </div>
        <div class="col-10 mx-auto col-md-6 align-self-center my-5">
          <div class="about-img__container">
            <img src="home-img/about.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="bestsells">

      <div class="card text-center card-st ">

          <div class="card-header" style="background-color: #478eb8;">
              <h1 class="display-1 header-st"><strong class="header-title ">Best Sells</strong></h1>

                <nav class="nav justify-content-center">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Fresh</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Prepration</button>
                  </div>
              </nav>

          </div>

        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <div class="card-body card-body-st">
              <?php
                $sql ="SELECT * FROM `menu-tb` WHERE `active` ='yes' AND `best-sells` ='yes' AND `item-status` ='fresh'";
                $res=mysqli_query($conn,$sql);
                if($res)
                {
                  $count =mysqli_num_rows($res);
                  if($count >0)
                  {
                    foreach($res as $i)
                    {
                      $id =$i['item-id'];
                      $name =$i['item-name'];
                      $description =$i['item-description'];
                      $img =$i['item-image'];
                      ?>
                      <div class="card mb-3 mx-lg-3 overflow-hidden" style="max-width: 1440px; max-height: 340px;">
                      <div class="row g-0">
                      <div class="col-md-4">
                        <?php
                        if($img == "")
                        {
                          echo "<div class='error'>Image not found.</div>";
                        }
                        else
                        {
                          ?>
                          <img src="<?php echo SITEURL;?>control-panel/general-manager/manage-part/menu-images/<?php echo $img; ?>" class=" img-fluid rounded-start" >
                          <?php
                        }
                        ?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body mt-4">
                          <h5 class="card-title fs-2"><?php echo $name;?></h5>
                          <p class="card-text display-6 mt-4"><?php echo $description;?></p>
                          <p class="card-text"><small class="text-muted mt-4"><a href="#store" class="btn btn-dark">Shop Now</a></small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                        <?php
                    }
                  }
                }

              ?>


            </div>

          </div>



          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

            <div class="card-body card-body-st">
                
            <?php
                $sql2 ="SELECT * FROM `menu-tb` WHERE `active` ='yes' AND `best-sells` ='yes' AND `item-status` ='cooked'";
                $res2=mysqli_query($conn,$sql2);
                if($res2)
                {
                  $count2 =mysqli_num_rows($res2);
                  if($count2 >0)
                  {
                    foreach($res2 as $i)
                    {
                      $id =$i['item-id'];
                      $name2 =$i['item-name'];
                      $description2 =$i['item-description'];
                      $img2 =$i['item-image'];
                      ?>
                      <div class="card mb-3 mx-lg-3 overflow-hidden" style="max-width: 1440px; max-height: 340px;">
                      <div class="row g-0">
                      <div class="col-md-4">
                        <?php
                        if($img2 == "")
                        {
                          echo "<div class='error'>Image not found.</div>";
                        }
                        else
                        {
                          ?>
                          <img src="<?php echo SITEURL;?>control-panel/general-manager/manage-part/menu-images/<?php echo $img2; ?>" class=" img-fluid rounded-start" >
                          <?php
                        }
                        ?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body mt-4">
                          <h5 class="card-title fs-2"><?php echo $name2;?></h5>
                          <p class="card-text display-6 mt-4"><?php echo $description2;?></p>
                          <p class="card-text"><small class="text-muted mt-4"><a href="#store" class="btn btn-dark">Shop Now</a></small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                        <?php
                    }
                  }
                }

              ?>

            </div>

          </div>

        </div>


      </div>

    </section>

  <section class="menu" id="menu">
    <?php include('menu.php');?>
  </section>


    <!-- Footer -->
    <?php include ('componants-home/footer.php');?>
    <!-- Footer -->


    <script src="js/bootstrap.js"></script>
    <script src="js/mdb.min.js"></script>
  </body>
</html>
