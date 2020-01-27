<section class="main">
    <?php

    //tommer kundvagn
    if(isset($_GET['action']) && $_GET['action'] == "clear_cart"){
        $_SESSION['cart'] = array();
        header("location: index.php");
    }
    //db anslutning
    include('../connect.php');

    if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
        $_SESSION['cart'] = array();
        echo "Kundvagnen är tom";
    }
    else{
    // håller koll på produkter i kundvagnen
    $arr_str = "(";
    for($i = 0 ; $i < count($_SESSION['cart']); $i++){
        if(isset($_SESSION['cart'][$i])){
            $arr_str .= $_SESSION['cart'][$i];
            if($i < count($_SESSION['cart'])-1){
                $arr_str .= ",";
            }
        }
    }
    $arr_str .= ")";
    //db anstutning
    $query = "SELECT * FROM products WHERE ID IN $arr_str ";

    mysqli_query($con,"SET NAMES utf8");

    $result = mysqli_query($con,$query);
    $sum = 0;
    while($row = mysqli_fetch_array($result)){
    ?>               <!--produkt con-->
    <div class="img_con_cart">
        <img class="img_cart" src="<?php echo $row['image'];?>"/>
        <?php
        $counts = array_count_values($_SESSION['cart']);
        $sum += $counts[$row['id']] * $row['price'];
        echo $counts[$row['id']];
        echo $row['name'];

        ?> <br>
        <p class="price"> <?php echo $row['price']; ?> </p>
        <?php 	}	}

        echo $sum; echo ';-'


        ?>

        <!--skickar till checkout.php-->
        <form method="GET" action="checkout.php">
            <button name="complete" type="submit">köp</button>
        </form>
