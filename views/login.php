<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="mail" value="" placeholder="Email">
    <input type="password" name="password" value="" placeholder="Password">
    <button type="submit" name="submit">Submit</button>
</form>


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