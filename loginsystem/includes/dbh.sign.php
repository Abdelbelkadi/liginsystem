<?php
include_once 'dbh.inc.php';


$first = $_POST['username1'];
$email = $_POST['email1'];
$password  = $_POST['password1'];




$sql = "INSERT INTO users (username,email,password) 
    VALUES ('" . $first . "', '" . $email . "', '" . $password . "');";
mysqli_query($conn, $sql);


header('location:../index.php?signup=success');
