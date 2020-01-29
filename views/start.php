<?php
include ('../templates/head.php');
include ('../templates/nav.php');

  if(isset($_SESSION['login'])){
    // har besökt sidan

    // OM MAN ÄR INLOGGAD
    if($_SESSION['login'] == "INLOGGAD"){
        $show_form = false; // VISA INTE FORMULÄREN

        ?>
        <!--<a class="logout" href="./logout.php" action="./logout.php">Logga ut</a>-->
        <!-- Utloggningsformulär -->
        <form class="logout" action="../logout.php">
            <input type="submit" value="Logga ut">
        </form>

        <?php
        echo "Välkommen   ".$_SESSION['name'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT
    }
}
  var_dump($_SESSION['login']);
        ?>
<form class="logout" action="../logout.php">
    <input type="submit" value="Logga ut">
</form>
