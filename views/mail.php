<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();

if (isset($_POST['Cname']) && isset($_POST['Cemail']) && isset($_POST['subject']) &&
    isset($_POST['message']))  {

    // CONNECTA TILL DATABASEN
    include('../connect.php');
    // HÄMTA DATA FROM POST
    $Cname = mysqli_real_escape_string($con, $_POST['Cname']);
    $Cemail = mysqli_real_escape_string($con, $_POST['Cemail']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "insert into contact (name, email, subject ,message) value('" . $Cname . "', '" . $Cemail . "', '" . $subject . "','" . $message . "')";
    // OM FRÅGAN GÅTT BRA

    if (mysqli_query($con, $query)) {
        // SKICKAS TILL INDEX
            $_SESSION['msg'] = 'tack för ditt mail';
        header("Location: about.php", "echo tack för ditt mail';");


    } else { // NÅGOT GICK FEL
        // SKAPA ETT ERRORMEDDELADNE
        header(' location: about.php');
        $_SESSION['err'] = 'något gick fel';

    }
}