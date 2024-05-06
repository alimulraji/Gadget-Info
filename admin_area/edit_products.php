<?php 
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    //echo $edit_id;
    $get_data="select * from `products` where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);    
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_price=$row['product_price'];
    $first_release = $row['first_release'];
    $product_color = $row['product_color'];
    $network = $row['network'];
    $sim = $row['sim'];
    $usb_type = $row['usb_type'];
    $product_material = $row['product_material'];
    $product_dimension = $row['product_dimension'];
    $product_weight = $row['product_weight'];
    $display_size = $row['display_size'];
    $display_resolution = $row['display_resolution'];
    $display_technology = $row['display_technology'];
    $display_features = $row['display_features'];
    $back_camera_resolution = $row['back_camera_resolution'];
    $back_camera_features = $row['back_camera_features'];
    $back_video_recording = $row['back_video_recording'];
    $front_camera_resolution = $row['front_camera_resolution'];
    $front_camera_features = $row['front_camera_features'];
    $front_video_recording = $row['front_video_recording'];
    $battery_capacity = $row['battery_capacity'];
    $charging_capacity = $row['charging_capacity'];
    $operating_system = $row['operating_system'];
    $chipset = $row['chipset'];
    $ram = $row['ram'];
    $processor = $row['processor'];
    $gpu = $row['gpu'];
    $rom = $row['rom'];
    $micro_sd_slot = $row['micro_sd_slot'];
    $sound_features = $row['sound_features'];
    $made_in = $row['made_in'];
    
    
// Fetching Category ID Name
$select_category="select * from `categories` where category_id=$category_id";
$result_category=mysqli_query($con,$select_category);  
$row_category=mysqli_fetch_assoc($result_category);
$category_title=$row_category['category_title'];


