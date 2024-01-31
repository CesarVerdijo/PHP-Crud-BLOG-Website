<?php
// Include the database connection code
include_once('database.php');

// Fetch data from the database
$sql = "SELECT * FROM content_table";
$result = $mysqli->query($sql);

// Check if the query was successful
if (!$result) {
    die("Error: " . $mysqli->error);
}

// Display data
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h2>" . $row['class_title'] . "</h2>";
    echo "<h3>" . $row['sub_title'] . "</h3>";
    echo "<p>" . $row['text_content'] . "</p>";
    // echo "<img src='assets/slider/ism/image/slides'" . $row['image_path'] . "' alt='Image'>";
    echo "</div>";
}

// Close the database connection
$mysqli->close();
?>
