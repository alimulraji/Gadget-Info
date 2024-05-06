<?php 
if(isset($_GET['edit_category'])){
    $edit_category = $_GET['edit_category'];
    $get_categories = "SELECT * FROM `categories` WHERE category_id=?";
    $stmt = mysqli_prepare($con, $get_categories);
    mysqli_stmt_bind_param($stmt, "i", $edit_category);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $category_title=$row['category_title'];
}

if(isset($_POST['edit_category'])){
    $cat_title = $_POST['category_title'];

    // Prepared statement to update category
    $update_query = "UPDATE `categories` SET category_title=? WHERE category_id=?";
    $stmt = mysqli_prepare($con, $update_query);
    mysqli_stmt_bind_param($stmt, "si", $cat_title, $edit_category);
    $result_cat = mysqli_stmt_execute($stmt);

    if($result_cat){
        echo "<script>alert('Category has been updated successfully')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }
}
?>

<div class="container mt-3">
    <h1 class="text-center text-success">Edit Category</h1>
    <form class="mt-4" method="post">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="category_title" class="form-label">Category Title</label>
            <input type="text" name="category_title" id="category_title" class="form-control mt-1" required="required" value="<?php echo $category_title; ?>">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_category" id="edit_category" value="Update Category" class="btn btn-info px-3 mb-3 mt-3">
        </div>
    </form>
</div>
