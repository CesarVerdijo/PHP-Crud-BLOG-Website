<?php

require "../database.php";

$username   = $_POST['username'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$usertype      = $_POST['usertype'];

$sql ="INSERT INTO user (username, email,password, usertype) VALUES ('$username ','$email','$password','$usertype ')";
if ($mysqli->query($sql)) {
    header("location: users.php");
} else {
    header("location: users.php?error");
}

?>