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

    $get = mysqli_query($conn, "SELECT * FROM menu WHERE id = $id");

    $menu = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $menu[] = $row;
    }
    
    $menu = $menu[0];

    $get_image = $menu['image'];

    if (isset($_POST['edit'])) {
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

        unlink('upload/'.$get_image);
        if (move_uploaded_file($tmp, "upload/".$new_image)) {
            $result = mysqli_query($conn, "UPDATE menu SET name='$name', section='$section', flavour='$flavour', descript='$desc', price='$price', stock='$stock', image='$new_image' WHERE id = $id");

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