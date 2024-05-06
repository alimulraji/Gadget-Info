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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
   <style>
    

   </style> 
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- First Chhild -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
            <div class="d-flex ">  
            <img src="../images/Logo0.png" alt="" style="width:80px;height:80px;" class="mr-2">
            
            <a class="mt-3" href="index.php"><img src="../images/Logo.png" alt="HTML tutorial" style="width:293px;height:62px;"></a>
</div>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="text-white"><?php
if(!isset($_SESSION['username'])){
  echo " 
  <a class='text-white' href='#'>Welcome Guest</a>
";
}else{
  echo " 
  <a class='nav-link text-white' href='#'> Welcome ".$_SESSION['username']."</a>
  ";
}

?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md 12 bg-info p-1 d-flex align-items-center rounded">
                <div class="p-3 ml-3">
                    <!-- <a href="#"><img src="../images/user.png" alt="" class="rounded" style="height:100px"></a> -->
                    <?php 
                    $username=$_SESSION['username'];
                    $user_image=" Select * from `admin_table` where username='$username'";
                    $result_image=mysqli_query($con,$user_image);
                    $row_image=mysqli_fetch_array($result_image);
                    $user_image=$row_image['user_images'];
                    echo "
                    <a href='#'><img src='./product_images/$user_image' alt='' class='rounded'  style='height:110px'></a>
                    ";        
                    ?>

                    <h class=" ">
                        <?php
                        if(!isset($_SESSION['username'])){
                        echo " 
                        <p class='text-light text-center' href='#'>Admin Name</p>
                        ";
                        }else{
                        echo " 
                        <p class='text-light text-center' href='#'> ".$_SESSION['username']."</p>
                        ";
                        }
                        ?>
                    </h>
                </div>

                <div class="button adbutton text-center ">
            <a class="btn btn-outline-light mx-1 my-2" href="insert_product.php">Insert Products</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?view_products">View Products</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?insert_category">Insert Categories</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?view_categories">View Categories</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?insert_brand">Insert Brands</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?view_brands">View Brands</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?list_orders">All Order</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?list_payments">All Payments</a>
            <a class="btn btn-outline-light mx-1 my-2" href="index.php?list_users">List Users</a>
            
            <?php if(!isset($_SESSION['username'])){
  echo "
  <a class=' btn-outline-light' href='admin_login.php'> Logout</a>
   ";
}else{
  echo " 
  <a class='btn btn-danger' href='admin_logout.php'> Logout</a>
   ";
}
?>



          </div>
            </div>
        </div>




        <!-- Fourth Child -->
        <div class="container my-3 mb-5 ">
            <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');   
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');   
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');   
            }
            if(isset($_GET['edit_products'])){
                include('edit_products.php');   
            }
            if(isset($_GET['edit_images'])){
                include('edit_images.php');   
            }
            if(isset($_GET['delete_product'])){
                include('delete_product.php');   
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');   
            }
            if(isset($_GET['view_brands'])){
                include('view_brands.php');   
            }
            if(isset($_GET['edit_category'])){
                include('edit_category.php');   
            }
            if(isset($_GET['edit_brands'])){
                include('edit_brands.php');   
            }
            if(isset($_GET['delete_category'])){
                include('delete_category.php');   
            }
            if(isset($_GET['delete_brands'])){
                include('delete_brands.php');   
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');   
            }
            if(isset($_GET['list_payments'])){
                include('list_payments.php');   
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');   
            }
            if(isset($_GET['delete_order'])){
                include('delete_order.php');   
            }
            if(isset($_GET['delete_payment'])){
                include('delete_payment.php');   
            }
            if(isset($_GET['delete_user'])){
                include('delete_user.php');   
            }
            
            




            ?>
        </div>


        <!-- Last Child Footer-->
<<<<<<< HEAD
        <div class="fixed-bottom ">
=======
        <div class="fixed-bottom">
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd
    <div class="bg-info p-3 text-center text-white">
        <h6>All Rights Reserved @Design By <b>Gadget Info</b>-2023</h6>
    </div>
<div>

    </div>



<!-- bootstrap Js Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>