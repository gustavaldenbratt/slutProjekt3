<!doctype html>
<?php //redigera sin användarprofil
?>
<html>
<head>
    <?php
    include('../templates/head.php')
    ?>
    <link rel="stylesheet" type="text/css" href="../style.css"/>

</head>
<body>

<?php
include('../templates/nav.php');
?>

    <?php




    //db anslutning
    include('../connect.php');

    $id= $_SESSION['ID'];

    //ställer fråga till db
    $query = "SELECT * FROM person WHERE ID = $id";

    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_array($result);


    ?>




    <!--formulär för redigering av användarprofil-->
    <div id="edit-con">
    <div class="edit-div">

        <form class="edit form-inline " action="edit_back.php" method="post">
            <label for="inputName3" class="col-sm-2 col-form-label col-form-label-lg">Firstname: <?php echo $row['firstName'];?></label>
            <input type="text" class="form-control" name="firstName">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>

        <form class="edit form-inline " action="edit_back.php" method="post">
            <label for="inputName3" class="col-sm-2 col-form-label col-form-label-lg">Lastname: <?php echo $row['lastName'];?></label>
            <input type="text" class="form-control" name="lastName">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>

        <form class="edit form-inline " action="edit_back.php" method="post">
            <label for="inputName3" class="col-sm-2 col-form-label col-form-label-lg">age: <?php echo $row['age'];?></label>
            <input type="number" class="form-control" name="age">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>



        <form class="edit form-inline" action="edit_back.php" method ="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">Mail: <?php echo $row['mail'];?></label>
            <input  type="email" class="form-control" name="mail">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>

        <form class="edit form-inline" action="edit_back.php" method ="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">Address: <?php echo $row['address'];?></label>
            <input  type="text" class="form-control" name="address">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>

        <form class="edit form-inline" action="edit_back.php" method ="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">City: <?php echo $row['city'];?></label>
            <input  type="text" class="form-control" name="city">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>

        <form class="edit form-inline" action="edit_back.php" method ="post">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">Address: <?php echo $row['zipCode'];?></label>
            <input  type="number" class="form-control" name="zipCode">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>


        <form class="edit form-inline" action="edit_back.php" method ="post">
                <label class="col-sm-2 col-form-label col-form-label-lg">Lösenord</label>
             <input type="password" class="form-control" name="pass">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form><br>

        <form class="edit form-inline" action="edit_back.php" method ="post">
            <label class="col-sm-2 col-form-label col-form-label-lg">Bekräfta Lösenord</label>
            <input type="password" class="form-control" name="cpassword">
            <input type="submit" class="btn btn-success" value="Uppdatera">
        </form>
    </div>
    </div>




</body>
</html>