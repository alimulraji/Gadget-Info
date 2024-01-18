<?php
    // including connect file

    include('./includes/connect.php');


    // gateing products
    function getproducts(){
            global $con;

            //condition to check isset or not
            if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
            

        $select_query="select * from `products` order by rand() LIMIT 0,9";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
        
          echo " <div class=''  >
          <div class='col-md-3  mb-4'>
                  <div class='card' style='width: 18rem; height: 425px;'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text mb-2'>$product_description</p>
                      <p class='card-text mb-2'>Price: $product_price /- </p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

                    </div>
                  </div>
                </div>
                </div> ";

}
}
}
}


//getting all products
function get_all_categories(){
    global $con;

    //condition to check isset or not
    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    

$select_query="select * from `products` order by rand()";
$result_query=mysqli_query($con,$select_query);

while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];

  echo " <div class=''  >
  <div class='col-md-3  mb-4'>
          <div class='card' style='width: 18rem; height: 425px;'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text mb-2'>$product_description</p>
              <p class='card-text mb-2'>Price: $product_price /- </p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
              <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

            </div>
          </div>
        </div>
        </div> ";

}
}
}
}


// getting unique categories

function get_unique_categories(){
    global $con;

    //condition to check isset or not
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];

$select_query="select * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if ($num_of_rows == 0) {
    echo "<h3 class='col-md-12 text-center text-danger'>No Stock for this Category</h3>";
}

while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];

  echo " <div class=''  >
  <div class='col-md-3  mb-4'>
          <div class='card' style='width: 18rem;  height: 425px;'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text mb-2'>$product_description</p>
              <p class='card-text mb-2'>Price: $product_price /- </p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
              <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

            </div>
          </div>
        </div>
        </div> ";

}
}
}




// getting unique brands

function get_unique_brands(){
    global $con;

    //condition to check isset or not
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];
        
$select_query="select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if ($num_of_rows == 0) {
    echo "<h3 class='col-md-12 text-center text-danger'>This Brand  is not available for service</h3>";
}

while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];

  echo " <div class=''  >
  <div class='col-md-3  mb-4'>
          <div class='card' style='width: 18rem;  height: 425px;'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text mb-2'>$product_description</p>
              <p class='card-text mb-2'>Price: $product_price /- </p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
              <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

            </div>
          </div>
        </div>
        </div> ";

}
}
}



// displaying brands in side nav
function getbrands(){
    global $con;
$select_brands="select * from brands";
        $result_brands=mysqli_query($con,$select_brands);
        while($row_data=mysqli_fetch_assoc($result_brands)){
          $brand_title=$row_data['brand_title'];
          $brand_id=$row_data['brand_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a> 
          </li>";
        }

    }

// displaying categories in side nav
function getcategories(){
    global $con;
    $select_categories="select * from categories";
    $result_categories=mysqli_query($con,$select_categories);
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo "<li class='nav-item'>
      <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a> 
      </li>";
    }
}

// seaeching ptoduct function

function search_product(){
    global $con;
        if(isset($_GET['search_data_product'])){
            $search_data_value=$_GET['search_data'];
        $search_query="select * from `products` where product_keywords like '%$search_data_value%'";
        $result_query=mysqli_query($con,$search_query);

        $num_of_rows=mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h3 class='col-md-12 text-center text-danger'>No results match No Products found on this categoey!</h3>";
        }

        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
        
          echo " <div class=''  >
          <div class='col-md-3  mb-4'>
                  <div class='card' style='width: 18rem; height: 425px;'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text mb-2'>$product_description</p>
                      <p class='card-text mb-2'>Price: $product_price /- </p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

                    </div>
                  </div>
                </div>
                </div> ";

}
}
}

// view details function
function view_details(){
    global $con;

     //condition to check isset or not
     if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $product_id=$_GET ['product_id'];
    $select_query="select * from `products` where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);

    while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_image2=$row['product_image2'];
          $product_image3=$row['product_image3'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
        
}
}
}
}
}



// show product_details page bottom 
function showproductdetails(){
  global $con;

  //condition to check isset or not
  if(!isset($_GET['category'])){
  if(!isset($_GET['brand'])){
  

$select_query="select * from `products` order by rand() LIMIT 0,6";
$result_query=mysqli_query($con,$select_query);

while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];

echo " <div class=''  >
<div class='col-md-3  mb-4'>
        <div class='card' style='width: 18rem; height: 425px;'>
          <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text mb-2'>$product_description</p>
            <p class='card-text mb-2'>Price: $product_price /- </p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

          </div>
        </div>
      </div>
      </div> ";

}
}
}
}

// get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 



// cart function
function cart(){
  if(isset($_GET['add_to_cart'])){
      global $con;
      $get_ip_add = getIPAddress();
      $get_product_id = $_GET['add_to_cart'];
      $select_query = "select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
      $result_query = mysqli_query($con, $select_query);
      $num_of_rows = mysqli_num_rows($result_query); 

      if($num_of_rows > 0){
          echo "<script>alert('This Item is Already present inside the cart')</script>";
          echo "<script>window.open('index.php','_self')</script>";
      } else {
          $insert_query = "insert into `cart_details` (product_id, ip_address, quantity) values ($get_product_id,'$get_ip_add',0)";
          $result_query = mysqli_query($con, $insert_query);
          echo "<script>alert('This Item is added to cart')</script>";
          echo "<script>window.open('index.php','_self')</script>";
      }
  }
}

// Function to get cart item number
function cart_item(){
  
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query); 
  
      }else {
        global $con;
        $get_ip_add = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);         
      }
      echo $count_cart_items;
    }


// Total Price Function

function total_cart_price(){
  global $con;
  $get_ip_add = getIPAddress();
  $total_price = 0;

  $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
  $result = mysqli_query($con, $cart_query);

  while($row = mysqli_fetch_array($result)){
      $product_id = $row['product_id'];
      $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
      $result_products = mysqli_query($con, $select_products);

      while($row_product = mysqli_fetch_array($result_products)){ // Corrected variable name
          $product_price = $row_product['product_price'];
          $total_price += $product_price;
      }
  }

  echo $total_price;
}
?>