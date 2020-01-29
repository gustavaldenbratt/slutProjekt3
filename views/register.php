<!doctype html>
<html lang="en">
<head>
    <?php include ('../templates/head.php')?>
</head>
<body>
    <h1>Registration Form</h1>



    <form id="regFrom" action="submit.php" method="post" >
    <div class="form-row" >
        <div class="form-group col-md-5">
            <label for="inputfirstName4">First name</label>
            <input type="text" name="firstName" value="" placeholder="First Name" class="form-control" id="inputfirstName4">
        </div>
        <div class="form-group col-md-5">
            <label for="inputlastName4">Last name</label>
            <input type="text" name="lastName" placeholder="Last name" class="form-control" id="inputlastName4">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputAge">Age</label>
            <input type="number" name="age" class="form-control" id="inputAge" placeholder="18">
        </div>


        <div class="form-group col-md-7">
            <label for="inputEmail">email</label>
            <input type="email" name="mail" value="" class="form-control" id="inputEmail" placeholder="email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address">

        </div>
        <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="City">

        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip Code</label>
            <input type="number" name="zipCode" class="form-control" id="inputZip">
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputPass">Password</label>
            <input type="password" name="password" class="form-control" id="inputPass">
        </div>
        <div class="form-group col-md-5">
            <label for="inputPass2">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="inputPassC">
        </div>

    </div>

    <button type="submit" name="submit" class="btn btn-success">submit</button>
</form>





</body>
</html>


