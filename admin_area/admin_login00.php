<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
    
    <title>Admin Login</title>

    <style>
        body{
            overflow: hidden;
        }
        img {
            height: 550px;
        }
        .ml-5, .mx-5 {
    margin-left: 9rem !important;
}
.row2 {
    width: auto;
    margin: auto;
    overflow: hidden;
    text-align: center;
}
    </style>
</head>
<!-- <body>
    <div class="container-fluid m-3 ">
        <h2 class="text-center  mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/Admin_reg.jpg" alt="Admin Registration">
            </div>
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" placeholder="Enter Your Username" required="required" class="form-control">
                    </div>
                </form>       
            </div>
        </div>
    </div>
</body> -->

<body class=" ">
    
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
        <img src="../images/Logo0.png" alt="" class="logo1" style="width:112px;height:113px;">
        <a class="mt-3" href="../index.php"><img src="../images/Logo.png" alt="Logo" style="width:293px;height:62px;"></a>
    <div>
    </nav>
    </div>
            <div class="container mt-3 ">
        <h1 class="text-center ">Admin Login</h1>
     <!-- Form -->
     <div class=" d-flex ">
     <div class="col-lg-6 col-xl-6 mt-5 mr-5">
                <img src="../images/Admin_reg.jpg" alt="Admin Registration">
            </div>
            <div class="col-lg-6 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data ">

        <!-- Username field -->
        <div class=" form_outline mb-4 mt-5  ">
                <label for="user_username" class="form-lebel mt-2">Username</label>
                <input  type="text"  name="user_username" id="user_username" class="form-control" placeholder="Enter your Username" autocomplete="off" required="required">
            </div>
            
            <!-- Image field -->
            <!-- <div class=" form_outline mb-4 m-auto ">
                <label for="user_image" class="form-lebel mt-2">User Image</label>
                <input  type="file"  name="user_image" id="user_image" class="form-control" required="required">
            </div> -->
            <!-- Password field -->
            <div class=" form_outline m-auto ">
                <label for="user_password " class="form-lebel mt-2">Password</label>
                <input  type="password"  name="user_password" id="user_password" class="form-control" placeholder="Enter your Password" autocomplete="off" required="required">
            </div>
             <!-- Confirm Password field -->
             
        
            <div class="text-center"></div>
            <div class=" form_outline  mb-4 m-auto ">
                <input type="submit" name="admin_login" class="btn btn-info   px-3 mt-4  " value="Login">
                <p class="mt-2">Don't have an account? <a href="admin_registration.php" class="text-danger"> Register </a></p>
            </div>
            </form>
        </div>
            



   </div>

    </div>


   <!-- Price -->
   
   






   <?php
if (isset($_POST['admin_login'])) {
  $user_username = $_POST['user_username'];
  $user_password = $_POST['user_password'];

  $select_query = "SELECT * FROM `admin_table` WHERE username='$user_username'";
  $result = mysqli_query($con, $select_query);
  $row_count = mysqli_num_rows($result);
  $row_data = mysqli_fetch_assoc($result);
  $user_ip = getIPAddress();

  if ($row_count > 0) {
    $_SESSION['username'] = $user_username;
    if (password_verify($user_password, $row_data['user_password'])) {
      $_SESSION['username'] = $user_username;
      // echo "<script>alert('Login Successful')</script>";
      if ($row_count == 1 and $row_count_cart == 0) {
        $_SESSION['username'] = $user_username;
        echo "<script>alert('Login Successful')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
    } else {
      echo "<script>alert('Invalid Credentials')</script>";
    }
  } else {
    echo "<script>alert('Invalid Credentials')</script>";
  }
}


?>

   

   <!-- bootstrap Js Link -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>