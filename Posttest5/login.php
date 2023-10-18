<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ice Cream Dey</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="form">
        <div class="form-box">
            <div class="form-title">
                <h1>Login</h1>
                <hr>
            </div>
            <form action="admin.php" method="post" class="form-container">
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