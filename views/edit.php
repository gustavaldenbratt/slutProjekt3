<!doctype html>
<?php //redigera sin användarprofil
session_start();
$login = 'Please Login';
if (!isset($_SESSION['login'])) {
    echo "<script>alert('$login'); </script>";
    echo "<script>window.open('../index.php','_self'); </script>";
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <?php

    include('../templates/head.php')
    ?>


</head>
<body id="editMain">

<?php
include('../templates/nav.php');
?>

<?php


//db anslutning
include('../connect.php');

$id = $_SESSION['ID'];

//ställer fråga till db
$query = "SELECT * FROM person WHERE ID = $id";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);


?>


<!--formulär för redigering av användarprofil-->
<div id="edit-con">
    <div class="edit-div">

        <form class="edit form-inline " action="edit_back.php" method="post">
            <label for="inputName3" class="col-sm-2 col-form-label col-form-label-lg">Firstname:</label>
            <input type="text" class="form-control" name="firstName" placeholder=" <?php echo $row['firstName']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>

        <form class="edit form-inline " action="edit_back.php" method="post">
            <label for="inputName3" class="col-sm-2 col-form-label col-form-label-lg">Lastname:</label>
            <input type="text" class="form-control" name="lastName" placeholder=" <?php echo $row['lastName']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>

        <form class="edit form-inline " action="edit_back.php" method="post">
            <label for="inputName3" class="col-sm-2 col-form-label col-form-label-lg">age: </label>
            <input type="number" class="form-control" name="age" placeholder="<?php echo $row['age']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>


        <form class="edit form-inline" action="edit_back.php" method="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">Mail: </label>
            <input type="email" class="form-control" name="mail" placeholder="<?php echo $row['mail']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>

        <form class="edit form-inline" action="edit_back.php" method="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">Address: </label>
            <input type="text" class="form-control" name="address" placeholder="<?php echo $row['address']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>

        <form class="edit form-inline" action="edit_back.php" method="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">City:</label>
            <input type="text" class="form-control" name="city" placeholder=" <?php echo $row['city']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>

        <form class="edit form-inline" action="edit_back.php" method="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">Zipcode:</label>
            <input type="number" class="form-control" name="zipCode" placeholder=" <?php echo $row['zipCode']; ?>">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>


        <form class="edit form-inline" action="edit_back.php" method="post">
            <label class="col-sm-2 col-form-label col-form-label-lg">Lösenord</label>
            <input type="password" class="form-control" name="pass">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
        <br>


    </div>
</div>


</body>
</html>