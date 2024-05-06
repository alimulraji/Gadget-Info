<h1 class="text-success text-center">All Users</h1>
<table class="table table-bordered mt-4 mb-6 ml-2">
    
            
    
    <?php 

    $get_payments = "SELECT * FROM user_table"; // Corrected SQL query
    $result = mysqli_query($con, $get_payments);
    $row_count = mysqli_num_rows($result);

    if($row_count == 0){
        echo "<td colspan='7'><h2 class='text-danger text-center mt-5'>No Users Yet</h2></td>";
    } else {
        echo "<thead class='bg-info'>
        <tr class='text-light text-center'>
        <th>SL NO</th>
        <th>Username</th>
        <th>User Email</th>
        <th>User Image</th>
        <th>User Address</th>
        <th>User Mobile</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody class='text-center'> ";
        $number = 0;
        while($row_data = mysqli_fetch_assoc($result)){
            $user_id = $row_data['user_id'];
            $username = $row_data['username'];
            $user_email = $row_data['user_email'];
            $user_images = $row_data['user_images'];
            $user_address = $row_data['user_address'];
            $user_mobile = $row_data['user_mobile'];
            $number++;
            ?>
                <tr>
                    <td><?php echo$number ;?></td>
                    <td><?php echo$username;?></td>
                    <td><?php echo$user_email;?></td>
                    <td><img src='../users_area/user_images/<?php echo$user_images ?>' alt='$user_images'/></td>
                    <td><?php echo$user_address;?></td>
                    <td><?php echo$user_mobile;?> </td>
                    <td class='align-middle'><a href='index.php?delete_user=<?php echo $user_id ?>' class='text-danger'><i class='fa-solid fa-trash fa-lg'></i></a></td>

                </tr>

<?php
        }
    }
?>
    </tbody>
</table>
