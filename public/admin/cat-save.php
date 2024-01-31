<?php

require "../database.php";

$category   = $_POST['category'];
$slug      = $_POST['slug'];
$enable   = $_POST['enable'];


$sql ="INSERT INTO categories (category, slug, enable) VALUES ('$category ' , '$slug' , '$enable')";
if ($mysqli->query($sql)) {
    header("location: category.php");
} else {
    header("location: category.php?error");
}

?>