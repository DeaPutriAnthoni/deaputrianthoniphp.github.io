<?php
    require "connection.php";

    $id = $_GET['id'];

    $get = mysqli_query($conn, "SELECT * FROM menu WHERE id = $id");

    $menu = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $menu[] = $row;
    }
    
    $menu = $menu[0];

    if (isset($_POST['edit'])) {
        $name = htmlspecialchars($_POST['name']);
        $section = $_POST['section'];
        $flavour = $_POST['flavour'];
        $desc = htmlspecialchars($_POST['desc']);
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $result = mysqli_query($conn, "UPDATE menu SET name='$name', section='$section', flavour='$flavour', descript='$desc', price='$price', stock='$stock' WHERE id = $id");

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
    }
?>