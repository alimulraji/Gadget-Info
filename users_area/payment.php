<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <!-- bootstrap CSS Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- CSS File -->
  <link rel="stylesheet" href="style.css">
</head>
<style>
    .payment_img{
        width: 110%;
        height: 100%;
       
        display: block;
    }
</style>
<body class="container">
    <!-- PHP code to access user id -->
    <?php 
    $user_ip=getIPAddress();
    $get_user="select * from `user_table` where user_ip='$user_ip'";
    $result=mysqli_query($con,$get_user);
    $run_query=mysqli_fetch_array($result);
    $user_id=$run_query['user_id'];

    ?>
<div class="container col-md-12 ">
    <h2 class="text-center text-info">Payment option</h2>
    <div class="ml-5 row"><div class="row align-items-center my-5">
        <div class="col-md-6 ">
            <a href="https://www.bkash.com/" target="_blank"><img src="../images/bkash.jpg" alt="" class="payment_img"></a>
        </div>
        <div class="col-md-6">
            <a href="order.php?user_id=<?php echo $user_id ?>" ><h2 class="text-center">Pay Offline</h2></a>
        </div>
    </div>
   
</body>
</html>