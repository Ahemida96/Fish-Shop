<head></head>
<link rel="stylesheet" href="../css/cart.css">
<link href="../css/bootstrap.css" rel="stylesheet">
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
<link rel="stylesheet" href="css/mdb.min.css" />
<title>Cart</title>
</head>
<?php
include ("../connection.php");

$count=0;
$price=0;
if(isset($_GET['id_']))
{
   $ID =$_GET['id_'];
  $count +=1;
  $sql2="SELECT * FROM `menu-tb` WHERE `item-id` =$ID ";
  $res2=mysqli_query($conn,$sql2);
  $data = $res2 -> fetch_assoc();

  $title = $data['item-name'];
  $description = $data['item-description'];
  $price = $data['item-price'];
  $img =$data['item-image'];
}
else
{
    $newURL = "../index.php";
    header('Location: '.$newURL);
    $_SESSION['empty-cart']= "<script> alert('The Cart Is Empty') </script>";
    
}
?>

<section class="h-100 h-custom" style="background-image:url('../home-img/3.jpg') ;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5 row">
                    <h1 class="fw-bold mb-0 text-black col-12">Shopping Cart</h1>
                        <h6 class="mb-0 text-muted"><?php echo $count ?> Items</h6>
                        <hr class="my-4">                       

                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                          <?php for($i=1;$i <= $count;$i++ )
                          {
                            ?>
                            <img
                              src="<?php echo SITEURL;?>control-panel/general-manager/manage-part/menu-images/<?php echo $img; ?>"
                              class="img-fluid rounded-3" alt="">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted"><?php echo $title; ?></h6>
                            <h6 class="text-black mb-0"><?php echo $description; ?></h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fas fa-minus"></i>
                            </button>

                            <input id="form1" min="1" name="quantity" value="1" type="number"
                              class="form-control form-control-sm" />

                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">$<?php echo $price; ?></h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>
                        <?php
                          }
                    
                    ?>
                    
                  </div>

                  

                  <hr class="my-4">

                  <div class="pt-5">
                    <h6 class="mb-0"><a href="../index.php" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items <?php echo $count ; ?></h5>
                    <h5>$<?php echo $price ; ?></h5>
                  </div>

                  <h5 class="text-uppercase mb-3">Shipping</h5>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Standard-Delivery- $5.00</option>
                      <option value="2">Take Away</option>
                    </select>
                  </div>

                  <h5 class="text-uppercase mb-3">Give code</h5>

                  <div class="mb-5">
                    <div class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Enter your code</label>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <h5>$ <?php echo $price +5; ?></h5>
                  </div>

                    <a href="add-order.php?id_=<?php echo $ID;?>"  class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Order Now</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="../js/bootstrap.js"></script>