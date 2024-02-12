<!-- connect File -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
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
            <a class=" btn btn-outline-light " href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-2">
            <a class="btn btn-outline-light " href="display_all.php">Products</a>
          </li>
          <?php

          if (!isset($_SESSION['username'])) {
            echo "<li class='nav-item ml-2'>
            <a class='btn btn-outline-light 'href='./users_area/user_registration.php'>Register</a>
          </li>";
          } else {
            echo "<li class='nav-item ml-2'>
            <a class='btn btn-outline-light 'href='./users_area/profile.php'>My Account</a>
          </li>";
          }

          ?>

          <li class="nav-item active ml-2 ">
            <a class=" btn btn-outline-light " href="#">Contact <span class="sr-only">(current)</span></a>
          </li>
          <div class="dropdown nav-item ml-2">
            <a class=" dropdown-toggle btn btn-outline-light " data-bs-toggle="dropdown" href="#">Price
              Range</a>
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





    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">

        <?php
        if (!isset($_SESSION['username'])) {
          echo " <li class='nav-item'>
  <a class='nav-link text-white' href='#'>Welcome Guest</a>
</li>";
        } else {
          echo " <li class='nav-item'>
  <a class='nav-link' href='#'> Welcome " . $_SESSION['username'] . "</a>
  </li> ";
        }



        if (!isset($_SESSION['username'])) {
          echo " <li class='nav-item ml-2'>
  <a class='btn btn-outline-light' href='./users_area/user_login.php'> Login</a>
  </li> ";
        } else {
          echo " <li class='nav-item ml-2'>
  <a class='btn btn-outline-light' href='./users_area/logout.php'> Logout</a>
  </li> ";
        }
        ?>
      </ul>
    </nav>

    <!-- Third Child -->
    <div class="bg-light">
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">Communications is at the heart of e-commerce and community</p>
    </div>


    <!-- Fourth child -->




    <?php
    include('./includes/connect.php');

    if (isset($_GET['product_id'])) {
      if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
          $product_id = $_GET['product_id'];
          $select_query = "select * from `products` where product_id=$product_id";
          $result_query = mysqli_query($con, $select_query);

          while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_image3 = $row['product_image3'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            $first_release = $row['first_release'];
            $product_color = $row['product_color'];
            $network = $row['network'];
            $sim = $row['sim'];
            $usb_type = $row['usb_type'];
            $product_material = $row['product_material'];
            $product_dimension = $row['product_dimension'];
            $product_weight = $row['product_weight'];
            $display_size = $row['display_size'];
            $display_resolution = $row['display_resolution'];
            $display_technology = $row['display_technology'];
            $display_features = $row['display_features'];
            $back_camera_resolution = $row['back_camera_resolution'];
            $back_camera_features = $row['back_camera_features'];
            $back_video_recording = $row['back_video_recording'];
            $front_camera_resolution = $row['front_camera_resolution'];
            $front_camera_features = $row['front_camera_features'];
            $front_video_recording = $row['front_video_recording'];
            $battery_capacity = $row['battery_capacity'];
            $charging_capacity = $row['charging_capacity'];
            $operating_system = $row['operating_system'];
            $chipset = $row['chipset'];
            $ram = $row['ram'];
            $processor = $row['processor'];
            $gpu = $row['gpu'];
            $rom = $row['rom'];
            $micro_sd_slot = $row['micro_sd_slot'];
            $sound_features = $row['sound_features'];
            $made_in = $row['made_in'];


            echo "  <div class='container col-md-8'>
                  <div class='card'>
                    <div class='card-body2  '>
                      <div class='row'>
                        <div class='col-lg-4 '>                       
                            <div id='demo' class='carousel slide' data-bs-ride='carousel'>
                               <div class = 'main-wrapper'>
                                    <div class = 'container'>
                                        <div class = 'product-div'>
                                            <div class = 'product-div-left'>
                                                <div class = 'img-container'>
                                                  <img src = 'admin_area/product_images/$product_image1' alt = 'watch'>
                                                </div>
                                              <div class = 'hover-container'>
                                                  <div><img src = 'admin_area/product_images/$product_image1'></div>
                                                  <div><img src = 'admin_area/product_images/$product_image2'></div>
                                                  <div><img src = 'admin_area/product_images/$product_image3'></div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class='row2 col-lg-7  '>
                        <h2 class='box-title mt-5'> $product_title</h2>
                        <p>$product_description</p>
                        <h2 class='mt-5'>
                        $product_price<small class='text-success'>(36%off)</small>
                        </h2>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                        <a href='index.php' class='btn btn-secondary'>Go Home</a>
                        <h3 class='box-title mt-5'>Key Highlights</h3>
                        <tr>
                            <td>✅$chipset</td>
                        </tr>
                        <br>
                        <tr>
                            <td>✅$back_camera_resolution</td>
                        </tr>
                        <br>
                        <tr>
                            <td>✅$display_features</td>
                        </tr>          
                    </div>
        </div>
        </div>        
      <div class=' row3 col-lg-10 '>
        <h3 class='box-title mt-5'>General Info</h3>
        <div class='table-responsive'>
            <table class='table table-bordered table table-striped table-product'>
              
              <tbody Class='spc' '>
                  <tr>
                      <td>First Release </td>
                      <td>$first_release</td></tr>
                  <tr>
                      <td>Colors</td>
                      <td>$product_color</td></tr>

                  <tr>
                    <td class='font-weight-bold'>Connectivity</td>
                    <td> </td></tr>

                  <tr>
                    <td>Network </td>
                    <td>$network</td></tr>
                  <tr>
                    <td>SIM</td>
                    <td>$sim</td></tr>
                  <tr>
                    <td>USB Type</td>
                    <td>$usb_type</td></tr>

                  <tr>
                    <td class='font-weight-bold'>Body</td>
                    <td> </td></tr>
                  <tr>
                    <td>Material</td>
                    <td>$product_material</td></tr>
                  <tr>
                    <td>Dimensions</td>
                    <td>$product_dimension</td></tr>
                  <tr>
                    <td>Weight</td>
                    <td>$product_weight</td></tr>

                  <tr>
                    <td class='font-weight-bold'>Display</td>
                    <td></td></tr>

                  <tr>
                    <td>Size</td>
                    <td>$display_size</td></tr>
                  <tr>
                    <td>Resolution</td>
                    <td>$display_resolution</td></tr>
                  <tr>
                    <td>Technology</td>
                    <td>$display_technology</td></tr>
                  <tr>
                    <td>Features</td>
                    <td>$display_features</td></tr>

                    <tr>
                    <td class='font-weight-bold'>  Back Camera </td>
                    <td></td></tr>

                  <tr>
                    <td>Resolution</td>
                    <td>$back_camera_resolution</td></tr>
                  <tr>
                    <td>Features</td>
                    <td>$back_camera_features</td></tr>
                    <tr>
                    <td>Video Recording	</td>
                    <td>$back_video_recording</td></tr>
                  <tr>
                    <td class='font-weight-bold'>  Front Camera	</td>
                    <td></td></tr>
                    <tr>
                    <td>Resolution </td>
                    <td>$front_camera_resolution</td></tr>
                  <tr>
                    <td>Features</td>
                    <td>$front_camera_features</td></tr>
                  <tr>
                    <td>Video Recording	</td>
                    <td>$front_video_recording</td></tr>
                    <tr>

                    <td class='font-weight-bold'>Battery</td>
                    <td> </td></tr>

                  <tr>
                    <td>Type and Capacity</td>
                    <td>Lithium-polymer $battery_capacity mAh (non-removable)</td></tr>
                  <tr>
                    <td>Fast Charging</td>
                    <td>✅ $charging_capacity Fast Charging</td></tr>
                  <tr>

                    <td class='font-weight-bold'>Performance</td>
                    <td> </td></tr>

                  <tr>
                    <td>Operating System	</td>
                    <td>$operating_system</td></tr>
                    <tr>
                    <td>Chipset</td>
                    <td>$chipset</td></tr>
                  <tr>
                    <td>RAM</td>
                    <td>$ram GB</td></tr>
                    <tr>
                    <td>Processor </td>
                    <td>$processor</td></tr>
                  <tr>
                    <td>GPU</td>
                    <td>$gpu</td></tr>

                  <tr>
                    <td class='font-weight-bold'>Storage</td>
                    <td> </td></tr>

                    <tr>
                    <td>ROM</td>
                    <td>$rom GB</td></tr>
                  <tr>
                    <td>MicroSD Slot</td>
                    <td>$micro_sd_slot</td></tr>
                    <tr>

                    <td class='font-weight-bold'>Sound </td>
                    <td> </td></tr>

                  <tr>
                    <td>Features</td>
                    <td>$sound_features</td></tr>
                  <tr>
                    <td>Made in</td>
                    <td>$made_in</td></tr>
          
              </tbody>
           </table>
        </div>
      </div>


      
      


            </table>
            </div>
            </div>";
          }
        }
      }
    }




    ?>
    <div class="bg-light">
      <h3 class="text-center mt-5 mb-4">Others Mobile</h3>
      <!-- <p class="text-center">Communications is at the heart of e-commerce and community</p> -->
    </div>
    <!-- Fourth child -->
    <div class="row">
      <!-- product -->
      <div class="col-md-1  p-0 ">

      </div>
      <div class="col-md-8 row">
        <!-- Fetching Products -->
        <?php
        // calling function

        // search_product();
        showproductdetails();

        ?>

      </div>
    </div>

  </div>









  <!-- Last Child -->
  <?php
  include("./includes/footer.php");
  ?>




  <script src="script.js"></script>
  <!-- Bootstrap ja link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>