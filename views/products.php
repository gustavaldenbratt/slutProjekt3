
<!doctype html>
<!--startsida-->
<html lang="sv">
<head>
    <?php
    include('../templates/head.php'); ?>
</head>
<body>

<?php
include('../templates/nav.php');
?>
<section class="main">

    <?php //db anslutning
    include('../connect.php');




    //db fråga
    $query = "SELECT * FROM products";

    mysqli_query($con,"SET NAMES utf8");

    $result = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($result)){
        ?>   <!--produkt con-->
        <div class="prodCon">
         <div class="img_con">
            <img class="img" src="<?php echo $row['image'];?>"/>
            <?php
            echo $row['name'];
            ?> <br> <?php
            echo $row['price'];  ?>
            <a class="buy" href="p.php?id=<?php echo $row['prodID'];  ?>">KÖP</a></div> </div><?php } ?>




</section>
<?php


?>
</body>
</html>