<?php

require "../database.php";

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) { 
    
    header("location: users.php");
} 