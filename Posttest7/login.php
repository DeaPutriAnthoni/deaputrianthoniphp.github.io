<?php
    session_start();
    require "./function/connection.php";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row["password"])) {
                if ($row['role'] == 'admin') {
                    $_SESSION['login'] = true;
                    header("Location: admin.php");
                } else if ($row['role'] == 'user') {
                    header("Location: product.php");
                }
                exit;
            } 
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ice Cream Dey</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section class="form">
        <div class="form-box">
            <div class="form-title">
                <h1>Login</h1>
                <hr>
            </div>
            <?php
                if (isset($error)) {
                    echo "<p style='color: red;'>wrong email or password!</p>";
                }
            ?>
            <form action="" method="post" class="form-container">
                <label for="email">Email</label>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Email Address..." required class="input-field">
                </div><br>
                
                <label for="password">Password</label>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Password..." required class="input-field">
                </div><br>

                <input type="submit" name="login" value="Login" class="submit-btn">
            </form>
            <div class="login-with">
                <hr><br>
                <p>or</p>
                <div class="login-with-btn">
                    <button onclick="alert('TBA!')">
                        <img src="gambar/google.svg" alt="">
                        <p>Login with Google</p>
                    </button>
                    <button onclick="alert('TBA!')">
                        <img src="gambar/facebook.svg" alt="">
                        <p>Login with Facebook</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="form-background">
            <img src="gambar/1.png" alt="">
            <h1>IceCreamDey .</h1>
        </div>
    </section>
</body>
</html>