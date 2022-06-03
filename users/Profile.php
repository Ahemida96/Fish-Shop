<?php require_once('../connection.php');
require('login-check.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>

    <div class="container rounded bg-white mt-5 mb-5  ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            
            
            <div class="col-md-5 border-right w-75">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                        <?php
                        if(isset($_SESSION['updated']))
                        {
                            echo $_SESSION['updated'];
                            unset($_SESSION['updated']);//to remove session message
                        }
                        ?>
                    </div>
                    <form action="update-user.php" method="POST" id="form">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" name="firstname" class="form-control" placeholder="First name" value="<?php echo $_SESSION['user-fist']; ?>"></div>
                        <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="lastname" class="form-control" value="<?php echo $_SESSION['user-last']; ?>" placeholder="Last Name"></div>
                    </div>
                    <div class="row mt-3">
                        <input name="user-id" value="<?php echo $_SESSION['user-id']; ?>" hidden >
                    <div class="col-md-12"><label class="labels">Email</label><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['user-email']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $_SESSION['user-phone']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $_SESSION['user-address']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Area</label><input type="text" name="resion" class="form-control" placeholder="Region" value="<?php echo $_SESSION['user-region']; ?>"></div>
                    </div>
                    <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div> -->
                    <nav class="breadcrumb mt-4 mx-3 d-flex justify-content-center" role="navigation" aria-label="breadcrumbs">
                <button type="submit" class="btn btn-dark m-2" name="update-user">Save</button>
                <a class="btn btn-dark m-2 " href="../index.php" >Home</a>
                <a class="btn btn-dark m-2" href="logout.php" >Log out</a>
                </nav>
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>