// Fetching Brands ID Name
$select_brand="select * from `brands` where brand_id=$brand_id";
$result_brand=mysqli_query($con,$select_brand);  
$row_brand=mysqli_fetch_assoc($result_brand);
$brand_title=$row_brand['brand_title'];

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
    <form action="" method="post" enctype="multipart/form-data"> 
        
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
            <input type="text" name="product_keywords" id="product_keyword" value="<?php echo $product_keywords ?>" class="form-control"  required="required">
        </div>
        <div class="form-outline my-1 text-center">
            <label for="product_category" class="form-lebel">Product Category</label>
                <select name="product_category" class="form-select w-50 m-auto">
                    <option value="<?php echo $category_id ?>" selected><?php echo $category_title ?></option>

                   <?php 
                    $select_category_all="select * from `categories` ";
                    $result_category_all=mysqli_query($con,$select_category_all);  
                    while($row_category_all=mysqli_fetch_assoc($result_category_all)){
                        $category_title=$row_category_all['category_title'];
                        $category_id=$row_category_all['category_id'];
                        echo "<option value='$category_id'>$category_title</option>"; 
                    };
                    ?>
                   
                </select>
        </div>
        <div class="form-outline my-1 text-center">
            <label for="product_brands" class="form-lebel ">Product Brands</label>
                <select name="product_brands" class="form-select w-50 m-auto">
                    <option value="<?php echo $brand_id ?>" selected><?php echo $brand_title ?></option>

                    <?php 
                    $select_brand_all="select * from `brands` ";
                    $result_brand_all=mysqli_query($con,$select_brand_all);  
                    while($row_brand_all=mysqli_fetch_assoc($result_brand_all)){
                        $brand_title=$row_brand_all['brand_title'];
                        $brand_id=$row_brand_all['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>"; 
                    };
                    ?>

                </select>
        </div>
        
        <div class=" form_outline  w-50 m-auto mb-4">
            <label for="product_price" class="form-lebel mt-2">Product Price</label>
            <input type="text" name="product_price" id="product_price" value="<?php echo $product_price ?>" class="form-control"  required="required">
        </div>

        <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="first_release" class="form-lebel mt-2">First Release</label>
                    <input type="text" name="first_release" id="first_release" class="form-control" value="<?php echo $first_release ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_color" class="form-lebel mt-2">Colors</label>
                    <input type="text" name="product_color" id="product_color" class="form-control" value="<?php echo $product_color ?>" required="required">
                </div>
                <!-- Connectivity -->
                <h6 class="text-center mt-3">Connectivity</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="network" class="form-lebel ">Network</label>
                    <input type="text" name="network" id="network" class="form-control" value="<?php echo $network ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="sim" class="form-lebel mt-2">SIM</label>
                    <input type="text" name="sim" id="sim" class="form-control" value="<?php echo $sim ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="usb_type" class="form-lebel mt-2">USB Type-</label>
                    <input type="text" name="usb_type" id="usb_type" class="form-control" value="<?php echo $usb_type ?>" required="required">
                </div>
                <!-- Body -->


                <h6 class="text-center mt-3">Body</h6>


                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_material" class="form-lebel">Material</label>
                    <input type="text" name="product_material" id="product_material" class="form-control" value="<?php echo $product_material ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_dimension" class="form-lebel mt-2">Dimensions</label>
                    <input type="text" name="product_dimension" id="product_dimension" class="form-control" value="<?php echo $product_dimension ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_weight" class="form-lebel mt-2">Weight</label>
                    <input type="text" name="product_weight" id="product_weight" class="form-control" value="<?php echo $product_weight ?>" required="required">
                </div>
                <!-- Display -->
                <h6 class="text-center mt-3">Display</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_size" class="form-lebel ">Size</label>
                    <input type="text" name="display_size" id="display_size" class="form-control" value="<?php echo $display_size ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_resolution" class="form-lebel mt-2">Resolution</label>
                    <input type="text" name="display_resolution" id="display_resolution" class="form-control" value="<?php echo $display_resolution ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_technology" class="form-lebel mt-2">Technology</label>
                    <input type="text" name="display_technology" id="display_technology" class="form-control" value="<?php echo $display_technology ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_features" class="form-lebel mt-2">Features</label>
                    <input type="text" name="display_features" id="display_features" class="form-control" value="<?php echo $display_features ?>" required="required">
                </div>
                <!-- Back Camera -->
                <h6 class="text-center mt-3">Back Camera</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="back_camera_resolution" class="form-lebel">Resolution</label>
                    <input type="text" name="back_camera_resolution" id="back_camera_resolution" class="form-control" value="<?php echo $back_camera_resolution ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="back_camera_features" class="form-lebel mt-2">Features</label>
                    <input type="text" name="back_camera_features" id="back_camera_features" class="form-control" value="<?php echo $back_camera_features ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="back_video_recording" class="form-lebel mt-2">Video Recording</label>
                    <input type="text" name="back_video_recording" id="back_video_recording" class="form-control" value="<?php echo $back_video_recording ?>" required="required">
                </div>
                <!-- Front Camera -->
                <h6 class="text-center mt-3">Front Camera</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="front_camera_resolution" class="form-lebel ">Resolution</label>
                    <input type="text" name="front_camera_resolution" id="front_camera_resolution" class="form-control" value="<?php echo $front_camera_resolution ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="front_camera_features" class="form-lebel mt-2">Features</label>
                    <input type="text" name="front_camera_features" id="front_camera_features" class="form-control" value="<?php echo $front_camera_features ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="front_video_recording" class="form-lebel mt-2">Video Recording</label>
                    <input type="text" name="front_video_recording" id="front_video_recording" class="form-control" value="<?php echo $front_video_recording ?>" required="required">
                </div>
                <!-- Battery -->
                <h6 class="text-center mt-3">Battery</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="battery_capacity" class="form-lebel ">Type and Capacity </label>
                    <input type="text" name="battery_capacity" id="battery_capacity" class="form-control" value="<?php echo $battery_capacity ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="charging_capacity" class="form-lebel mt-2">Fast Charging </label>
                    <input type="text" name="charging_capacity" id="charging_capacity" class="form-control" value="<?php echo $charging_capacity ?>" required="required">
                </div>
                <!-- Performance -->
                <h6 class="text-center mt-3">Performance</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="operating_system" class="form-lebel">Operating System</label>
                    <input type="text" name="operating_system" id="operating_system" class="form-control" value="<?php echo $operating_system ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="chipset" class="form-lebel mt-2">Chipset</label>
                    <input type="text" name="chipset" id="chipset" class="form-control" value="<?php echo $chipset ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="ram" class="form-lebel mt-2">RAM</label>
                    <input type="text" name="ram" id="ram" class="form-control" value="<?php echo $ram ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="processor" class="form-lebel mt-2">Processor</label>
                    <input type="text" name="processor" id="processor" class="form-control" value="<?php echo $processor ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="gpu" class="form-lebel mt-2">GPU</label>
                    <input type="text" name="gpu" id="gpu" class="form-control" value="<?php echo $gpu ?>" required="required">
                </div>
                <!-- Storage -->
                <h6 class="text-center mt-3">Storage</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="rom" class="form-lebel ">ROM</label>
                    <input type="text" name="rom" id="rom" class="form-control" value="<?php echo $rom ?>" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="micro_sd_slot" class="form-lebel mt-2">MicroSD Slot</label>
                    <input type="text" name="micro_sd_slot" id="micro_sd_slot" class="form-control" value="<?php echo $micro_sd_slot ?>" required="required">
                </div>
                <!-- Sound -->
                <h6 class="text-center mt-3">Sound</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="sound_features" class="form-lebel ">Features</label>
                    <input type="text" name="sound_features" id="sound_features" class="form-control" value="<?php echo $sound_features ?>" required="required">
                </div>


                <div class=" form_outline  w-50 m-auto ">
                    <label for="made_in" class="form-lebel mt-2 ">Made in</label>
                    <input type="text" name="made_in" id="made_in" class="form-control mb-3" value="<?php echo $made_in ?>" required="required">

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

    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price']; 

    $first_release = $_POST['first_release'];
    $product_color = $_POST['product_color'];
    $network = $_POST['network'];
    $sim = $_POST['sim'];
    $usb_type = $_POST['usb_type'];
    $product_material = $_POST['product_material'];
    $product_dimension = $_POST['product_dimension'];
    $product_weight = $_POST['product_weight'];
    $display_size = $_POST['display_size'];
    $display_resolution = $_POST['display_resolution'];
    $display_technology = $_POST['display_technology'];
    $display_features = $_POST['display_features'];
    $back_camera_resolution = $_POST['back_camera_resolution'];
    $back_camera_features = $_POST['back_camera_features'];
    $back_video_recording = $_POST['back_video_recording'];
    $front_camera_resolution = $_POST['front_camera_resolution'];
    $front_camera_features = $_POST['front_camera_features'];
    $front_video_recording = $_POST['front_video_recording'];
    $battery_capacity = $_POST['battery_capacity'];
    $charging_capacity = $_POST['charging_capacity'];
    $operating_system = $_POST['operating_system'];
    $chipset = $_POST['chipset'];
    $ram = $_POST['ram'];
    $processor = $_POST['processor'];
    $gpu = $_POST['gpu'];
    $rom = $_POST['rom'];
    $micro_sd_slot = $_POST['micro_sd_slot'];
    $sound_features = $_POST['sound_features'];
    $made_in = $_POST['made_in'];




    // checking for fields empty or not
     if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brands='' or 
     $product_price=='' or $first_release==''or $product_color==''or $network==''or $sim==''or $usb_type==''or $product_material==''or $product_dimension==''or $product_weight==''or $display_size==''or $display_resolution==''or 
    $display_technology==''or $display_features==''or $back_camera_resolution==''or $back_camera_features==''or $back_video_recording==''or $front_camera_resolution==''or $front_camera_features==''or $front_video_recording==''or $battery_capacity==''or $charging_capacity==''or 
    $operating_system==''or $chipset==''or $ram==''or $processor==''or $gpu==''or $rom==''or $micro_sd_slot==''or $sound_features==''or $made_in=='') {
        echo "<script>alert('Please fill all the fields and continue the process')</script>";
    } else {
        

        //Query to Updates Products
        $update_product = "UPDATE `products` SET product_title='$product_title', product_description='$product_desc', product_keywords='$product_keywords', category_id='$product_category', brand_id='$product_brands',
          product_price='$product_price', first_release='$first_release', product_color='$product_color', network='$network', sim='$sim', usb_type='$usb_type', product_material='$product_material', product_dimension='$product_dimension', product_weight='$product_weight', display_size='$display_size', display_resolution='$display_resolution', display_technology='$display_technology', display_features='$display_features', back_camera_resolution='$back_camera_resolution', back_camera_features='$back_camera_features', back_video_recording='$back_video_recording', front_camera_resolution='$front_camera_resolution', front_camera_features='$front_camera_features', front_video_recording='$front_video_recording', battery_capacity='$battery_capacity', charging_capacity='$charging_capacity', operating_system='$operating_system', chipset='$chipset', ram='$ram', processor='$processor', gpu='$gpu', rom='$rom', micro_sd_slot='$micro_sd_slot', sound_features='$sound_features', made_in='$made_in', date=NOW() WHERE product_id=$edit_id";
        $result_update=mysqli_query($con,$update_product);
        if($result_update){
        echo "<script>alert('Product Updated Successfully')</script>";
        echo "<script>window.open('./index.php?view_products','_self')</script>";
        
        }

    }
   
}

?>




</body>
</html>
