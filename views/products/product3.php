<link rel="stylesheet" type="text/css"  href="../../style.css">
<?php

include ('../../connect.php');
include ('../../templates/head.php');
include ('../../templates/nav.php');
$query = "SELECT * FROM products where prodID = 3";

mysqli_query($con,"SET NAMES utf8");

$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result)){
?>   <!--produkt con-->


<div class="grid">
    <div class="one"> <img class="img" width="100%" height="100%" src="../<?php echo $row['image'];?>"/></a></div>
    <div class="two"><h3>Produkt beskrivning</h3><br>
        <p><?php echo $row['details'] ?>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque facere in nesciunt quos sed sequi sint. Autem deserunt dolores est quae quo sit suscipit. Amet architecto cumque exercitationem incidunt, itaque minima neque nisi quibusdam, recusandae, rem sit vero. Architecto eius hic ipsa laboriosam necessitatibus, sequi vitae! Corporis doloremque eaque, excepturi fugit hic laborum libero maiores nam nulla obcaecati officiis placeat possimus saepe sapiente voluptas. Assumenda esse nihil quas quis. Aliquam atque cupiditate dicta doloremque et hic laboriosam molestiae natus nemo quas, repellat repudiandae, sunt vitae. Asperiores assumenda debitis deleniti deserunt eius enim esse explicabo laborum natus nisi odio omnis quasi quos, sunt suscipit vel voluptatem? Alias assumenda beatae corporis dolorem dolores eligendi error, est facere ipsa laborum libero molestias necessitatibus nemo, odit officia optio praesentium qui quia reiciendis repellendus sed veniam, voluptas voluptates. Aperiam atque, consectetur dicta hic illo laudantium, nesciunt praesentium quaerat quisquam quo quos recusandae tempora unde. Consequuntur. </p>
    </div>
    <div class="three">
        <h4><?php
            echo $row['name'];
            ?></h4> <br><h4>$ <?php
            echo $row['price'];  ?></h4> <br>
        <h4><a class="buy" href="../p.php?prodID=<?php echo $row['prodID'];  ?>">Lägg till i kundvagnen</a></h4><?php }  ?>
    </div>
    <div class="four">
        <div>

        </div>






