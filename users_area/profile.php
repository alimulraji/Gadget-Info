<!-- connect File -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $_SESSION['username'] ?></title>

  <!-- bootstrap CSS Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- CSS File -->
  <link rel="stylesheet" href="../style.css">
<style>
    body{
        overflow-x:hidden ;
    }
    .profile_img{
        width: 80%;
        margin: auto;
        display: block;
        height:80% ;
        object-fit: contain;
      }
      .edit_image{
        width: 100px;
        margin: auto;
        display: block;
        height:auto ;
        object-fit: contain;
      }
</style>
</head>

<body class="">
  <!-- nav Bar -->
  <div class="container-fluid p-0">
    <!-- First child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
      <img src="../images/Logo0.png" alt="" class="logo1">
      <a class="mt-3" href="index.php"><img src="../images/Logo.png" alt="HTML tutorial" style="width:293px;height:62px;"></a>


      <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active ml-2 ">
            <a class=" btn btn-outline-light " href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-2">
            <a class="btn btn-outline-light " href="../display_all.php">Products</a>
          </li>
          <li class="nav-item ml-2">
            <a class=" btn btn-outline-light " href="profile.php">My Account</a>
          </li>
          <li class="nav-item active ml-2 ">
            <a class=" btn btn-outline-light " href="#">Contact <span class="sr-only">(current)</span></a>
          </li>

          <div class="dropdown nav-item ml-2">
            <a class=" dropdown-toggle btn btn-outline-light " data-bs-toggle="dropdown" href="#">Price Range</a>

            <ul class="dropdown-menu ">
              <li><a type="submit" class="dropdown-item" href="filter_price_range.php" name="search_price_range">৳ 1-15000</a></li>
              <li><a class="dropdown-item" href="#">৳ 15000-30000</a></li>
              <li><a class="dropdown-item" href="#">৳ 30000-50000</a></li>
              <li><a class="dropdown-item" href="#">৳ 50000-70000</a></li>
              <li><a class="dropdown-item" href="#">৳ 70000-100000</a></li>
              <li><a class="dropdown-item" href="#">৳ 100000+</a></li>
            </ul>
          </div>

          <li class="nav-item">
            <a class="nav-link text-white" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#">Total Price:<?php total_cart_price(); ?>/-</a>
          </li>

        </ul>
        <form class="d-flex" action="../search_product.php" method="get">
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
        

<?php
if(!isset($_SESSION['username'])){
  echo " <li class='nav-item text-white'>
  <a class='nav-link text-white' href='#'>Welcome Guest</a>
</li>";
}else{
  echo " <li class='nav-item'>
  <a class='nav-link text-white' href='#'> Welcome ".$_SESSION['username']."</a>
  </li> ";
}



if(!isset($_SESSION['username'])){
  echo " <li class='nav-item ml-2'>
<<<<<<< HEAD
  <a class='btn btn-outline-light' href='../users_area/user_login.php'> Login</a>
  </li> ";
}else{
  echo " <li class='nav-item ml-2'>
  <a class='btn btn-outline-light' href='../users_area/logout.php'> Logout</a>
=======
  <a class='btn btn-outline-light' href='./users_area/user_login.php'> Login</a>
  </li> ";
}else{
  echo " <li class='nav-item ml-2'>
  <a class='btn btn-outline-light' href='./users_area/logout.php'> Logout</a>
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd
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


<!-- Fourth Child -->
<div class="row col-md-12">
    <div class="col-md-2 p-0">
        <ul class="navbar-nav bg-info text-center">
        <li class="nav-item bg-info ">
            <a class=" nav-link text-light bg-danger border border mb-4" href="#"><h4>Your Profile</h4> </a>
          </li>
          
<?php 
// $username = $_SESSION['username'];
// $user_image= "SELECT * FROM `user_table` WHERE username='$username'";
// $result_image = mysqli_query($con, $user_image_query);
// $row_image = mysqli_fetch_array($result_image);
// $user_image = $row_image['user_image'];

// echo "<li class='nav-item bg-info'>
//         <img src='./user_images/$user_image' class='profile_img' alt=''>
//     </li>";




$username=$_SESSION['username'];
$user_image=" Select * from `user_table` where username='$username'";
$result_image=mysqli_query($con,$user_image);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['user_images'];
echo "<li class='nav-item bg-info '>
<img src='./user_images/$user_image' class='profile_img' alt=''>
</li>";
        
?>
          
          <li class="nav-item bg-info mb-2 mt-4 border border ">
            <a class=" nav-link text-light btn btn-danger" href="Profile.php"> Pending Orders </a>
          </li>
          <li class="nav-item bg-info mb-2 mt-4 border border-3 ">
            <a class=" nav-link text-light btn btn-danger" href="Profile.php?edit_account">Edit Account </a>
          </li>
          <li class="nav-item bg-info mb-2 mt-4 border border-3 ">
            <a class=" nav-link text-light btn btn-danger" href="Profile.php?my_orders"> My Orders </a>
          </li>
          <li class="nav-item bg-info mb-2 mt-4 border border-3 ">
            <a class=" nav-link text-light btn btn-danger" href="Profile.php?delete_account"> Delete Account </a>
          </li>
          <li class="nav-item bg-info mb-2 mt-4 border border-3  mb-5">
            <a class=" nav-link text-light btn btn-danger" href="logout.php"> Logout </a>
          </li>
        </ul>
    </div>
    <div class="col-md-10 p-0">
<?php  get_user_order_details(); 
if(isset($_GET['edit_account'])){
  include('edit_account.php');
}
if(isset($_GET['my_orders'])){
  include('user_orders.php');
}
<<<<<<< HEAD
if(isset($_GET['delete_account'])){
  include('delete_account.php');
}
=======
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd
?>

    </div>
</div>





  <!-- Last Child Footer-->
  <?php
  include("../includes/footer.php");
  ?>




  <!-- Bootstrap ja link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>