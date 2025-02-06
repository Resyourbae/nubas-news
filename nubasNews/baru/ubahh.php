<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Menetapkan karakter encoding ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Menetapkan viewport untuk tampilan responsif -->
    <!-- Link ke file CSS Bootstrap dari CDN untuk mendukung komponen UI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link ke file JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Judul halaman -->
    <title>Ubah Berita</title>
</head>
    <style>
        /* CSS untuk body halaman */
        body {
            background-color: #2F4F4F; /* Menetapkan warna latar belakang gelap */
        }

        .main {
            height: 100vh; /* Menetapkan tinggi halaman agar mencakup seluruh tampilan */
        }

        p {
            align-items: center; /* Mengatur teks untuk disejajarkan secara vertikal */
            text-align: center; /* Menyusun teks ke tengah secara horizontal */
        }

        /* CSS untuk kotak login */
        .login-box {
            width: 500px; /* Menetapkan lebar kotak */
            /* height: 400px;  Menentukan tinggi kotak (di-comment karena tidak digunakan) */
            box-sizing: border-box; /* Memastikan padding dan border diperhitungkan dalam ukuran kotak */
            border-radius: 10px; /* Membulatkan sudut kotak */
            background-color: rgb(110, 84, 224); /* Menetapkan warna latar belakang kotak */
            box-shadow: -2px 5px 9px #F0F8FF; /* Memberikan efek bayangan pada kotak */
        }
    </style>

<body>
<!-- Div utama dengan kelas 'main' untuk pengaturan tata letak -->
<div class="main d-flex flex-column justify-content-center align-items-center">
    <!-- Kotak login dengan kelas 'login-box' untuk form pengubahan berita -->
    <div class="login-box p-5 ">
        <!-- Form untuk mengubah berita -->
        <form method="POST" name="ubah" enctype="multipart/form-data">
            <!-- Judul halaman -->
            <h2 class="text-center">Ubah Berita</h2>
            <div class="col-md-6 mx-auto">
                <!-- Input untuk Judul Berita -->
                <div class="mb-2">
                    <label for="Judul">Judul</label>
                    <input type="text" class="form-control" name="Judul" value="<?php echo isset($data['Judul']) ? $data['Judul'] : ''; ?>"> <!-- Menampilkan nilai Judul jika ada -->
                </div>
                <!-- Input untuk Kategori Berita -->
                <div class="mb-2">
                    <label for="Kategori">Kategori</label>
                    <input type="text" class="form-control" name="Kategori" value="<?php echo isset($data['Kategori']) ? $data['Kategori'] : ''; ?>"> <!-- Menampilkan nilai Kategori jika ada -->
                </div>
                <!-- Input untuk Isi Berita -->
                <div class="mb-2">
                    <label for="Isi">Isi</label>
                    <input type="text" class="form-control" name="Isi" value="<?php echo isset($data['Isi']) ? $data['Isi'] : ''; ?>"> <!-- Menampilkan nilai Isi jika ada -->
                </div>
                <!-- Input untuk memilih File Berita -->
                <div class="mb-2">
                    <label for="File">File</label>
                    <input type="file" class="form-control" name="File"> <!-- Pilih file untuk diupload -->
                </div>
                <!-- Input untuk tanggal Terbit -->
                <div class="mb-2">
                    <label for="Terbit">Terbit</label>
                    <input type="text" class="form-control" name="Terbit" value="<?php echo isset($data['Terbit']) ? $data['Terbit'] : ''; ?>"> <!-- Menampilkan nilai Terbit jika ada -->
                </div>
            </div>
            <!-- Tombol untuk menyimpan perubahan dan batal -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" name="btubah" type="submit">Simpan</button> <!-- Tombol simpan perubahan berita -->
                <!-- Tombol untuk membatalkan dan kembali ke halaman daftar berita -->
                <a href="listberita.php">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-danger" type="button">Batal</button> <!-- Tombol batal -->
                    </div>
                </a>
            </div>
        </div>
    </form>
    </div>
</div>
</body>

</html>
