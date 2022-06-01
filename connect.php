<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed");
}
$select_db = mysqli_select_db($connection, 'hotel');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}