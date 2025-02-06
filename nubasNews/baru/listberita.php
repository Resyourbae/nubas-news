<?php
include "koneksi.php"; // Menghubungkan dengan file koneksi.php untuk koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Menetapkan karakter encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Untuk responsivitas halaman pada perangkat mobile -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>listberita</title>

    <!-- CSS tambahan untuk memastikan modal tampil di atas navbar -->
    <style>
        .navbar {
            background-color: #343a40 !important; /* Mengatur warna navbar */
        }

        .navbar a {
            color: white !important; /* Mengatur warna teks navbar menjadi putih */
        }

        h2 {
            text-align: center; /* Mengatur teks judul menjadi di tengah */
            color: #333; /* Mengatur warna teks */
            font-weight: bold; /* Mengatur teks menjadi tebal */
            margin-top: 20px; /* Menambahkan margin di atas */
        }

        .container {
            background: white; /* Memberikan warna latar belakang putih */
            padding: 20px; /* Memberikan padding di dalam kontainer */
            border-radius: 10px; /* Membulatkan sudut */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan di sekeliling kontainer */
        }

        table {
            width: 100%; /* Membuat tabel selebar kontainer */
            margin-top: 20px; /* Memberikan jarak antara tabel dan elemen sebelumnya */
        }

        body {
            margin: 0; /* Menghilangkan margin default */
            padding: 0; /* Menghilangkan padding default */
            box-sizing: border-box; /* Mengatur box model agar padding dan margin termasuk dalam ukuran elemen */
            font-family: Verdana, Geneva, Tahoma, sans-serif; /* Menetapkan font untuk halaman */
            background-color: #132030; /* Memberikan latar belakang gelap */
        }

        html {
            scroll-behavior: smooth; /* Membuat scroll lebih halus */
        }

        nav {
            display: flex; /* Menggunakan flexbox untuk mengatur elemen navbar */
            justify-content: space-between; /* Membuat jarak antar elemen navbar */
            align-items: center; /* Memastikan elemen navbar sejajar secara vertikal */
            padding: 1.4rem 7%; /* Memberikan padding pada navbar */
            background-color: #243543; /* Menetapkan warna latar belakang navbar */
            border-bottom: 2px solid #64237d; /* Memberikan garis bawah pada navbar */
            position: fixed; /* Membuat navbar tetap berada di atas saat scrolling */
            border-bottom-left-radius: 10px; /* Membulatkan sudut kiri bawah */
            border-bottom-right-radius: 10px; /* Membulatkan sudut kanan bawah */
            top: 0; /* Menempatkan navbar di atas */
            left: 0; /* Menempatkan navbar di kiri */
            right: 0; /* Menempatkan navbar di kanan */
            z-index: 1; /* Memberikan z-index agar navbar tetap di atas elemen lainnya */
        }

        h3 {
            color: #d2d6da; /* Mengatur warna teks navbar */
            font-weight: bold; /* Menebalkan teks */
            width: 50px; /* Menetapkan lebar ikon */
            height: 50px; /* Menetapkan tinggi ikon */
        }

        span {
            color: #ff0000; /* Memberikan warna merah pada teks di dalam span */
        }

        .box {
            background-color: #132030; /* Memberikan warna latar belakang */
            border-radius: 20px; /* Membulatkan sudut */
            width: 200px; /* Menetapkan lebar kotak */
            height: 70px; /* Menetapkan tinggi kotak */
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px; /* Memberikan bayangan kotak */
        }

        .box p {
            color: #fff; /* Memberikan warna teks putih pada elemen p di dalam kotak */
            text-align: center; /* Menyusun teks di tengah */
            font-weight: bold; /* Menebalkan teks */
        }

        /* CSS tambahan untuk memastikan modal dan overlay muncul di atas navbar */
        .modal-backdrop {
            z-index: 1040 !important; /* Menjamin overlay berada di bawah modal */
        }

        .modal {
            z-index: 1050 !important; /* Menjamin modal berada di atas overlay */
        }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <h3>NUBAS <span>NEWS</span></h3> <!-- Judul pada navbar -->
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content:center;">
                <ul class="navbar-nav">
                    <a href="tamabhberita.php">
                        <li class="nav-item">
                            <div class="nav-link active" aria-current="page" href="#"
                                style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                Tambah Berita
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <a href="dashboard.php">
            <div class="box"><br>
                <p>Dashboard</p>
            </div>
        </a>
    </nav>
    <!-- navbar end -->

    <hr>
    <h2 class="text-center">List berita yang anda sudah update</h2>
    <hr>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Kategori</th>
                <th class="text-center">Isi</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Aksi</th>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($conn, "SELECT * FROM tb_tambahberita"); // Mengambil data berita dari tabel tb_tambahberita
            while ($data = mysqli_fetch_array($tampil)): // Mengambil setiap baris data dari query
            ?>

            <tr>
                <td class="text-center"><?= $no++ ?></td> <!-- Menampilkan nomor urut -->
                <td class="text-center"><?= $data['Judul'] ?></td> <!-- Menampilkan judul berita -->
                <td class="text-center"><?= $data['Kategori'] ?></td> <!-- Menampilkan kategori berita -->
                <td class="text-center"><?= $data['Isi'] ?></td> <!-- Menampilkan isi berita -->
                <td class="text-center">
                    <img src="<?= $data['File'] ?>" alt="Foto" width="100px" height="100px"> <!-- Menampilkan foto berita -->
                </td>
                <td class="text-center">
                    <a href="ubahh.php?id=<?= $data['id']; ?>"><button class="btn btn-primary">Ubah</button></a> <!-- Tombol ubah -->
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $no ?>">Hapus</a> <!-- Tombol hapus yang memunculkan modal -->
                </td>
            </tr>

            <!-- Modal hapus -->
            <div class="modal fade" id="hapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                        </div>
                        <form method="post" action="hapus.php">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>"> <!-- Menyembunyikan input ID untuk menghapus data -->
                            <div class="modal-body">
                                <h5 class="text-center">Apakah anda yakin akan hapus data ini? <br>
                                    <span class="text-danger"><?= $data['Judul'] ?> - <?= $data['Kategori'] ?></span>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" name="bhapus">Hapus</button> <!-- Tombol hapus pada modal -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button> <!-- Tombol batal pada modal -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus -->

            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>
