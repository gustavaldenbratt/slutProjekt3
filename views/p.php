<?php

session_start();


if(isset($_GET['prodID'])){
    if(isset($_SESSION['cart'])){
        array_push($_SESSION['cart'],$_GET['prodID']);
    }
    else{
        $_SESSION['cart'] = array($_GET['prodID']);

    }

}

header("Location: products.php");

