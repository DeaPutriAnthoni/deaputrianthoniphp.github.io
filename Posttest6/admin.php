<?php 
    include "function/show.php";
    date_default_timezone_set("Asia/Makassar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ice Cream Dey</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <section class="admin-sidebar">
        <div class="admin-sidebar-icon">

        </div>
    </section>
    <div class="admin-main">
        <nav>

        </nav>
        <section class="admin-main-content">
            <h1>Dashboard</h1>
            <p><?php echo date('l, d M Y | e', time()) , "<br>\n"; ?></p>
            <br>
            <div class="table-action-container">
                <a href="add_data.php"><button>Tambah</button></a>
            </div><br>
            <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Flavour</th>
                    <th>Desc</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; foreach ($menu as $mn) :?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $mn['name']; ?></td>
                    <td><?php echo $mn['section']; ?></td>
                    <td><?php echo $mn['flavour']; ?></td>
                    <td><?php echo $mn['descript']; ?></td>
                    <td><?php echo $mn['price']; ?></td>
                    <td><?php echo $mn['stock']; ?></td>
                    <td><img src="upload/<?php echo $mn['image']; ?>" alt=""></td>
                    <td>
                        <div class="action-button">
                            <a href="edit_data.php?id=<?php echo $mn['id']?>">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                        <path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/>
                                    </svg>
                                </button>
                            </a>
                            <a href="delete_data.php?id=<?php echo $mn['id']?>" onclick="return confirm('Are you sure want to delete <?php echo $mn['name']?>?')">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php $i++; endforeach; ?>
            </table>
            </div>
        </section>
    </div>
</body>

</html>