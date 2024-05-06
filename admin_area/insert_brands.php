<?php

include('../includes/connect.php');

if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];

    // Select data from the database
    $select_query = "SELECT * FROM brands WHERE brand_title='$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number > 0){
        echo "<script>alert('This category is already present in the database')</script>";
    } else {
        $insert_query = "INSERT INTO brands (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con, $insert_query);
        if($result){
            echo "<script>alert('Brand has been inserted successfully')</script>";
        }
    }
}

?>

<h1 class="text-center text-success">Insert Brands</h1>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="brand" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <div class="">
            <input type="submit" name="insert_brand" id="insert_brand" value="Insert Brand" class="btn btn-info px-3 mb-3 mt-3">
        </div>
    </div>
</form>
