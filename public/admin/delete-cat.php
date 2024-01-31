<?php

require "../database.php";

$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) { 
    
    header("location: category.php");
} 