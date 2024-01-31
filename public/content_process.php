<?php
// Include the database connection code
include_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $class_title = $_POST["class_title"];
    $sub_title = $_POST["sub_title"];
    $text_content = $_POST["text_content"];

    // Handle image upload
    $image_path = ''; // Placeholder for image file path
    if (isset($_FILES['image_update'])) {
        $image_name = $_FILES['image_update']['name'];
        $image_tmp = $_FILES['image_update']['tmp_name'];
        $image_path = 'uploads/' . $image_name; // Change 'uploads/' to your desired upload directory
        move_uploaded_file($image_tmp, $image_path);
    }

    // Content ID for identifying whether to insert or update
    $content_id = $_POST["content_id"];

    // Insert or update data in the database
    if ($content_id == 0) {
        $sql = "INSERT INTO content_table (class_title, sub_title, text_content, image_path) VALUES ('$class_title', '$sub_title', '$text_content', '$image_path')";
    } else {
        $sql = "UPDATE content_table SET class_title='$class_title', sub_title='$sub_title', text_content='$text_content', image_path='$image_path' WHERE id=$content_id";
    }

    if ($mysqli->query($sql) === TRUE) {
        echo "Data inserted/updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>


    <p class="mt-5 mb-3 text-body-secondary text-center">&copy; <?= date("Y")?></p>
    <a href="content.php">Back to home</a>