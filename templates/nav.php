
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../start.php">Webshop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="start.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="edit.php" >Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="Contact/index.php">Kontakta oss</a>
            </li>
        </ul>

        <?php if(isset($_SESSION['login'])){

                ?>

                <!-- Utloggningsformulär -->


                <p style="color:#ffffff; margin-right: 1%;"><?php echo "Välkommen   ".$_SESSION['firstName'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT

                    ?> <form style="margin-right: 1%" class="logout" action="../logout.php">
            <input class="btn btn-danger" type="submit" value="Logga ut">
        </form>
                <a class="empty" style="padding-right: 5px;" title="Töm alla varor ur kundvagnen" href="../views/kundvagn.php?action=clear_cart" method="GET" >töm kundvagn
                </a>
                <a class="kundvagn" title="Visa kundvagnen" href="../views/kundvagn.php"><i  class="fas fa-shopping-basket"></i> (
                    <?php


                    if(isset($_SESSION['cart'])){
                        echo count($_SESSION['cart']);
                    }
                    else{
                        echo "0";
                    }

                    ?>
                    )</a> <?php


        }?>
                </p>




    </div>
</nav>