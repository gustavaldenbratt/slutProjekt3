<?php session_start();
$login = 'Please login';
if(!isset($_SESSION['login'])) {
    echo "<script>alert('$login'); </script>";
    echo "<script>window.open('../index.php','_self'); </script>";
}
include ('../templates/head.php');
include ('../templates/nav.php');






