<!DOCTYPE html>
<html lang="en">
<head>
    <?php
include('../templates/head.php');
?>    
<style>
    </style>
</head>

<?php
session_start();
$login = 'Please login';
if (!isset($_SESSION['login'])) {
    echo "<script>alert('$login'); </script>";
    echo "<script>window.open('../index.php','_self'); </script>";
} ?>





<body> <?php
include('../templates/nav.php');
?>    
<section>
</section>
    <?php

include('../templates/footer.php');
?>
</body>
</html>


