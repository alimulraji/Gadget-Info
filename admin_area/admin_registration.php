
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
    <title>Admin Registration</title>

    <!-- bootstrap CSS Link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- CSS File -->
<link rel="stylesheet" href="style.css">

</head>

<body class="bg-light  ">
    
<div class="container-fluid p-0">
    <!-- First child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
      <img src="../images/Logo0.png" alt="" class="logo1" style="width:112px;height:113px;">
      <a class="mt-3" href="../index.php"><img src="../images/Logo.png" alt="Logo" style="width:293px;height:62px;"></a>


      <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active ml-2 ">
            <a class=" btn btn-outline-light " href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-2">
            <a class="btn btn-outline-light " href="../display_all.php">Products</a>
          </li> -->
          

          
        

        <div>
    </nav>
    </div>
            <div class="container mt-5">
        <h1 class="text-center ">New Admin User Registration</h1>
     <!-- Form -->
        <form action="" method="post" enctype="multipart/form-data">

        <!-- Username field -->
        <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="user_username" class="form-lebel mt-2">Username</label>
                <input  type="text"  name="user_username" id="user_username" class="form-control" placeholder="Enter your Username" autocomplete="off" required="required">
            </div>
            <!-- Email field -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="user_email" class="form-lebel mt-2">Email</label>
                <input  type="text"  name="user_email" id="user_email" class="form-control" placeholder="Enter your Email" autocomplete="off" required="required">
            </div>
            <!-- Image field -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="user_image" class="form-lebel mt-2">User Image</label>
                <input  type="file"  name="user_image" id="user_image" class="form-control" required="required">
            </div>
            <!-- Password field -->
            <div class=" form_outline w-50 m-auto ">
                <label for="user_password " class="form-lebel mt-2">User Password</label>
                <input  type="password"  name="user_password" id="user_password" class="form-control" placeholder="Enter your Password" autocomplete="off" required="required">
            </div>
             <!-- Confirm Password field -->
             <div class=" form_outline w-50 m-auto ">
                <label for="confirm_user_password " class="form-lebel mt-2">Confirm Password</label>
                <input  type="password"  name="confirm_user_password" id="confirm_user_password" class="form-control" placeholder="Confirm Password" autocomplete="off" required="required">
            </div>


   <!-- Price -->
   <div class=" form_outline  w-50 m-auto ">
               <input type="submit" name="admin_register" class="btn btn-info   px-3 mt-3" value="Register">
               <p class="mt-2 pt-1">Already have an account? <a href="admin_login.php" class="text-danger"> Login </a></p>
           </div>

        </form>



   </div>

   <!-- bootstrap Js Link -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<!-- PHP Code -->
<?php 
if(isset($_POST['admin_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $confirm_user_password = $_POST['confirm_user_password'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();

    // select_query
    $select_query = "SELECT * FROM `admin_table` WHERE username='$user_username' or user_email='$user_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);

    if($rows_count > 0){
        echo "<script>alert('UserName and Email Already Exist')</script>";
    } else if($user_password != $confirm_user_password){
        echo "<script>alert('Password Do Not Match')</script>";
    } else {
        move_uploaded_file($user_image_tmp, "./product_images/$user_image");
        $insert_query = "INSERT INTO `admin_table` (username, user_email, user_password, user_images, user_ip) VALUES ('$user_username', '$user_email', '$hash_password', '$user_image', '$user_ip')";
        $sql_execute = mysqli_query($con, $insert_query);

        if($rows_count > 0){
            $_SESSION['username'] = $user_username;
            echo "<script>alert('You have items in your Cart')</script>";
            echo "<script>window.open('admin_login.php','_self')</script>";
        } 
            echo "<script>alert('Registration Successful')</script>";
            echo "<script>window.open('admin_login.php','_self')</script>";
        }  
        
    }

?>



