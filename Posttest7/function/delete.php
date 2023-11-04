<?php
    session_start();
    require "connection.php";

    if (!isset($_SESSION['login'])) {
        echo "
            <script>
                alert('You do not have permission to access this page!');
            </script>";
        header("Location: login.php");
        exit();
    }
    
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM menu WHERE id = $id");
    
    $menu = [];

    $get_image = $menu['image'];
    unlink('upload/'.$get_image);

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