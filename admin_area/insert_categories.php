<?php

    include('../includes/connect.php');
    if(isset($_POST['insert_cat'])){
        $category_title=$_POST['cat_title'];

        //select data from db
        $select_query="Select * from categories where  category_title='$category_title'";//this line
        $result_select=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0){
            echo "<script>alert('This category is present inside database')</script>";
        }else{
        $insert_query="insert into categories (category_title) values ('$category_title')"; //this line
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Category has been inserted')</script>";
        }
    }}
    

?>

<h1 class="text-center text-success">Insert Categories</h1>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">

  <span class="input-group-text bg-info text-light"  id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>

  <!-- <span class="input-group-text bg-info"  id="basic-addon1"><i class="fa-solid fa-receipt"></i></span> -->

  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories " aria-label="Cattegories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  

<!-- <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert categories"> -->
<div class=" ">
            <input type="submit" name="insert_cat" id="edit_product" value="Insert categories"
            class="btn btn-info px-3 mb-3 mt-3">
        </div>

<!-- <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert categories"> -->


<!-- <button class="bg-info p-2 my-3 border-0">Insert categories</button> -->
</div>
</form>


