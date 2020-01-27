<?php

session_start();


if(isset($_GET['ID'])){
    if(isset($_SESSION['cart'])){
        array_push($_SESSION['cart'],$_GET['ID']);
    }
    else{
        $_SESSION['cart'] = array($_GET['ID']);
    }

}

header("Location: /slutProjekt3/views/products.php");

