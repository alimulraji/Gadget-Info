<?php
session_start();

// Unset only the user session variable
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    echo "<script>window.open('user_login.php','_self')</script>";
} else {
    echo "<script>window.open('user_login.php','_self')</script>";
}
?>
