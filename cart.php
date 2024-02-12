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
  <title>Mobile Shop Cart Details</title>

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
            <a class=" btn btn-outline-light " href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-2">
            <a class="btn btn-outline-light " href="display_all.php">Products</a>
          </li>
          <li class="nav-item ml-2">
            <a class=" btn btn-outline-light " href="./users_area/user_registration.php">Register</a>
          </li>

          <div class="dropdown nav-item ml-2">
            <a class=" dropdown-toggle btn btn-outline-light " data-bs-toggle="dropdown" href="#">Price Range</a>

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
            <a class="nav-link text-white" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
          </li>
        </ul>

        <!-- <form class="d-flex" action="search_product.php" method="get">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
        </form> -->

        <div>
    </nav>

    <!-- calling cart function -->
    <?php
    cart();
    ?>



    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        
<?php
if(!isset($_SESSION['username'])){
  echo " <li class='nav-item'>
  <a class='nav-link text-white' href='#'>Welcome Guest</a>
</li>";
}else{
  echo " <li class='nav-item'>
  <a class='nav-link' href='#'> Welcome ".$_SESSION['username']."</a>
  </li> ";
}



if(!isset($_SESSION['username'])){
  echo " <li class='nav-item ml-2'>
  <a class='btn btn-outline-light' href='./users_area/user_login.php'> Login</a>
  </li> ";
}else{
  echo " <li class='nav-item ml-2'>
  <a class='btn btn-outline-light' href='./users_area/logout.php'> Logout</a>
  </li> ";
}
?>
      </ul>
    </nav>

    <!-- Third Child -->
    <div class="bg-light">
      <h3 class="text-center mt-3">Latest Top Mobile Phone Price & Release Update in Bangladesh</h3>
      <p class="text-center">Communications is at the heart of e-commerce and community</p>
    </div>


  <!-- Forth Child- Table-->
    <div class="container row">
        <div class="row">
            <form class="row" action="" method="post">
            <table class="table table-bordered text-center">
                
         <!-- PHP code to Display Dynamic Data -->
<?php 

        global $con;
        $get_ip_add = getIPAddress();
        $total_price = 0;

        $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
        $result = mysqli_query($con, $cart_query);
        $result_count=Mysqli_num_rows($result);
        if($result_count>0){
        echo "<thead>
        <tr>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove</th>
            <th coldpan='2'>Operations</th>
        </tr>
    </thead>
    <tbody>";
        
        while ($row = mysqli_fetch_array($result)) {
            $product_id = $row['product_id'];
            $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
            $result_products = mysqli_query($con, $select_products);

            while ($row_product = mysqli_fetch_array($result_products)) {
                $product_price = $row_product['product_price'];
                $price_table = $row_product['product_price'];
                $product_title = $row_product['product_title'];
                $product_image1 = $row_product['product_image1'];
                $total_price += $product_price;
                    
                    ?>

                            <tr>
                                <td class="align-middle"><?php echo $product_title ?></td>
                                <td><img src="./admin_area/product_images/<?php echo $product_image1?>" style="width:auto;height:80px;" alt=""></td>
                                <td class="align-middle"><input type="text" name="qty" id="" class="form-input w-75    "></td>



<?php 
$get_ip_add = getIPAddress();
if(isset($_POST["update_cart"])){
    $quantities = $_POST["qty"];
    $update_cart = "UPDATE `cart_details` SET quantity = $quantities WHERE ip_address = '$get_ip_add'";
    $result_products_quantity = mysqli_query($con, $update_cart);
    $total_price += $product_price * $quantities;
}
?>



                        <td class="align-middle"><?php echo $product_price ?>/-</td>
                        <td class="align-middle"><input type="checkbox" name="removeitem[]" value=" <?php echo $product_id ?>"></td>
                        <td class="align-middle">
                            <!-- <button class="  btn btn-success mx-3">Update</button> -->
                            <input type="submit" value="Update Cart" class="btn btn-success mx-3" name="update_cart">
                            <!-- <button class=" btn btn-danger mx-3">Remove</button> -->
                            <input type="submit" value="Remove" class="btn btn-danger mx-3" name="remove_cart">
                        </td>
                    </tr>
                <?php 
                    }
                }
              }
else{
  echo " <h2 class=' text-danger '>Cart is Empty</h2>";
}



                ?>


                </tbody>
            
            </table>
            <!-- sub Total -->
            <div class="d-flex mb-4">
              <?php 
              global $con;
              $get_ip_add = getIPAddress();
              $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
              $result = mysqli_query($con, $cart_query);
              $result_count=Mysqli_num_rows($result);
              if($result_count>0){
                echo "<h4 class='px-3'>Subtotal: <strong class='text-info'>$total_price/-</strong></h4>
                <input type='submit' value='Continue Shopping' class='btn btn-info mx-3' name='continue_shopping'>
                
                
                <a href='users_area/checkout.php' class='btn btn-secondary  pt-2 pb-2 '>Checkout</a>";
              }else{
                echo "<input type='submit' value='Continue Shopping' class='btn btn-info mx-3 ' name='continue_shopping'>";
              }
              if(isset($_POST['continue_shopping'])){
                echo "<script>window.open('index.php','_self')</script>";
              }


              ?>

            
                
            </div>
            </form>
        </div>
    </div>

<!-- Function to remove item -->
<?php
function remove_cart_item()
{
    global $con;
    if (isset($_POST['remove_cart'])) {
        foreach ($_POST["removeitem"] as $remove_id) {
            // Sanitize and validate the $remove_id to prevent SQL injection
            $remove_id = intval($remove_id);

            $delete_query = "DELETE FROM `cart_details` WHERE product_id = ?";
            $stmt = mysqli_prepare($con, $delete_query);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, "i", $remove_id);

            // Execute statement
            $run_delete = mysqli_stmt_execute($stmt);

            // Check if the delete was successful
            if ($run_delete) {
                echo "<script> window.open('cart.php','_self')</script>";
            } else {
                // Handle the error as needed
                echo "Error in deleting record: " . mysqli_error($con);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
}

remove_cart_item(); // Call the function
?>





  <!-- Last Child Footer-->
  <div class="">
    <div class="bg-info p-3 text-center text-white">
        <h6>All Rights Reserved @Design By <b>Gadget Info</b>-2023</h6>
    </div>
<div>


  <!-- Bootstrap ja link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>