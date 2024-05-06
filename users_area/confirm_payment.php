<!-- connect File -->
<?php
include('../includes/connect.php');
session_start();
<<<<<<< HEAD

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    // Sanitize the input
    $order_id = mysqli_real_escape_string($con, $order_id);
    
    $select_data = "SELECT * FROM `user_orders` WHERE order_id = $order_id";
    $result = mysqli_query($con, $select_data);
    if($result) {
        $row_fetch = mysqli_fetch_assoc($result);
        if($row_fetch) {
            $invoice_number = $row_fetch['invoice_number'];
            $amount_due = $row_fetch['amount_due'];
        } else {
            echo "No order found for the provided order ID.";
            exit; // Stop further execution
        }
    } else {
        echo "Error fetching order details: " . mysqli_error($con);
        exit; // Stop further execution
    }
}

if(isset($_POST['confirm_payment'])){
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    
    // Sanitize inputs
    $invoice_number = mysqli_real_escape_string($con, $invoice_number);
    $amount = mysqli_real_escape_string($con, $amount);
    $payment_mode = mysqli_real_escape_string($con, $payment_mode);

    // Validate inputs
    if(!is_numeric($amount) || $amount <= 0) {
        echo "Invalid payment amount.";
        exit; // Stop further execution
    }

    $insert_query = "INSERT INTO `user_payments` (order_id, invoice_number, amount, payment_mode) VALUES ('$order_id', '$invoice_number', '$amount', '$payment_mode')";
    $result = mysqli_query($con, $insert_query);
    if($result){
        // Update order status to 'Complete'
        $update_orders = "UPDATE `user_orders` SET order_status='Complete' WHERE order_id=$order_id";
        $result_orders = mysqli_query($con, $update_orders);
        if($result_orders) {
            echo "<h3 class='text-center text-light'>Payment successfully completed.</h3>";
            echo "<script>window.open('profile.php?my_orders','_self')</script>";
        } else {
            echo "Error updating order status: " . mysqli_error($con);
        }
    } else {
        echo "Error inserting payment details: " . mysqli_error($con);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
<h1 class="text-center text-success bg-white mt-5">Confirm Payment</h1>
    <div class="container my-5">
       
        <form action="" method="post">
            <div class="form-outline my-4 text-center">
            <h6 for="" class="text-dark">Invoice Number</h6>
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center">
                <h6 for="" class="text-dark">Amount</h6>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option value="" selected disabled>Select Payment Mode</option>
                    <option>Internet Banking</option>
                    <option>Bkash</option>
                    <option>Nagod</option>
                    <option>Bank Payment</option>
                    <option>Cash on Delivery</option>
                    <option>Pay Offline</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center ">
                <input type="submit" class="btn btn-success " value="Confirm" name="confirm_payment">
            </div>
            
            
        </form>
    </div>
</body>
</html>
=======
?>
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd
