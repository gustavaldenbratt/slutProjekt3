<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['name']) && isset($_POST['image']) && isset($_POST['price']) && isset($_POST['details'])){

    // CONNECTA TILL DATABASEN
    include('../connect.php');
    // HÄMTA DATA FROM POST
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $price = mysqli_real_escape_string($con,$_POST['price']) ;
    $image = mysqli_real_escape_string($con,$_POST['image']) ;
    $details = mysqli_real_escape_string($con,$_POST['details']) ;

    $query = "INSERT INTO products (name,price,image,details) VALUES ('$name','$price','$image','$details')";
    // OM FRÅGAN GÅTT BRA
    if(mysqli_query($con,$query)){
        // SKICKAS TILL INDEX
        header("Location: view_product.php");
    }else{ // NÅGOT GICK FEL
        // SKAPA ETT ERRORMEDDELADNE
        $_SESSION['error_msg'] = "Något gick fel!";
        header("Location: view_product.php");
    }}





