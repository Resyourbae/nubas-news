<?php
include 'koneksi.php';

$id = $Judul = $Kategori = $Isi = $Foto = '';

if (isset($_GET['ubah'])) {
    $id = $_GET['ubah'];
    $query = "SELECT * FROM tb_tambahberita WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);

    $Judul = $result['Judul'];
    $Kategori = $result['Kategori'];
    $Isi = $result['Isi'];
    $Foto = $result['File']; 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
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
    background-color: #132030;
}
.login-box {
    display: flex;
    flex-direction: column;
    width: 1000px;
    height: 480px;
    padding: 50px;
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
.login-box .input-field {
    width: 100%;
    height: 100px;
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
    transform: scale(1.2);
}
.forgot {
    display: flex;
    justify-content: space-around;
    margin-bottom: 35px;
}
section {
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #fff;
}
#check {
    margin-right: 10px;
}
a {
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
    color: #4000ff;
}
section a {
    color: #fff;
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
.input-submit label {
    position: absolute;
    top: 50%;
    left: 50%;
    color: #fff;
    transform: translate(-50%, -50%);
    cursor: pointer;
}
.input-btn:hover {
    background: #190ee3;
    transform: scale(1.05);
}
.sign-up-link {
    text-align: center;
    font-size: 15px;
    margin-top: 20px;
}
.sign-up-link a {
    color: #fff;
    font-weight: 600;
}
.sign-up-link p {
    color: #fff;
}


    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Tambah Berita</header>
        </div>
        
        <!-- Form -->
        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
            <div class="input-box">
                <input type="text" name="Judul" class="input-field" placeholder="Judul" value="<?= $Judul ?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="Kategori" class="input-field" placeholder="Kategori" value="<?= $Kategori ?>" required>
            </div>
            <div class="input-isi">
                <textarea name="Isi" class="input-field" placeholder="Isi Berita" required><?= $Isi ?></textarea>
            </div>
            <div class="input-box">
                <input type="file" name="Foto" class="input-field" accept="image/*">
            </div>
            <button type="submit" name="aksi" value="add" class="input-btn">Tambahkan</button>
        </form>
    </div>
</body>
</html>
