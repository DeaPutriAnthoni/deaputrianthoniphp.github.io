<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "posttest4";

    $conn = mysqli_connect($server, $user, $password, $db_name);
    
    if (!$conn) {
        die("Cannot connect to database: " . mysqli_connect_error());
    }
?>