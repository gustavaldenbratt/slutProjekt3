<?php
session_start();
//kundvagn
?>
<!doctype html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
include('../templates/head.php');
?>
<?php
include('../templates/nav.php');
?>
<section class="main">
    <?php

    //tommer kundvagn
    if (isset($_GET['action']) && $_GET['action'] == "clear_cart") {
        $_SESSION['cart'] = array();;
        echo "<script>window.open('products.php', '_self')</script>";
    }
    //db anslutning
    include('../connect.php');

    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
        $_SESSION['cart'] = array();
        echo "Kundvagnen är tom";
    }
    else{
    // håller koll på produkter i kundvagnen
    $arr_str = "(";
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        if (isset($_SESSION['cart'][$i])) {
            $arr_str .= $_SESSION['cart'][$i];
            if ($i < count($_SESSION['cart']) - 1) {
                $arr_str .= ",";
            }
        }
    }
    $arr_str .= ")";
    //db anstutning
    $query = "SELECT * FROM products WHERE prodID IN $arr_str ";

    mysqli_query($con, "SET NAMES utf8");

    $result = mysqli_query($con, $query);
    $sum = 0; ?>
    <div style="width: 50%">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Price</th>
                <th> ta bort</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_array($result)) {
                ?>               <!--produkt con-->
                <tr>
                    <th scope="row">1</th>
                    <td style="margin: 0; width: 200px"><img src="<?php echo $row['image']; ?>" height="10%"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php $counts = array_count_values($_SESSION['cart']);
                        $sum += $counts[$row['prodID']] * $row['price'];
                        echo $counts[$row['prodID']]; ?></td>
                    <td> <?php echo $row['price']; ?></td>
                    <td>
                        <form method="post" name="id" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <button name="deleteProd"> delete</button>
                        </form>
                    </td>
                </tr>
            <?php }
            } ?>
            </tbody>
        </table>
    </div>

    <!--skickar till checkout.php-->
    <form method="GET" action="checkout.php">
        <button name="complete" type="submit">köp</button>
    </form>


</section>

</body>
</html>