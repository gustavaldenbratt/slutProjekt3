
<?php
include('../connect.php');
$delete_id = $_GET['del'];
$delete_query = "delete  from products WHERE prodID='$delete_id'";//delete query
$run = mysqli_query($con,$delete_query);
if ($run) {
//javascript function to open in the same window
echo "<script>window.open('view_product.php?deleted=product has been deleted','_self')</script>";
}
