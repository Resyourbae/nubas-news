<?php
session_start();

// Jika pengguna sudah login, alihkan ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Login 😊</header>
            <!-- Menampilkan pesan error -->
            <?php if (!empty($error)) { ?>
                <p style="color:red;"><?= $error; ?></p>
            <?php } ?>
        </div>
        
        <!-- Form Login -->
        <form method="POST" action="proses_login.php">
            <div class="input-box">
                <input type="text" name="username" class="input-field" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="input-submit">
                <button class="input-btn" type="submit">Login</button>
                <button class="input-btn mt-3" type="button">
                    <a href="register.php">
                    <div style="text-decoration: none; color: #fff;">Register</div></a>
                </button>
            </div>
        </form>

        <div class="sign-up-link">
            <p>&copy; Copyright by Kemal, Resya, Agitha 2025</p>
        </div>
    </div>
</body>
</html>
