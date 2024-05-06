<?php 
if(isset($_GET['edit_images'])){
    $edit_id=$_GET['edit_images'];
    $get_data="select * from `products` where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);    
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    $product_image1=$row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];
    

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
<h1 class="text-center text-success bg-white ">Edit Product Images</h1>
<?php
echo "<h3 class='text-center  mt-4'> $product_title</h3>"
?>
    <form action="" method="post" enctype="multipart/form-data"> 
        
        
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_image1" class="form-lebel mt-2">Product Image1</label>
            <div class="d-flex">
            <input type="file" name="product_images1" id="product_image1" class="form-control"  required="required">
            <img src="./product_images/<?php echo $product_image1 ?>" alt="">
            </div>
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_image2" class="form-lebel mt-2">Product Image2</label>
            <div class="d-flex">
            <input type="file" name="product_images2" id="product_image2" class="form-control"  required="required">
            <img src="./product_images/<?php echo $product_image2 ?>" alt="">
            </div>
        </div>
        <div class=" form_outline  w-50 m-auto ">
            <label for="product_image3" class="form-lebel mt-2">Product Image3</label>
            <div class="d-flex">
            <input type="file" name="product_images3" id="product_image3" class="form-control"  required="required">
            <img src="./product_images/<?php echo $product_image3 ?>" alt="">
            </div>
        </div>
        



        <div class="w-50 m-auto ">
            <input type="submit" name="edit_product" id="edit_product" value="Update Product"
            class="btn btn-info px-3 mb-3 mt-3">
        </div>


        </form>   
</div>

<!-- Editing Product -->

<?php 
if(isset($_POST['edit_product'])){

    



    $product_image1 = $_FILES['product_images1']['name'];
    $product_image2 = $_FILES['product_images2']['name'];
    $product_image3 = $_FILES['product_images3']['name'];

    $temp_image1 = $_FILES['product_images1']['tmp_name'];
    $temp_image2 = $_FILES['product_images2']['tmp_name'];
    $temp_image3 = $_FILES['product_images3']['tmp_name'];

    // checking for fields empty or not
     if( $product_image1=='' or $product_image2=='' or $product_image3=='') {
        echo "<script>alert('Please fill all the fields and continue the process')</script>";
    } else {
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //Query to Updates Products
        $update_product = "UPDATE `products` SET product_image1='$product_image1', product_image2='$product_image2', product_image3='$product_image3', date=NOW() WHERE product_id=$edit_id";
        $result_update=mysqli_query($con,$update_product);
        if($result_update){
        echo "<script>alert('Product Updated Successfully')</script>";
        echo "<script>window.open('./insert_product.php','_self')</script>";
        
        }

    }
   
}

?>




</body>
</html>
