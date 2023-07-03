//Logout.php
                                         
<?php
session_start();
include('db_connect.php');
unset($_SESSION['user_name']);
unset($_SESSION['user_password']);
header("Location: login.php");
?>