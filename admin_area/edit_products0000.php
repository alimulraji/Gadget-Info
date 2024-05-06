<?php 
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    $get_data="Select * from `Products` where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    $product_description['product_description'];
    $product_keywords['product_keywords'];
    $category_id['category_id'];
    $brand_id['brand_id'];
    $product_image1['product_image1'];
    $product_image2['product_image2'];
    $product_image3['product_image3'];
    $product_price['product_price'];


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
</head>
    
<body class="bg-light mb-6">

<div class="container mt-5 ">
<h1 class="text-center text-success bg-white mt-5">Edit Products</h1>
    <form action="" method="post" enctype="multipart/from-data" > 
        
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_title" class="form-lebel mt-2">Product Title</label>
            <input type="text" name="product_title" id="product_title" value="<?php echo $product_title ?>" class="form-control"  required="required">
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_desc" class="form-lebel mt-2">Product Description</label>
            <input type="text" name="product_desc" id="product_desc" value="<?php echo $product_description ?>" class="form-control"  required="required">
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_keyword" class="form-lebel mt-2">Product Keywords</label>
            <input type="text" name="product_keyword" id="product_keyword" value="<?php echo $product_keywords ?>" class="form-control"  required="required">
        </div>
        <div class="form-outline my-1 text-center">
            <label for="product_category" class="form-lebel">Product Category</label>
                <select name="product_category" class="form-select w-50 m-auto">
                    <!-- <option value="" selected disabled>Select Category</option> -->
                    <option value="<?php echo $category_title?>" ><?php echo $category_title?></option>

                    <?php 
                    $select_category_all="select * from `categories` ";
                    $result_category_all=mysqli_query($con,$select_category_all);  
                    while($row_category_all=mysqli_fetch_assoc($result_category_all)){
                        $category_title=$row_category_all['category_title'];
                        $category_id=$row_category_all['category_id'];
                        echo "<option value='$category_id'>$category_title</option>"; 
                    }
                    ?>
                   
                </select>
        </div>
        <div class="form-outline my-1 text-center">
            <label for="product_brands" class="form-lebel ">Product Brands</label>
                <select name="product_brands" class="form-select w-50 m-auto">
                    <!-- <option value="" selected disabled>Select Brands</option> -->
                    <option value="<?php echo $brand_title?>" ><?php echo $brand_title?></option>

                    <?php 
                    $select_brand_all="select * from `brands` ";
                    $result_brand_all=mysqli_query($con,$select_brand_all);  
                    while($row_brand_all=mysqli_fetch_assoc($result_brand_all)){
                        $brand_title=$row_brand_all['brand_title'];
                        $brand_id=$row_brand_all['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>"; 
                    }
                    ?>

                </select>
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_image1" class="form-lebel mt-2">Product Image1</label>
            <div class="d-flex">
            <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
            <img src="./product_images/<?php echo $product_image1 ?>" alt="">
            </div>
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_image2" class="form-lebel mt-2">Product Image2</label>
            <div class="d-flex">
            <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
            <img src="./product_images/<?php echo $product_image2 ?>" alt="">
            </div>
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_image3" class="form-lebel mt-2">Product Image3</label>
            <div class="d-flex">
            <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">
            <img src="./product_images/<?php echo $product_image3 ?>" alt="">
            </div>
        </div>
        <div class=" form_outline  w-50 m-auto mb-4">
            <label for="product_price" class="form-lebel mt-2">Product Price</label>
            <input type="text" name="product_price" id="product_price" value="<?php echo $product_price ?>" class="form-control"  required="required">
        </div>

        <div class="w-50 m-auto ">
            <input type="submit" name="edit_product" id="edit_product" value="Update Product"
            class="btn btn-info px-3 mb-3 mt-3">
        </div>


        </form>   
</div>




</body>
</html>