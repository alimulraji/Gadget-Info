<?php
include('../includes/connect.php');
// if(isset($_POST['insert_product'])){
//     $product_title=$_POST['Product_title'];
//     $description=$_POST['description'];
//     $product_keywords=$_POST['product_keywords'];
//     $product_category=$_POST['product_category'];
//     $product_brands=$_POST['product_brands'];
//     $product_price=$_POST['product_price'];
//     $product_status='true';


    if (isset($_POST['insert_product'])) {
        // Capture form data
        $product_title = $_POST['product_title'];
        $description = $_POST['description'];
        $product_keywords = $_POST['product_keywords'];
        $product_category = $_POST['product_category'];
        $product_brands = $_POST['product_brands'];
        $product_price = $_POST['product_price'];
        $product_status = 'true';

    // accessing images
    $product_image1=$_FILES['product_image1'] ['name'];
    $product_image2=$_FILES['product_image2'] ['name'];
    $product_image3=$_FILES['product_image3'] ['name'];
    
    // accessing images tmp name
    $temp_image1=$_FILES['product_image1'] ['tmp_name'];
    $temp_image2=$_FILES['product_image2'] ['tmp_name'];
    $temp_image3=$_FILES['product_image3'] ['tmp_name'];

    // checking empty condtion

    if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script> alert('Pleasr fill all the available fields')</script>";
        exit();
    }else{
        // move_uploaded_file($temp_image1,"./product_images/$product_images1");
        // move_uploaded_file($temp_image2,"./product_images/$product_images2");
        // move_uploaded_file($temp_image3,"./product_images/$product_images3");
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");




        // insert query
        $insert_products="insert into `products`  (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

        $result_query = mysqli_query($con, $insert_products);

        if ($result_query) {
        echo "<script>alert('Successfully inserted the products')</script>";
        }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Deshboard</title>

        <!-- bootstrap CSS Link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- CSS File -->
<link rel="stylesheet" href="style.css">
</head>







<body class="bg-light ">
   
    <div class="container mt-2">
        <h1 class="text-center ">Insert Products</h1>
     <!-- Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="product_title" class="form-lebel">Product Title</label>
                <input  type="text"  name="product_title" id="product_title" class="form-control" placeholder="Enter product Title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="description" class="form-lebel mt-2">Product Description</label>
                <input  type="text"  name="description" id="description" class="form-control" placeholder="Ente Product Description" autocomplete="off" required="required">
            </div>
            <!-- Product Keywords -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="product_keywords" class="form-lebel mt-2">Product Keywords</label>
                <input  type="text"  name="product_keywords" id="product_keywords" class="form-control" placeholder="Ente Product Keywords" autocomplete="off" required="required">
            </div>
            

            <!-- categories -->
            <div class=" form_outline mb-4 w-50 m-auto  ">
                <select class="form-control form_select  mt-2" name="product_category" id="" >
                    <option value="" >Select a Category</option>
                    <?php
                        // $select_query="select * from 'categories'";
                        // $result_query=mysqli_query($con,$select_query);
                        // while($row=mysqli_fetch_assoc($result_query)){
                        //     $category_title=$row['category_title'];
                        //     $category_id=$row['category_id'];
                        //     echo "<option value=''>$category_title</option>";
                        // }
                    ?>

                    <?php
                        $select_query = "SELECT * FROM categories";  // Removed single quotes around 'categories'
                        $result_query = mysqli_query($con, $select_query);

                        while ($row = mysqli_fetch_assoc($result_query)) {
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";  // Include the category ID as the option value
                        }
                    ?>
                    
                    <!-- <option value="">Category1</option>
                    <option value="">Category2</option>
                    <option value="">Category3</option> -->
                </select>
            </div>


            <!-- Brands -->
            <div class=" form_outline mb-4 w-50 m-auto  ">
                <select class="form-control form_select  mt-2" name="product_brands" id="" >
                    <option>Select a Brands</option>
                    <?php
                        $select_query = "SELECT * FROM brands";  // Removed single quotes around 'categories'
                        $result_query = mysqli_query($con, $select_query);

                        while ($row = mysqli_fetch_assoc($result_query)) {
                            $brand_title = $row['brand_title'];
                            $brand_id = $row['brand_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";  // Include the category ID as the option value
                        }
                    ?>
                    
                </select>
            </div>

            <!-- Image 1 -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="product_keywords" class="form-lebel mt-2">Product Image 1</label>
                <input  type="file"  name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

            <!-- Image 2 -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="product_keywords" class="form-lebel mt-2">Product Image 2</label>
                <input  type="file"  name="product_image2" id="product_image2" class="form-control" required="required">
            </div>

            <!-- Image 3 -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="product_keywords" class="form-lebel mt-2">Product Image 3</label>
                <input  type="file"  name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

            <!-- Price -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <label for="product_price" class="form-lebel mt-2">Product Price</label>
                <input  type="text"  name="product_price" id="product_price" class="form-control" placeholder="Ente Product Price" autocomplete="off" required="required">
            </div>

            <!-- Price -->
            <div class=" form_outline mb-4 w-50 m-auto ">
                <input type="submit" name="insert_product" class="btn btn-info mt-3 mb-5 px-3" value="Insert Products">
            </div>


         </form>



    </div>









    

<!-- bootstrap Js Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>