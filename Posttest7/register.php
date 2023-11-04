<?php
    require "./function/connection.php";

    if (isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $role = $_POST['role'];

        if ($password === $c_password) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

            if (mysqli_fetch_assoc($result)) {
                echo "
                    <script>
                        alert('Email is already in use!');
                        document.location.href = 'register.php';
                    </script>";
            } else {
                $result = mysqli_query($conn, "INSERT INTO user (id, first_name, last_name, email, phone, password, role) VALUES ('', '$fname', '$lname', '$email', '$phone', '$password', '$role')");

                if (mysqli_affected_rows($conn) > 0) {
                    echo "
                        <script>
                            alert('Register successful!');
                            document.location.href = 'login.php';
                        </script>";
                } else {
                    echo "
                        <script>
                            alert('Register failed!');
                            document.location.href = 'register.php';
                        </script>";
                }
            }
        } else {
            echo "
                <script>
                    alert('Password is not same!');
                    document.location.href = 'register.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ice Cream Dey</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section class="form">
        <div class="form-box">
            <div class="form-title">
                <h1>Registration</h1>
                <hr>
            </div>
            <form action="" method="post" class="form-container">
                <label for="nama">Name</label>
                <div class="input-container">
                    <input type="text" name="fname" placeholder="First Name" required class="input-field">
                    <input type="text" name="lname" placeholder="Last name (optional)" class="input-field">
                </div><br>
                
                <label for="email">Email</label>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Email Address..." required class="input-field">
                </div><br>
                
                <label for="tel">Phone Number</label>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Phone Number..." required class="input-field">
                </div><br>
                
                <div class="input-container">
                    <label for="password">Password</label>
                    <label for="c_password">Confirm Password</label>
                </div>

                <div class="input-container">
                    <input type="password" name="password" placeholder="Password..." required class="input-field">
                    <input type="password" name="c_password" placeholder="Confirm Password..." required class="input-field">
                </div><br>

                <div class="policy">
                    <input type="checkbox" name="policy" value="true" required>
                    <label for="policy">I have read and agree to the <a href="">Terms</a> and <a href="">Privacy Policy</a>.</label>
                </div><br>
                
                <input type="text" name="role" value="user" hidden>
                <input type="submit" name="register" value="Register" class="submit-btn">
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