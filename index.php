<!-- connect File -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>

<!-- bootstrap CSS Link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- CSS File -->
<link rel="stylesheet" href="style.css">

</head>
<body class="">
    <!-- nav Bar -->
    <div class="container-fluid p-0">
        <!-- First child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
            <img src="./images/Logo0.png" alt="" class="logo1">
            <a class="mt-3" href="index.php"><img src="./images/Logo.png" alt="HTML tutorial" style="width:293px;height:62px;"></a>
            

      <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active ml-2 ">
                <a  class=" btn btn-outline-light " href="index.php" >Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ml-2">
                <a  class="btn btn-outline-light " href="display_all.php">Products</a>
              </li>
              <li class="nav-item ml-2">
                <a  class=" btn btn-outline-light " href="#">Register</a>
              </li>

                <div class="dropdown nav-item ml-2">
                    <a  class=" dropdown-toggle btn btn-outline-light " data-bs-toggle="dropdown" href="#">Price Range</a>

                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item" href="#">৳ 1-15000</a></li>
                      <li><a class="dropdown-item" href="#">৳ 15000-30000</a></li>
                      <li><a class="dropdown-item" href="#">৳ 30000-50000</a></li>
                      <li><a class="dropdown-item" href="#">৳ 50000-70000</a></li>
                      <li><a class="dropdown-item" href="#">৳ 70000-100000</a></li>
                      <li><a class="dropdown-item" href="#">৳ 100000+</a></li>
                    </ul>
                </div>

              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="#">Total Price:<?php total_cart_price(); ?>/-</a>
              </li>
          
            </ul>
            <form class="d-flex" action="search_product.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">

            </form>
        
      <div>
    </nav>

<!-- calling cart function -->
<?php 
cart();
?>



<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item ">
            <a class="nav-link text-white" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item ml-2">
        <a  class=" btn btn-outline-light " href="./users_area/user_login.php">Login</a>
      </li>
    </ul>    
</nav>

<!-- Third Child -->
<div class="bg-light">
    <h3 class="text-center mt-3">Latest Top Mobile Phone Price & Release Update in Bangladesh</h3>
    <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>


<!-- Fourth child -->
<div class="row">
  <!-- product -->
  <div class="col-md-2  bg-secondary p-0 ">
    <!-- Branch to be displayes -->
      <ul class="navbar-nav me-auto text-center ">
        <li class="mav-item bg-info">
          <a href="#" class="nav-link text-light "> <h4>Delivery Brands </h4></a>
        </li>


        <?php
        getbrands();
        ?> 

        <!-- <li class="mav-item">
          <a href="#" class="nav-link text-light"> Brand1</a>
        </li> -->
      </ul>

        <!-- Categories To be Displayes -->
      <ul class="navbar-nav me-auto text-center mb-4">
        <li class="mav-item bg-info">
          <a href="#" class="nav-link text-light"> <h4>Categories</h4></a>
        </li>

        <?php
       getcategories();
        ?> 

      </ul>

    </div>
        <div class="col-md-10 row">
              <!-- Fetching Products -->
              <?php
              // calling function
              
              
              getproducts();
              get_unique_categories();
              get_unique_brands();
              //search_product();
              // $ip = getIPAddress();  
              // echo 'User Real IP Address - '.$ip; 
              ?>

        </div>
   </div>
 
</div>








<!-- Last Child Footer-->
<?php   
include("./includes/footer.php");
?>

    


<!-- Bootstrap ja link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>