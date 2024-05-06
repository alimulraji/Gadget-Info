<h1 class="text-center text-success">All Categories</h1>
<table class="table table-bordered mt-4  rounded" style="margin-bottom: 110px;padding-bottom: 0px;">
    <thead class="bg-info">
        <tr class="text-light text-center">
            <th>SLNO</th>
            <th>Category Title</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody class=" text-center">
    <?php 
    $select_cat="select * from `categories`";
    $result=mysqli_query($con,$select_cat);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_title=$row['category_title'];
        $number++;

    
    
    ?>


        <tr>
        <td><?php echo $number;?></td>
        <td><?php echo $category_title;?></td>
        <td class='align-middle'><a href='index.php?edit_category=<?php echo $category_id ?>' class=''><i class='fa-solid fa-pen-to-square fa-lg'></i></a></td>
        <td class='align-middle'><a href='index.php?delete_category=<?php echo $category_id ?>' class='text-danger'><i class='fa-solid fa-trash fa-lg'></i></a></td>

    </tr>


<?php 
    
}?>
</tbody>
    
</table>