<?php
session_start();
include "koneksi.php"; // Menghubungkan dengan database

// Inisialisasi variabel untuk menampung data dari form
$Judul = $Kategori = $Isi = $Foto = "";
$Terbit = 0; // Default nilai Terbit adalah 0 (Tidak Terbit)

// Jika tombol simpan diklik
if (isset($_POST['btnsimpan'])) {
    // Mengambil nilai yang dikirimkan dari form dan melakukan sanitasi untuk mencegah SQL Injection
    $Judul = mysqli_real_escape_string($conn, $_POST['Judul']);
    $Kategori = mysqli_real_escape_string($conn, $_POST['Kategori']);
    $Isi = mysqli_real_escape_string($conn, $_POST['Isi']);
    $Terbit = $_POST['Terbit'];

    // **Proses Upload Gambar**
    $Foto = ""; // Default foto kosong
    if (!empty($_FILES['Foto']['name'])) { // Mengecek apakah ada gambar yang diupload
        $uploadDir = "uploads/";  // Menentukan folder untuk menyimpan gambar
        $Foto = $uploadDir . basename($_FILES['Foto']['name']); // Menyusun path lengkap gambar

        // Pindahkan gambar yang diupload ke folder tujuan
        if (!move_uploaded_file($_FILES['Foto']['tmp_name'], $Foto)) {
            die(" Gagal mengunggah gambar."); // Jika upload gagal, tampilkan pesan error
        }
    }

    // Query untuk menyimpan data berita ke database
    $query = "INSERT INTO tb_tambahberita (Judul, Kategori, Isi, File, Terbit) 
              VALUES ('$Judul', '$Kategori', '$Isi', '$Foto', '$Terbit')";  // Perintah SQL untuk menyimpan data

    // Mengeksekusi query dan menampilkan pesan berdasarkan keberhasilan atau kegagalan
    if (mysqli_query($conn, $query)) {
        echo "<script>alert(' Berhasil Simpan Berita'); window.location='listberita.php';</script>";  // Jika berhasil, tampilkan alert dan arahkan ke halaman listberita.php
    } else {
        echo "<script>alert('Gagal Simpan Berita');</script>";  // Jika gagal, tampilkan alert error
        echo "Error: " . mysqli_error($conn);  // Menampilkan pesan error dari MySQL
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link untuk Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tambah Berita</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #132030;  /* Background gelap */
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;  /* Lebar kontainer */
        }
        .container h2 {
            text-align: center;  /* Judul form ditengah */
        }
        .input-field {
            width: 100%;  /* Lebar input 100% */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .input-btn:hover {
            background: #0056b3;  /* Efek hover pada tombol */
        }
        .beri{
            color:rgb(0, 89, 206);  /* Warna untuk teks pemberitahuan */
        }
        .ukuran{
            color: rgb(0, 89, 206);  /* Warna untuk teks pemberitahuan ukuran gambar */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Berita</h2>  <!-- Judul halaman -->
    <!-- Form untuk memasukkan data berita -->
    <form action="" method="POST" enctype="multipart/form-data">  <!-- enctype digunakan untuk upload file -->
        
        <label>Judul</label>
        <input type="text" name="Judul" class="input-field" value="<?= ($Judul) ?>" required>  <!-- Input untuk Judul berita -->

        <label>Kategori</label>
        <!-- Dropdown untuk memilih kategori berita -->
        <select name="Kategori" class="input-field" required>
            <option value="Sepak bola" <?= $Kategori == 'Sepak bola' ? 'selected' : '' ?>>Sepak Bola</option>
            <option value="Esport" <?= $Kategori == 'Esport' ? 'selected' : '' ?>>Esport</option>
            <option value="Basket" <?= $Kategori == 'Basket' ? 'selected' : '' ?>>Basket</option>
        </select>

        <label>Isi Berita</label>
        <textarea name="Isi" class="input-field" required><?= ($Isi) ?></textarea>  <!-- Input untuk isi berita -->

        <label>Foto</label>
        <?php if (!empty($Foto)) : ?>  <!-- Jika ada gambar yang sudah diupload, tampilkan preview gambar -->
            <img src="<?= ($Foto) ?>" class="preview-img" alt="Gambar Berita">
        <?php endif; ?>
        <input type="file" name="Foto" class="input-field" accept="image/*">  <!-- Input untuk upload foto -->

        <!-- Pemberitahuan ukuran gambar yang disarankan -->
        <div class="ukuran">
            <p>pilih ukuran gambar 1600×1124 agar tidak terpotong</p>
        </div>

        <label>Terbitkan</label>
        <!-- Dropdown untuk memilih apakah berita diterbitkan atau tidak -->
        <select name="Terbit" class="input-field">
            <option value="1" <?= $Terbit == 1 ? 'selected' : '' ?>>Yes</option>
            <option value="0" <?= $Terbit == 0 ? 'selected' : '' ?>>No</option>
        </select>

        <!-- Pemberitahuan tentang pengaturan penerbitan -->
        <div class="beri">
            <p>pilih 1 untuk menapilkan</p>
            <p>pilih 2 untuk menyimpan</p>
        </div>

        <!-- Tombol untuk submit form -->
        <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" name="btnsimpan" type="submit">Simpan</button>  <!-- Tombol untuk simpan berita -->
                <a href="listberita.php">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-danger" type="button">Batal</button>  <!-- Tombol untuk membatalkan dan kembali ke daftar berita -->
                    </div>
                </a>
        </div>
    </form>
</div>

</body>
</html>
