<?php

$host = "localhost";
$dbname = "blog_db";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);
                    
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error); }
?>