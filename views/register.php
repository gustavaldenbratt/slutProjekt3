<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Registration Form</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="firstName" value="" placeholder="First Name">
    <input type="text" name="lastName" value="" placeholder="Last name">
    <input type="number" name="age" value="" placeholder="age">

    <input type="text" name="mail" value="" placeholder="Email">
    <input type="text" name="address" value="" placeholder="address">
    <input type="text" name="city" value="" placeholder="city">
    <input type="text" name="zipCode" value="" placeholder="zip code">
    <input type="password" name="password" value="" placeholder="Password">
    <input type="password" name="password2" value="" placeholder="Password">
    <button type="submit" name="submit">Submit</button>
</form>




<?php
require_once("../connect.php");
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $email 	= $_POST['mail'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipCode'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $options = array("cost"=>4);
    $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);

    if ($password === $password2) {
        $sql = "insert into person (firstName, lastName, age ,mail, address, city, zipCode, password) value('".$firstName."', '".$lastName."', '".$age."', '".$email."' '".$address."', '".$city."', '".$zipCode."','" .$hashPassword."')";
        $result = mysqli_query($con, $sql);

    }
    if($result)
    {
        echo "Registration successfully";
    }
    else{
        echo "Password not match";
    }
}

?>
</body>
</html>


