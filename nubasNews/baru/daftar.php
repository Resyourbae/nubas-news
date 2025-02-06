<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Mendefinisikan karakter encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
    <title>Daftar</title> <!-- Judul halaman -->
    <link rel="stylesheet" href="style.css"> <!-- Menyertakan file CSS eksternal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Menyertakan CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Menyertakan JS Bootstrap -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('night.jpg'); /* Background gambar */
            background-position: center;
            background-size: cover;
        }
        .login-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 440px;
            height: 480px;
            padding: 30px;
        }
        .login-header {
            text-align: center;
            margin: 40px 0;
        }
        .login-header header {
            color: #fff;
            font-size: 40px;
            font-weight: 600;
        }
        .input-field {
            width: 100%;
            height: 60px;
            font-size: 17px;
            padding: 0 25px;
            margin-bottom: 25px;
            border-radius: 35px;
            border: none;
            box-shadow: 0px 5px 10px rgba(91, 29, 236, 0.05);
            outline: none;
            transition: 0.3s;
        }
        ::placeholder {
            font-weight: 500;
            color: #3a3838;
        }
        .input-field:focus {
            transform: scale(1.2); /* Efek saat fokus pada input field */
        }
        .input-submit {
            position: relative;
        }
        .input-btn {
            width: 100%;
            height: 60px;
            background: #5063f2;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
        }
        .input-btn:hover {
            background: #190ee3;
            transform: scale(1.05); /* Efek hover */
        }
        .sign-up-link {
            text-align: center;
            font-size: 15px;
            margin-top: 20px;
        }
        .sign-up-link p {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Daftar</header> <!-- Judul form pendaftaran -->
        </div>
        <form method="POST"> <!-- Form untuk registrasi -->
            <div class="input-box">
                <input type="text" name="username" class="input-field" placeholder="Username" required> <!-- Input untuk username -->
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="PIN (4-6 angka)" required> <!-- Input untuk password -->
            </div>
            <div class="input-box">
                <input type="email" name="email" class="input-field" placeholder="Email" required> <!-- Input untuk email -->
            </div>
            <div class="input-box">
                <select class="form-select" name="role" required> <!-- Dropdown untuk memilih role -->
                    <option selected disabled>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="input-submit">
                <button class="input-btn" type="submit">Daftar</button> <!-- Tombol submit -->
            </div>
            <div class="sign-up-link">
                <p>&copy; copyright by kemal, resya, agitha 2025 </p> <!-- Footer -->
            </div>
        </form>
    </div>
</body>
</html>
