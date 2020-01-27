<!doctype html>
<html lang="en">
<head>
    <?php
    session_start();

    include ('../templates/head.php');


    ?>
</head>
<body>
<?php include ('../templates/nav.php');

include ("../connect.php");

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
    ?> <br> $ <?php
    echo $row['price'];  ?>
    <a class="buy" href="p.php?id=<?php echo $row['ID'];  ?>">KÖP</a></div>  </div> <?php } ?>




</body>
</html>


