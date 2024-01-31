<?php

require "../database.php";

$id = $_GET['id'];
// $id= $_POST['id'];
$username   = $_POST['username'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$usertype      = $_POST['usertype'];


$sql = "UPDATE user SET username='$username', email='$email', password='$password', usertype='$usertype' WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
  header("location: users.php");
} 
?>