<?php

require "../database.php";

$id = $_GET['id'];
// $id= $_POST['id'];
$category   = $_POST['category'];
$slug      = $_POST['slug'];
$enable   = $_POST['enable'];


$sql = "UPDATE categories SET category='$category', slug='$slug', enable='$enable' WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
        header("location: category.php");
} 
?>