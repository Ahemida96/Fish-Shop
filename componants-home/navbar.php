
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!-- Navigation bar -->
<section class="Navbar">
  <nav class="navbar navbar-expand-lg fixed-top  ">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar brand -->
      <a class="navbar-brand mx-2 mt-2 mt-lg-0" href="index.php"><img src="home-img/logo.png" alt=""></a>
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        
        <!-- center links -->
        <ul class="navbar-nav mb-lg-0 nav-item-st">
          <li class="nav-item ">
            <a  href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a  href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a  href="#about">About</a>
          </li>
          <li class="nav-item">
            <a  href="#footer">Contact</a>
          </li>
          
        </ul>
        <!-- center links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3 " href="users/cart.php">
          <i class="fas fa-shopping-cart "></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>


        <!-- Avatar -->
        <?php
        if(isset($_SESSION['change']))
        {
          if($_SESSION['change']=== 1)
          {
            ?>
            <!--<a href="users/Profile.php" target="_blank" class="btn btn-st" >Profile</a>-->
            <button onclick="window.location.href='users/Profile.php'" class="btn btn-st">Profile</button>
            <?php
          }
        }
        else
        {
          ?>
          <!--<a href="users/login.php" target="_blank" class="btn btn-st" >Login</a>-->
          <button onclick="window.location.href='users/login.php'" class="btn btn-st">Login</button>
          <?php
        }
        ?>
          
          

      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
</section>