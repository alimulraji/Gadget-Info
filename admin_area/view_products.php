<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h1 class="text-center text-success">View Products</h1>
    <table class="table table-bordered mt-4 mb-6 ml-2">
        <thead class="bg-info">
<tr class="text-light text-center">
    <th>SL NO</th>
    <th>Product ID</th>
    <th>Product Title</th>
    <th>Product Image</th>
    <th>Product Price</th>
    <th>Total Sold</th>
    <th>Status</th>
    <th>Edit</th>
    <th>Edit Images</th>
    <th>Delete</th>
</tr>
        </thead>

        <tbody class=" text-center">
<?php 
$get_products= "select * from `products`";
$result=mysqli_query($con,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $status=$row['status'];
    $number++;
?>
    <tr >
    <td class='align-middle'><?php echo $number ?></td>
    <td class='align-middle'><?php echo $product_id ?></td>
    <td class='align-middle'><?php echo $product_title ?></td>
    <td class='align-middle p-1'><img src='./product_images/<?php echo $product_image1 ?>'  ></td>
    <td class='align-middle'><?php echo $product_price?>/-</td>
    <td class='align-middle'>
    <?php
    $get_count="select * from `orders_pending` where product_id=$product_id";
    $result_count=mysqli_query($con,$get_count);
    $rows_count=mysqli_num_rows($result_count);
    echo $rows_count;

     ?>
    </td>
    <td class='align-middle'><?php echo $status ?></td>
    <td class='align-middle'><a href='index.php?edit_products=<?php echo $product_id ?>' class=''><i class='fa-solid fa-pen-to-square fa-lg'></i></a></td>
    <td class='align-middle'><a href='index.php?edit_images=<?php echo $product_id ?>' class='text-success'><i class='fa-solid fa-image fa-xl'></i></a></td>
    <td class='align-middle'><a href='index.php?delete_product=<?php echo $product_id ?>' class='text-danger'><i class='fa-solid fa-trash fa-lg'></i></a></td>

</tr>

<?php
}

?>
         
<!-- <tr>
    <td>1</td>
    <td>mang</td>
    <td>imag</td>
    <td>44</td>
    <td>1</td>
    <td>true</td>
    <td><a href="" class=""><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td><a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
</tr> -->
        </tbody>
    </table>
</body>
</html>