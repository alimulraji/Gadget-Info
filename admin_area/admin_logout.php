<?php
session_start();

// Unset only the admin session variable
if (isset($_SESSION['admin_username'])) {
    unset($_SESSION['admin_username']);
    echo "<script>window.open('admin_login.php','_self')</script>";
} else {
    echo "<script>window.open('admin_login.php','_self')</script>";
}
?>
