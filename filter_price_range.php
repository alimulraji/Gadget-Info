<?php


?>

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

                    <form class="form-inline" action="index.php" method="get">
    <div class="dropdown">
        
        <div class="dropdown-menu" aria-labelledby="priceRangeDropdown">
            <input type="hidden" name="search_product_price" value="1">
            <button class="dropdown-item" type="submit" name="search_price_range" value="1-100000">৳ 1-100000</button>
            <button class="dropdown-item" type="submit" name="search_price_range" value="15000-30000">৳ 15000-30000</button>
            <button class="dropdown-item" type="submit" name="search_price_range" value="30000-50000">৳ 30000-50000</button>
            <button class="dropdown-item" type="submit" name="search_price_range" value="50000-70000">৳ 50000-70000</button>
            <button class="dropdown-item" type="submit" name="search_price_range" value="70000-100000">৳ 70000-100000</button>
            <button class="dropdown-item" type="submit" name="search_price_range" value="100000+">৳ 100000+</button>
        </div>
    </div>
</form>
                </div>

                <li class="nav-item">
            <a class="nav-link text-white" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
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
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item ml-2">
        <a  class=" btn btn-outline-light " href="./users_area/user_login.php">Login</a>
      </li>
    </ul>    
</nav>

<!-- Third Child -->
<div class="bg-light">
    <h3 class="text-center mt-3">Search Results</h3>
    <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>


<!-- Fourth child -->
<div class="row">
  <!-- product -->
  <div class="col-md-2  bg-secondary p-0 ">
    <!-- Branch to be displayes -->
      

    </div>
        <div class="col-md-10 row">
              <!-- Fetching Products -->
              <?php
              include('includes/connect.php');
             if(isset($_GET['search_price_range'])){
                $search_data_value = ''; // Set your default search value here if needed
            
                $min_price = 1;
                $max_price = 100000;
            
                // Check if the price range is specified
                $price_range = explode('-', $_GET['search_price_range']);
                $min_price = $price_range[0];
                $max_price = $price_range[1];
            
                $search_query = "SELECT * FROM `products` WHERE product_price BETWEEN $min_price AND $max_price ";
                $result_query = mysqli_query($con, $search_query);
            
                // Rest of your code...
            }
            while($row = mysqli_fetch_assoc($result_query)){
                // Extract product information
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
      
                // Display product card
                echo "<div class='col-md-3 mb-4'>
                        <div class='card border border-info shadow bg-white rounded' style='width: 18rem; height: 440px;'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top mt-2' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text mb-2'>$product_description</p>
                                <p class='card-text mb-2'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                            </div>
                        </div>
                    </div>";
            }
        
                  
              ?>

        </div>
   </div>
 
</div>








<!-- Last Child -->
<?php   
include("./includes/footer.php");
?>

    


<!-- Bootstrap ja link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>