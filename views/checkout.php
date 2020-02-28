<link rel="stylesheet" type="text/css" href="../style.css">
<?php
//checkout sida
session_start();
//db ansluting
include('../connect.php');


//funktion för köp, måste vara inloggad för att handla
if($_SESSION['login'] == "INLOGGAD"){

    $id = $_SESSION['ID'];
    //lägg in ordern i databasen
    $query = "INSERT INTO  orders (customer_id,created,shipped) VALUES ($id,CURRENT_TIMESTAMP,null)";

    mysqli_query($con,$query);

    $query = "SELECT MAX(id) FROM orders";

    $orderid =mysqli_fetch_array(mysqli_query($con,$query))[0];

    for($i = 0 ; $i < sizeof($_SESSION['cart']) ; $i++){
        $pid = $_SESSION['cart'][$i];
        var_dump($i);
        $query = "INSERT INTO order_details (order_id, product_id, quantity) VALUES ($orderid,$pid, )";

        mysqli_query($con,$query);
    }

    unset($_SESSION['cart']);

    ?> <p class="kop">  <?php echo 'tack för ditt köp!';?> <img class="kopbild" src="image/check.png"></p>
    <a class="handla" href="products.php" title="Fortsätt handal">Fortsätt handla</a>

    <?php
}
else{
    echo 'Du måste logga in!';

    var_dump($_SESSION['cart']);
}



?>