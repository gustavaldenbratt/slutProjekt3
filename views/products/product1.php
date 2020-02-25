<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="../../style.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="../start.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../products.php">products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../edit.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <?php if (isset($_SESSION['login'])) {

            ?>

            <!-- Utloggningsformulär -->


            <p style="color:#ffffff; margin-right: 1%;"><?php echo "Välkommen   " . $_SESSION['firstName'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT

                ?>
            <form style="margin-right: 1%" class="logout" action="../../logout.php">
                <input class="btn btn-danger" type="submit" value="Logga ut">
            </form>
            <a class="empty" style="padding-right: 5px;" title="Töm alla varor ur kundvagnen"
               href="../views/kundvagn.php?action=clear_cart" method="GET">töm kundvagn
            </a>
            <a class="kundvagn" title="Visa kundvagnen" href="../views/kundvagn.php"><i
                        class="fas fa-shopping-basket"></i> (
                <?php


                if (isset($_SESSION['cart'])) {
                    echo count($_SESSION['cart']);
                } else {
                    echo "0";
                }

                ?>
                )</a> <?php


        } ?>
        </p>


    </div>
</nav>
<?php

include('../../connect.php');
include('../../templates/head.php');


$query = "SELECT * FROM products where prodID = 1";

mysqli_query($con, "SET NAMES utf8");

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)){
?>   <!--produkt con-->


<div class="grid">
    <div class="one"><img class="img" width="75%" height="100%" style=" margin: auto; display: block"
                          src="../<?php echo $row['image']; ?>"/></a></div>
    <div class="two"><h3>Produkt beskrivning</h3><br>
        <p><?php echo $row['details'] ?>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto commodi consequuntur deleniti
            ducimus enim ex excepturi fugit harum illum impedit ipsum iste magni maiores minima nesciunt nihil officiis
            quia, quod recusandae rem repellat repellendus saepe unde vitae voluptas voluptatem! Accusantium autem ex,
            fuga ipsa labore, laborum magnam nam necessitatibus quo, quod sapiente totam voluptate. Animi aut commodi
            culpa distinctio, dolor, eius eligendi esse et id impedit in maxime nam neque omnis quaerat repudiandae
            sint?
    </div>
    <div class="three">
        <h4><?php
            echo $row['name'];
            ?></h4> <br><h4>$ <?php
            echo $row['price']; ?><a class="buy" href="../p.php?prodID=<?php echo $row['prodID']; ?>">Lägg till i
                kundvagnen</a>
        </h4><?php } ?>
    </div>
    <div class="four">
        <div>

        </div>






