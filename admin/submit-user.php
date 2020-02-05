<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['age']) && isset($_POST['mail']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['zipCode']) && isset($_POST['password'])){

    // CONNECTA TILL DATABASEN
    include('../connect.php');
    // HÄMTA DATA FROM POST

    $firstName = mysqli_real_escape_string($con,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($con,$_POST['lastName']);
    $age = mysqli_real_escape_string($con,$_POST['age']);
    $mail = mysqli_real_escape_string($con,$_POST['mail']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $zipCode = mysqli_real_escape_string($con,$_POST['zipCode']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $options = array("cost" => 10);
    $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $query = "INSERT INTO person (firstName,lastName,age,mail,address,city,zipCode,password) VALUES ('$firstName','$lastName','$age','$mail','$address','$city' ,'$zipCode','$hashPassword');";
    if(mysqli_query($con,$query)){

        header("Location:view_users.php");
    }else{
        $_SESSION['error_msg'] = "Upptagen mail!";
        header("Location: view_users.php");
    }}
