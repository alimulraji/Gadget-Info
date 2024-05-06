<h1 class="text-success text-center">All Payments</h1>
<table class="table table-bordered mt-4 mb-6 ml-2">
    
            
    
    <?php 

    $get_payments = "SELECT * FROM user_payments"; // Corrected SQL query
    $result = mysqli_query($con, $get_payments);
    $row_count = mysqli_num_rows($result);

    if($row_count == 0){
        echo "<td colspan='7'><h2 class='text-danger text-center mt-5'>No Payments Received Yet</h2></td>";
    } else {
        echo "<thead class='bg-info'>
        <tr class='text-light text-center'>
        <th>SL NO</th>
        <th>Invoice Number</th>
        <th>Amount</th>
        <th>Payment Mode</th>
        <th>Order Date</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody class='text-center'> ";
        $number = 0;
        while($row_data = mysqli_fetch_assoc($result)){
            $order_id = $row_data['order_id'];
            $payment_id = $row_data['payment_id'];
            $amount = $row_data['amount'];
            $invoice_number = $row_data['invoice_number'];
            $payment_mode = $row_data['payment_mode'];
            $date = $row_data['date'];
            $number++;
            ?>
                <tr>
                    <td><?php echo $number;?></td>
                    <td><?php echo $invoice_number;?></td>
                    <td><?php echo $amount;?></td>
                    <td><?php echo $payment_mode;?></td>
                    <td><?php echo $date;?></td>
                    <td class='align-middle'><a href='index.php?delete_payment=<?php echo $payment_id ?>' class='text-danger'><i class='fa-solid fa-trash fa-lg'></i></a></td>

                </tr>
    <?php
            }
        }
    ?>
    </tbody>
</table>
