<?php session_start(); ?>
<!doctype html>
<!--startsida-->
<html lang="sv">
<head>
    <?php

    $login = 'Please Login';
    if (!isset($_SESSION['login'])) {
        echo "<script>alert('$login'); </script>";
        echo "<script>window.open('../index.php','_self'); </script>";
    }
    include('../templates/head.php'); ?>
</head>
<body id="pMain">

<?php
include('../templates/nav.php');
?>
<section>


    <?php //db anslutning


    include('../connect.php');


    //db fråga
    $query = "SELECT * FROM products";

    mysqli_query($con, "SET NAMES utf8");

    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        ?>   <!--produkt con-->
        <div class="prodCon" style="float: left; margin: 3%;">
        <div class="img_con">
            <a href="products/product<?php echo $row['prodID'] ?>.php">
                <img class="img" src="<?php echo $row['image']; ?>"/></a> <br>
            <?php
            echo $row['name'];
            ?> <br>$ <?php
            echo $row['price']; ?> <br>
            <a class="buy" href="p.php?prodID=<?php echo $row['prodID']; ?>">Lägg till i kundvagnen</a></div>
        </div><?php } ?>


</section>
<footer>
<?php include ('../templates/footer.php')?>
</footer>
</body>
</html>