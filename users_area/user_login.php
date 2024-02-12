<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User -Registration</title>

  <!-- bootstrap CSS Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- CSS File -->
  <link rel="stylesheet" href="style.css">

</head>

<style>
  body {
    overflow-x: hidden;
  }
</style>

<body class="bg-light  ">

  <!-- nav Bar -->
  <div class="container-fluid p-0">
    <!-- First child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
      <img src="../images/Logo0.png" alt="" class="logo1" style="width:112px;height:113px;">
      <a class="mt-3" href="../index.php"><img src="../images/Logo.png" alt="Logo" style="width:293px;height:62px;"></a>


      <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active ml-2 ">
            <a class=" btn btn-outline-light " href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-2">
            <a class="btn btn-outline-light " href="../display_all.php">Products</a>
          </li>
          <div>
    </nav>
  </div>

  <div class="container mt-5">
    <h1 class="text-center ">User Login</h1>
    <!-- Form -->
    <form action="" method="post">

      <!-- Username field -->
      <div class=" form_outline mb-4 w-50 m-auto ">
        <label for="user_username" class="form-lebel mt-2">Username</label>
        <input type="text" name="user_username" id="user_username" class="form-control" placeholder="Enter your Username" autocomplete="off" required="required">
      </div>

      <!-- Password field -->
      <div class=" form_outline w-50 m-auto ">
        <label for="user_password " class="form-lebel mt-2">User Password</label>
        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter your Password" autocomplete="off" required="required">
      </div>

      <!-- Price -->
      <div class=" form_outline  w-50 m-auto ">
        <input type="submit" name="user_login" class="btn btn-info   px-3 mt-3" value="Login">
        <p class="mt-2 pt-1">Don't have have an account? <a href="user_registration.php" class="text-danger"> Register </a></p>
      </div>

    </form>

  </div>



  <!-- bootstrap Js Link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>

<?php
if (isset($_POST['user_login'])) {
  $user_username = $_POST['user_username'];
  $user_password = $_POST['user_password'];

  $select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
  $result = mysqli_query($con, $select_query);
  $row_count = mysqli_num_rows($result);
  $row_data = mysqli_fetch_assoc($result);
  $user_ip = getIPAddress();

  // Cart Item
  $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
  $select_cart = mysqli_query($con, $select_query_cart);
  $row_count_cart = mysqli_num_rows($select_cart);
  if ($row_count > 0) {
    $_SESSION['username'] = $user_username;
    if (password_verify($user_password, $row_data['user_password'])) {
      $_SESSION['username'] = $user_username;
      // echo "<script>alert('Login Successful')</script>";
      if ($row_count == 1 and $row_count_cart == 0) {
        $_SESSION['username'] = $user_username;
        echo "<script>alert('Login Successful')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      } else {
        $_SESSION['username'] = $user_username;
        echo "<script>alert('Login Successful')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
      }
    } else {
      echo "<script>alert('Invalid Credentials')</script>";
    }
  } else {
    echo "<script>alert('Invalid Credentials')</script>";
  }
}
