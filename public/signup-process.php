
<?php
include 'database.php';

    if (empty($_POST["username"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["retype_password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password"]) {
    die("Passwords must match");
}

  $username     =       $_POST['username'];
  $email    =       $_POST['email'];
  $password  =      $_POST['password'];
//   $confirm_password = $_POST['retype_password'];
//   $usertype       =      $_POST['usertype'];

  $sql = "INSERT INTO user ( username, email, password )
        VALUES ( ?,?,?)";
        
  $stmt = $mysqli->stmt_init();

// Create a prepared statement
  if ( ! $stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
            
  }
  // Bind the values to the parameters
          $stmt->bind_param("sss", $username, $email, $password); 

// Execute the statement and check if it is successful
        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
            
        } else {
            
            if ($mysqli->errno === 1062) {
                die("email already taken");
            } else {
                die($mysqli->error . " " . $mysqli->errno);
            }
        }
    ?> 