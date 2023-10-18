<?php
    require "connection.php";
    if (isset($_POST['add'])) {
        $name = htmlspecialchars($_POST['name']);
        $section = $_POST['section'];
        $flavour = $_POST['flavour'];
        $desc = htmlspecialchars($_POST['desc']);
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $result = mysqli_query($conn, "INSERT INTO menu VALUES ('', '$name', '$section', '$flavour', '$desc', '$price', '$stock')");

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