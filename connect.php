<?php

$con = mysqli_connect('localhost', 'root', '', 'store');


if(!$con){
    die("Connection error: " . mysqli_connect_error());
}

if (!$con->set_charset("utf8")) {
     $con->error;
} else {
     $con->character_set_name();
}