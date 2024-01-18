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

<!-- Bootstrap Link For Price Range -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 


<!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- jquery link -->
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


<!-- CSS File -->
<link rel="stylesheet" href="style.css">

<script src="./includes/main.js"></script>

</head>
<body class="">
    <!-- nav Bar -->
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="./images/Logo.png" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ml-2">
        <a  class=" btn btn-outline-light " href="index.php" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ml-2">
        <a  class="btn btn-outline-light " href="display_all.php">Products</a>
      </li>
      <li class="nav-item ml-2">
        <a  class=" btn btn-outline-light " href="#">Register</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Total Price:100/-</a>
      </li>
      
    </ul>
    <form class="d-flex" action="search_product.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">


      
    </form>
  </div>
</nav>





<!-- Fourth child -->
<div class="row">

  <div class="col-md-6  bg-secondary p-0 ">
  

 

  </div>
</div>



    <!-- <div data-role="page">
  
  <div data-role="main" class="ui-content">
    <form method="post" action="/action_page_post.php">
      <div data-role="rangeslider">
        <label for="price-min">Price:</label>
        <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
        <label for="price-max">Price:</label>
        <input type="range" name="price-max" id="price-max" value="199000" min="0" max="199000">
      </div>
        <input type="submit" data-inline="true" value="Submit">
      
      </form>
  </div> -->
</div>

    </div>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>










<!-- Last Child Footer-->
<?php   
include("./includes/footer.php");
?>

    


<!-- Bootstrap ja link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>