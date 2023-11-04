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

    if (isset($_POST['add'])) {
        $name = htmlspecialchars($_POST['name']);
        $section = $_POST['section'];
        $flavour = $_POST['flavour'];
        $desc = htmlspecialchars($_POST['desc']);
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $image = $_FILES['image']['name'];
        $datetime = date('Y-m-d');
        $x = explode('.', $image);
        $extension = strtolower(end($x));

        $new_image = "$datetime $name.$extension";
        $tmp = $_FILES['image']['tmp_name'];

        if (move_uploaded_file($tmp, "upload/".$new_image)) {
            $result = mysqli_query($conn, "INSERT INTO menu VALUES ('', '$name', '$section', '$flavour', '$desc', '$price', '$stock', '$new_image')");

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
    }
?>