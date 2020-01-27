<!doctype html>
<html lang="en">
<head>
    <?php include ('../templates/head.php')?>
</head>
<body>
    <h1>Registration Form</h1>

    <!--<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="firstName" value="" placeholder="First Name">
    <input type="text" name="lastName" value="" placeholder="Last name">
    <input type="number" name="age" value="" placeholder="age">

    <input type="text" name="mail" value="" placeholder="Email">
    <input type="text" name="address" value="" placeholder="address">
    <input type="text" name="city" value="" placeholder="city">
    <input type="number" name="zipCode" value="" placeholder="zip code">
    <input type="password" name="password" value="" placeholder="Password">
    <input type="password" name="password2" value="" placeholder="Password">
    <button type="submit" name="submit">Submit</button>
    </form>-->

    <form id="regFrom" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
    <div class="form-row" >
        <div class="form-group col-md-5">
            <label for="inputfirstName4">First name</label>
            <input type="text" name="firstName" value="" placeholder="First Name" class="form-control" id="inputfirstName4">
        </div>
        <div class="form-group col-md-5">
            <label for="inputlastName4">Last name</label>
            <input type="text" name="lastName" placeholder="Last name" class="form-control" id="inputlastName4">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputAge">Age</label>
            <input type="number" name="age" class="form-control" id="inputAge" placeholder="18">
        </div>


        <div class="form-group col-md-7">
            <label for="inputEmail">email</label>
            <input type="email" name="mail" value="" class="form-control" id="inputEmail" placeholder="email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address">

        </div>
        <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="City">

        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip Code</label>
            <input type="number" name="zipCode" class="form-control" id="inputZip">
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputPass">Password</label>
            <input type="password" name="password" class="form-control" id="inputPass">
        </div>
        <div class="form-group col-md-5">
            <label for="inputPass2">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="inputPassC">
        </div>

    </div>

    <button type="submit" name="submit" class="btn btn-success">submit</button>
</form>




<?php
require_once("../connect.php");
if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $email = $_POST['mail'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipCode'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $slquery = "SELECT 1 FROM person WHERE mail = '$email'";
    $selectresult = mysqli_query($con, $slquery);
    if (mysqli_num_rows($selectresult) > 0) {
        $msg = 'email already exists';
        echo $msg;

    } elseif ($password != $cpassword) {

        $msg = "passwords doesn't match";
        echo $msg;

    } else {

        $options = array("cost" => 10);
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

        $sql = "insert into person (firstName, lastName, age ,mail, address, city, zipCode, password ) value('" . $firstName . "', '" . $lastName . "', '" . $age . "', '" . $email . "', '" . $address . "', '" . $city . "', '" . $zipCode . "','" . $hashPassword . "')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Registration successfully";
            header('location: start.php');

        }
    }
}

?>
</body>
</html>


