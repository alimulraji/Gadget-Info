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
    $first_release = $_POST['first_release'];
    $product_color = $_POST['product_color'];
<<<<<<< HEAD
=======

>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd
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
    $product_status = 'true';

    // accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // accessing images tmp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // checking empty condtion

    if ($product_title == '' or $description == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '' or $first_release == '' or $product_color == '') {
        echo "<script> alert('Pleasr fill all the available fields')</script>";
        exit();
    } else {
        // move_uploaded_file($temp_image1,"./product_images/$product_images1");
        // move_uploaded_file($temp_image2,"./product_images/$product_images2");
        // move_uploaded_file($temp_image3,"./product_images/$product_images3");
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");




        // insert query
        $insert_products = "insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,first_release,product_color,network,sim,usb_type,product_material,product_dimension,product_weight,display_size,display_resolution,display_technology,display_features,back_camera_resolution,back_camera_features,back_video_recording,front_camera_resolution,front_camera_features,front_video_recording,battery_capacity,charging_capacity,operating_system,chipset,ram,processor,gpu,rom,micro_sd_slot,sound_features,made_in,date,status) values ('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price','$first_release', '$product_color','$network','$sim','$usb_type','$product_material','$product_dimension','$product_weight','$display_size','$display_resolution','$display_technology','$display_features','$back_camera_resolution','$back_camera_features','$back_video_recording','$front_camera_resolution','$front_camera_features','$front_video_recording','$battery_capacity','$charging_capacity','$operating_system','$chipset','$ram','$processor','$gpu','$rom','$micro_sd_slot','$sound_features','$made_in',NOW(),'$product_status')";

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

    <div class="container-fluid p-0">
        <!-- First Chhild -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <div class="d-flex ">
                    <img src="../images/Logo0.png" alt="" style="width:80px;height:80px;" class="mr-2">

                    <a class="mt-3" href="index.php"><img src="../images/Logo.png" alt="HTML tutorial" style="width:293px;height:62px;"></a>

                    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active ml-2 ">
                                <a class=" btn btn-outline-light " href="index.php">Go To Home <span class="sr-only">(current)</span></a>
                            </li>

                    </div>
                </div>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>




        <div class="container mt-2">
            <h1 class="text-center ">Insert Products</h1>
            <!-- Form -->
            <form action="" method="post" enctype="multipart/form-data">
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_title" class="form-lebel">Product Title</label>
                    <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product Title" autocomplete="off" required="required">
                </div>
                <!-- description -->
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="description" class="form-lebel mt-2">Product Description</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Ente Product Description" autocomplete="off" required="required">
                </div>
                <!-- Product Keywords -->
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_keywords" class="form-lebel mt-2">Product Keywords</label>
                    <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Ente Product Keywords" autocomplete="off" required="required">
                </div>


                <!-- categories -->
                <div class=" form_outline mb-4 w-50 m-auto  ">
                    <select class="form-control form_select  mt-2" name="product_category" id="">
                        <option value="">Select a Category</option>
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
                    <select class="form-control form_select  mt-2" name="product_brands" id="">
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
                    <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
                </div>

                <!-- Image 2 -->
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_keywords" class="form-lebel mt-2">Product Image 2</label>
                    <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
                </div>

                <!-- Image 3 -->
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_keywords" class="form-lebel mt-2">Product Image 3</label>
                    <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
                </div>

                <!-- Price -->
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_price" class="form-lebel mt-2">Product Price</label>
                    <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Ente Product Price" autocomplete="off" required="required">
                </div>


                <!-- ================Information Part ====================== -->

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="first_release" class="form-lebel mt-2">First Release</label>
                    <input type="text" name="first_release" id="first_release" class="form-control" placeholder="Enter product First Release Date" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_color" class="form-lebel mt-2">Colors</label>
                    <input type="text" name="product_color" id="product_color" class="form-control" placeholder="Enter product Colors" autocomplete="off" required="required">
                </div>
                <!-- Connectivity -->
                <h6 class="text-center mt-3">Connectivity</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="network" class="form-lebel ">Network</label>
                    <input type="text" name="network" id="network" class="form-control" placeholder="Enter Network Connectivity" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="sim" class="form-lebel mt-2">SIM</label>
                    <input type="text" name="sim" id="sim" class="form-control" placeholder="Enter SIM Type" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="usb_type" class="form-lebel mt-2">USB Type-</label>
                    <input type="text" name="usb_type" id="usb_type" class="form-control" placeholder="Enter Usb Type" autocomplete="off" required="required">
                </div>
                <!-- Body -->


                <h6 class="text-center mt-3">Body</h6>


                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_material" class="form-lebel">Material</label>
                    <input type="text" name="product_material" id="product_material" class="form-control" placeholder="Enter product Material" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_dimension" class="form-lebel mt-2">Dimensions</label>
                    <input type="text" name="product_dimension" id="product_dimension" class="form-control" placeholder="Enter product Dimensions" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="product_weight" class="form-lebel mt-2">Weight</label>
                    <input type="text" name="product_weight" id="product_weight" class="form-control" placeholder="Enter product Weight" autocomplete="off" required="required">
                </div>
                <!-- Display -->
                <h6 class="text-center mt-3">Display</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_size" class="form-lebel ">Size</label>
                    <input type="text" name="display_size" id="display_size" class="form-control" placeholder="Enter Display Size" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_resolution" class="form-lebel mt-2">Resolution</label>
                    <input type="text" name="display_resolution" id="display_resolution" class="form-control" placeholder="Enter Display Resolution" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_technology" class="form-lebel mt-2">Technology</label>
                    <input type="text" name="display_technology" id="display_technology" class="form-control" placeholder="Enter Display technology" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="display_features" class="form-lebel mt-2">Features</label>
                    <input type="text" name="display_features" id="display_features" class="form-control" placeholder="Enter Display Features" autocomplete="off" required="required">
                </div>
                <!-- Back Camera -->
                <h6 class="text-center mt-3">Back Camera</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="back_camera_resolution" class="form-lebel">Resolution</label>
                    <input type="text" name="back_camera_resolution" id="back_camera_resolution" class="form-control" placeholder="Enter Back Camera Resolution" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="back_camera_features" class="form-lebel mt-2">Features</label>
                    <input type="text" name="back_camera_features" id="back_camera_features" class="form-control" placeholder="Enter Back Camera Features" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="back_video_recording" class="form-lebel mt-2">Video Recording</label>
                    <input type="text" name="back_video_recording" id="back_video_recording" class="form-control" placeholder="Enter Back Camera Video Recording" autocomplete="off" required="required">
                </div>
                <!-- Front Camera -->
                <h6 class="text-center mt-3">Front Camera</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="front_camera_resolution" class="form-lebel ">Resolution</label>
                    <input type="text" name="front_camera_resolution" id="front_camera_resolution" class="form-control" placeholder="Enter Front Camera Resolution" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="front_camera_features" class="form-lebel mt-2">Features</label>
                    <input type="text" name="front_camera_features" id="front_camera_features" class="form-control" placeholder="Enter Front Camera Features" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="front_video_recording" class="form-lebel mt-2">Video Recording</label>
                    <input type="text" name="front_video_recording" id="front_video_recording" class="form-control" placeholder="Enter Front Camera Video Recording" autocomplete="off" required="required">
                </div>
                <!-- Battery -->
                <h6 class="text-center mt-3">Battery</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="battery_capacity" class="form-lebel ">Type and Capacity </label>
                    <input type="text" name="battery_capacity" id="battery_capacity" class="form-control" placeholder="Enter product Battery Capacity" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="charging_capacity" class="form-lebel mt-2">Fast Charging </label>
                    <input type="text" name="charging_capacity" id="charging_capacity" class="form-control" placeholder="Enter Charging Capacity" autocomplete="off" required="required">
                </div>
                <!-- Performance -->
                <h6 class="text-center mt-3">Performance</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="operating_system" class="form-lebel">Operating System</label>
                    <input type="text" name="operating_system" id="operating_system" class="form-control" placeholder="Enter Operating System" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="chipset" class="form-lebel mt-2">Chipset</label>
                    <input type="text" name="chipset" id="chipset" class="form-control" placeholder="Enter Chipset" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="ram" class="form-lebel mt-2">RAM</label>
                    <input type="text" name="ram" id="ram" class="form-control" placeholder="Enter RAM" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="processor" class="form-lebel mt-2">Processor</label>
                    <input type="text" name="processor" id="processor" class="form-control" placeholder="Enter Processor Type" autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="gpu" class="form-lebel mt-2">GPU</label>
                    <input type="text" name="gpu" id="gpu" class="form-control" placeholder="Enter GPU Type" autocomplete="off" required="required">
                </div>
                <!-- Storage -->
                <h6 class="text-center mt-3">Storage</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="rom" class="form-lebel ">ROM</label>
                    <input type="text" name="rom" id="rom" class="form-control" placeholder="Enter ROM " autocomplete="off" required="required">
                </div>
                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="micro_sd_slot" class="form-lebel mt-2">MicroSD Slot</label>
                    <input type="text" name="micro_sd_slot" id="micro_sd_slot" class="form-control" placeholder="Enter MicroSD Slot" autocomplete="off" required="required">
                </div>
                <!-- Sound -->
                <h6 class="text-center mt-3">Sound</h6>

                <div class=" form_outline mb-4 w-50 m-auto ">
                    <label for="sound_features" class="form-lebel ">Features</label>
                    <input type="text" name="sound_features" id="sound_features" class="form-control" placeholder="Enter Sound Features" autocomplete="off" required="required">
                </div>


                <div class=" form_outline  w-50 m-auto ">
                    <label for="made_in" class="form-lebel mt-2 ">Made in</label>
                    <input type="text" name="made_in" id="made_in" class="form-control mb-3" placeholder="Enter Made in" autocomplete="off" required="required">

                </div>





                <!-- Price -->
                <div class=" form_outline  w-50 m-auto ">
                    <input type="submit" name="insert_product" class="btn btn-info  mb-5 px-3" value="Insert Products">
                </div>

            </form>



        </div>











        <!-- bootstrap Js Link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>