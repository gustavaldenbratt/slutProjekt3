<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../templates/head.php') ?>
</head>
<body>

<h1>Login</h1>

    <div id="loginCon">
        <div class="formBG">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
        </div>
</div>


<?php
require_once("../connect.php");
if(isset($_POST['submit'])){
	$email = trim($_POST['mail']);
	$password = trim($_POST['password']);

	$sql = "select * from person where mail = '".$email."'";
	$rs = mysqli_query($con,$sql);
	$numRows = mysqli_num_rows($rs);

	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
			echo "Password verified";
			header('location: start.php');
		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo "No User found";
	}
}
?>


</body>
</html>