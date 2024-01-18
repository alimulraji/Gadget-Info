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

<body class="bg-light  ">
    

            <div class="container mt-2">
        <h1 class="text-center ">New User Registration</h1>
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
            <!-- Address field -->
        <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="user_address" class="form-lebel mt-2">Address</label>
                <input  type="text"  name="user_address" id="user_address" class="form-control" placeholder="Enter your Address" autocomplete="off" required="required">
            </div>
            <!-- Contact field -->
        <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="user_contact" class="form-lebel mt-2">Mobile</label>
                <input  type="text"  name="user_contact" id="user_contact" class="form-control" placeholder="Enter your Mobile Number" autocomplete="off" required="required">
            </div>
            <div class="text-center"></div>






   <!-- Price -->
   <div class=" form_outline  w-50 m-auto ">
               <input type="submit" name="user_register" class="btn btn-info   px-3 mt-3" value="Register">
               <p class="mt-2 pt-1">Already have an account? <a href="user_login.php" class="text-danger"> Login </a></p>
           </div>

        </form>



   </div>









   

   <!-- bootstrap Js Link -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>