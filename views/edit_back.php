<?php

//db anslutning
include('../connect.php');

if(isset($_SESSION['ID'])){
    if(isset($_POST['firstName'])){

        $id= $_SESSION['ID'];
        $firstName = $_POST['firstName'];
        //db fråga
        $query = "UPDATE person SET firstName = '$firstName' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }
    if(isset($_SESSION['ID'])){
        if(isset($_POST['lastName'])){

            $id= $_SESSION['ID'];
            $lastName = $_POST['lastName'];
            //db fråga
            $query = "UPDATE person SET lastName = '$lastName' WHERE ID = $id";
            mysqli_query($con,$query);
            header('location:edit.php');

        }
    if(isset($_POST['age'])){

        $id= $_SESSION['ID'];
        $age = $_POST['age'];
        //db fråga
        $query = "UPDATE person SET age = '$age' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }

    if(isset($_POST['mail'])){

        $id= $_SESSION['ID'];
        $mail = $_POST['mail'];
        //db fråga
        $query = "UPDATE person SET mail = '$mail' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }

    if(isset($_POST['address'])){

        $id= $_SESSION['ID'];
        $address = $_POST['address'];
        //db fråga
        $query = "UPDATE person SET address = '$address' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }

    if(isset($_POST['city'])){

        $id= $_SESSION['ID'];
        $city = $_POST['city'];
        //db fråga
        $query = "UPDATE person SET city = '$city' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }

    if(isset($_POST['zipCode'])){

        $id= $_SESSION['ID'];
        $zipCode = $_POST['zipCode'];
        //db fråga
        $query = "UPDATE person SET zipCode = '$zipCode' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }
    if(isset($_POST['pass'])){

        $id= $_SESSION['ID'];
        $pass = $_POST['pass'];
        $options = array("cost" => 10);
        $hashPassword = password_hash($pass, PASSWORD_BCRYPT, $options);
        //db fråga
        $query = "UPDATE person SET password = '$hashPassword' WHERE ID = $id";
        mysqli_query($con,$query);
        header('location:edit.php');

    }


}
}
