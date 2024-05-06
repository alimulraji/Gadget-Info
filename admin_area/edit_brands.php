<?php 
if(isset($_GET['edit_brands'])){
    $edit_brand = $_GET['edit_brands'];
    $get_brands = "SELECT * FROM `brands` WHERE brand_id=?";
    $stmt = mysqli_prepare($con, $get_brands);
    mysqli_stmt_bind_param($stmt, "i", $edit_brand);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $brand_title = $row['brand_title'];
}

if(isset($_POST['edit_brand'])){
    $brand_title = $_POST['brand_title'];

    // Prepared statement to update brand
    $update_query = "UPDATE `brands` SET brand_title=? WHERE brand_id=?";
    $stmt = mysqli_prepare($con, $update_query);
    mysqli_stmt_bind_param($stmt, "si", $brand_title, $edit_brand);
    $result_brand = mysqli_stmt_execute($stmt);

    if($result_brand){
        echo "<script>alert('Brand has been updated successfully')</script>";
        echo "<script>window.open('./index.php?view_brands','_self')</script>";
    }
}
?>

<div class="container mt-3">
    <h1 class="text-center text-success">Edit Brands</h1>
    <form class="mt-4" method="post">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_title" class="form-label">Brand Title</label>
            <input type="text" name="brand_title" id="brand_title" class="form-control mt-1" required="required" value="<?php echo $brand_title; ?>">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_brand" id="edit_brand" value="Update Brand" class="btn btn-info px-3 mb-3 mt-3">
        </div>
    </form>
</div>
