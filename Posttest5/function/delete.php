<?php
    require "connection.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM menu WHERE id = $id");
    
    $menu = [];

    if ($result) {
        echo "
        <script>
            alert('Success!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed!');
            document.location.href = 'admin.php';
        </script>";
    }
?>