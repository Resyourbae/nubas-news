<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Register</header>
            <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
        </div>
        <form method="POST" action="prosesRegis.php">
        <div class="input-box">
            <input type="text" name="username" id="username" class="input-field" placeholder="Username" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" class="input-field" placeholder="email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" class="input-field" placeholder="Password" autocomplete="off" required>
        </div>
            <div class="input-submit">
            <button class="input-btn" type="submit">Daftar</button>
            <button class="input-btn mt-3" type="button">
                <a href="login.php">
                    <div style="text-decoration: none; color: #fff;" >Batal</div></a>
                </button>
        </div>
        <div class="sign-up-link">
            <p>&copy; copyright by kemal,resya,agitha 2025 </p>
        </div>
    </div>
    </form>
</body>
</html>