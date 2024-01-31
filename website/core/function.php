<?php

function check_login($mysqli)
{
    
    if(isset($_SESSION['username'])){


        $username = $_SESSION[ 'username'];
        $query = "select * from user where username = '$username' ";
        $result = mysqli_query($mysqli, $query);
    if($result && mysqli_num_rows($result) > 0 )
        {
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
    }
    
    header("Location: login.php");

}

?>