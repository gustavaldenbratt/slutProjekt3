<!doctype html>
<?php //redigera sin användarprofil
?>
<html>
<head>
    <?php
    include('../templates/head.php')
    ?>
</head>
<body>

<?php
include('../templates/nav.php');
?>
<section class="main" id="editmain">
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
    <div class="edit-div">

        <form class="edit" action="edit_back.php" method ="post">
            <p>Name: <?php echo $row['name'];?></p>
            <input type="text" name="name">
            <input type="submit" value="Uppdatera">
        </form>

        <form class="edit" action="edit_back.php" method ="post">
            <p>Mail: <?php echo $row['mail'];?></p>
            <input type="text" name="mail">
            <input type="submit" value="Uppdatera">
        </form>


        <form class="edit" action="edit_back.php" method ="post">

            Lösenord: <input type="password" name="pass">
            <input type="submit" value="Uppdatera">
        </form>
    </div>


</section>

</body>
</html>