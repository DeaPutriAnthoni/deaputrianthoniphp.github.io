<?php include "function/edit.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data - Ice Cream Dey</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <section class="input">
        <div class="input-background">
            <img src="gambar/1.png" alt="">
        </div>
        <div class="input-box">
            <div class="input-title">
                <h1>Edit Menu</h1>
                <hr>
            </div>
            <form action="" method="post" class="form-container">

                <label for="name">Name</label>
                <div class="input-container">
                    <input type="text" name="name" placeholder="Menu Name..." value="<?php echo $menu['name'] ?>" required class="input-field">
                </div><br>

                <label for="name">Section</label>
                <div class="input-container">
                    <select name="section" required class="input-field">
                        <option value="" hidden selected>Select Section...</option>
                        <option value="Food">Food</option>
                        <option value="Drink">Drink</option>
                        <option value="Ice Cream">Ice Cream</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </div><br>

                <label for="flavour">Flavour</label>
                <div class="input-container">
                    <input type="text" name="flavour" value="<?php echo $menu['flavour'] ?>" placeholder="Flavour..." required class="input-field">
                </div><br>

                <label for="desc">Description</label>
                <div class="input-container">
                    <textarea name="desc" rows="3" placeholder="Description..." required class="input-field"><?php echo $menu['descript'] ?></textarea>
                </div><br>

                <label for="price">Price</label>
                <div class="input-container">
                    <input type="number" name="price" value="<?php echo $menu['price'] ?>" placeholder="Price..." required class="input-field">
                </div><br>

                <label for="stock">Stock</label>
                <div class="input-container">
                    <input type="number" name="stock" value="<?php echo $menu['stock'] ?>" placeholder="Stock..." required class="input-field">
                </div><br>

                <input type="submit" name="edit" value="Change Menu" class="submit-btn">
            </form>
        </div>
    </section>
</body>
</html>