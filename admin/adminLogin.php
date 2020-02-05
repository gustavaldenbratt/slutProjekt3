<html>
<!-- Inloggning till adminpanel-->
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Admin Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="adminLogin.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php
//anluting db
include('../connect.php');

if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $username=$_POST['username'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where username='$username' AND password='$admin_pass'";

    $run_query=mysqli_query($con,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('admin_panel.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>