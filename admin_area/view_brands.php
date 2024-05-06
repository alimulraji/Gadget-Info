

<h1 class="text-center text-success">All Brands</h1>
<table class="table table-bordered mt-4" style="margin-bottom: 110px;padding-bottom: 0px;">
    <thead class="bg-info">
        <tr class="text-light text-center">
            <th>SLNO</th>
            <th>Brand Title</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody class=" text-center">
    <?php 
    $select_brand="select * from `brands`";
    $result=mysqli_query($con,$select_brand);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $brand_id=$row['brand_id'];
        $brand_title=$row['brand_title'];
        $number++;

    
    
    ?>


        <tr>
        <td><?php echo $number;?></td>
        <td><?php echo $brand_title;?></td>
        
        <td class='align-middle'><a href='index.php?edit_brands=<?php echo $brand_id ?>' class=''><i class='fa-solid fa-pen-to-square fa-lg'></i></a></td>
        <td class='align-middle'><a href='index.php?delete_brands=<?php echo $brand_id ?>' class='text-danger'><i class='fa-solid fa-trash fa-lg'></i></a></td>

    </tr>
<div class="mb-7">

</div>

<?php 
    
}?>
</tbody>
    
</table>