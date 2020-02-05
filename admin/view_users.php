<html>
<!--visa och hantera användare-->
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>View Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>
<a class="start-link" href="../views/start.php">Startsida</a>
<a class="prod-link" href="view_product.php">Hantera Produkter</a>
<div class="table-scrol">
    <h1 align="center">All the Users</h1>
    <h3>SKAPA NY ANVÄNDARE:</h3>
    <!--skapa användare-->
    <form class="new-usr" action="submit-user.php" method="POST">

        firstNamn: <input type="text" name="firstName"><br>
        lastNamn: <input type="text" name="lastName"><br>
        age: <input type="number" name="age"><br>
        mail: <input type="email" name="mail"><br>
        address: <input type="text" name="address"><br>
        city: <input type="text" name="city"><br>
        zipCode: <input type="number" name="zipCode"><br>
        password: <input type="password" name="password"><br>



        <input type="submit">
    </form>

    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

        <!--visa och hantera användare-->
        <table class="table table-bordered table-hover table-striped" style="">
            <thead>

            <tr>

                <th>Id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>age</th>
                <th>mail</th>
                <th>address</th>
                <th>city</th>
                <th>zipCode</th>
               <!-- <th>password</th>-->
               <th>Delete User</th>
            </tr>
            </thead>

            <?php
            include('../connect.php');
            mysqli_query($con,"SET NAMES utf8-bom");
            $view_users_query="select * from person";//select query for viewing users.

            $run=mysqli_query($con,$view_users_query);//here run the sql query.


            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
            {
                $id=$row[0];
                $firstName=$row[1];
                $lastName=$row[2];
                $age=$row[3];
                $mail=$row[4];
                $address=$row[5];
                $city=$row[6];
                $zipCode=$row[7];
                $password=$row[8];

                $pass=$row[6];



                ?>

                <tr>
                    <!--here showing results in the table -->
                    <td><?php echo $id;  ?></td>
                    <td><?php echo $firstName;  ?></td>
                    <td><?php echo $lastName;  ?></td>
                    <td><?php echo $age;  ?></td>
                    <td><?php echo $mail;  ?></td>

                    <td><?php echo $address;  ?></td>
                    <td><?php echo $city;  ?></td>
                    <td><?php echo $zipCode;  ?></td>
                   <!-- <td><?php echo $password;  ?></td>-->
                    <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
                </tr>

            <?php } ?>

        </table>
    </div>
</div>


</body>

</html>