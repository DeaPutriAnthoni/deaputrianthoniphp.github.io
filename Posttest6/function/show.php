<?php
    require "connection.php";

    $result = mysqli_query($conn, "SELECT * FROM menu");
    $menu = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $menu[] = $row;
    }
?>