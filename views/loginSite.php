
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../templates/head.php') ?>
</head>
<body>
<?php include('../templates/nav.php') ?>
<h1>Login</h1>

<div id="loginCon">
    <div class="formBG">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address<span style="color: red"> *</span></label>
                <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password<span style="color: red"> *</span></label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="required">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
    </div>
</div>
<?php




include('../connect.php');
/*if (isset($_POST['submit'])) {
    $mail = trim($_POST['mail']);
    $password = trim($_POST['password']);*/

if(isset($_POST['mail']) && isset($_POST['password'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $sql = "select * from person where mail = '" . $mail . "'";
    $rs = mysqli_query($con, $sql);
    $numRows = mysqli_num_rows($rs);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($rs);
        if (password_verify($password, $row['password'])) {
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['login'] = "INLOGGAD";
            echo "Password verified";
            //header('location: start.php');
            echo "<script>window.open('start.php', '_self')</script>";

        } else {

            echo "wrong password";
            $_SESSION['login'] = "UTLOGGAD";
        }
    } else {
        echo "No User found";
    }
}
?>

</body>
</html>
