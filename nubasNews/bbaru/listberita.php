<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
     exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>List Berita</title>

    <style>
        /* Styling untuk navbar */
        .navbar {
            background-color: #343a40 !important; /* Warna abu-abu gelap */
        }
        .navbar a {
            color: white !important; /* Warna teks navbar putih */
        }

        /* Styling untuk judul halaman */
        h2 {
            text-align: center; /* Teks di tengah */
            color: #333; /* Warna abu-abu tua */
            font-weight: bold; /* Teks tebal */
            margin-top: 20px; /* Jarak dari atas */
        }

        /* Styling untuk container utama */
        .container {
            background: white; /* Warna latar belakang putih */
            padding: 20px; /* Ruang dalam container */
            border-radius: 10px; /* Membuat sudut membulat */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            width: 90%; /* Lebar maksimal 90% */
            max-width: 1200px; /* Maksimum lebar */
            margin: auto; /* Pusatkan container */
        }

        /* Styling untuk tabel */
        table {
            width: 100%; /* Tabel memenuhi lebar container */
            table-layout: fixed; /* Pastikan lebar kolom tetap */
            word-wrap: break-word; /* Pastikan teks panjang tidak melewati batas */
        }

        /* Styling untuk latar belakang halaman */
        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif; /* Font yang mudah dibaca */
            background-color: #132030; /* Warna latar belakang biru tua */
        }

        /* Styling untuk kotak dashboard */
        .box {
            background-color: #132030; /* Warna latar belakang kotak */
            border-radius: 20px; /* Sudut membulat */
            width: 200px; /* Lebar kotak */
            height: 70px; /* Tinggi kotak */
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px; /* Efek bayangan */
        }

        .box p {
            color: #fff; /* Warna teks putih */
            text-align: center; /* teks ketengah */
            font-weight: bold; /* Teks tebal */
        }

        /* Styling agar tombol Ubah & Hapus sejajar */
        .action-buttons {
            display: flex; /* agar tombol sejajar */
            justify-content: center; /* Pusatkan tombol */
            gap: 10px; /* Beri jarak antar tombol */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <h3>NUBAS <span style="color:red;">NEWS</span></h3>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content:center;">
                <ul class="navbar-nav">
                    <a href="tamabhberita.php">
                        <li class="nav-item">
                            <div class="nav-link active" style="color:#929ea3; font-weight:bold;">Tambah Berita</div>
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

    <hr>
    <h2 class="text-center">List Berita yang Anda Sudah Update</h2>
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
            // Mengambil data dari database
            $no = 1;
            $tampil = mysqli_query($conn, "SELECT * FROM tb_tambahberita");
            while ($data = mysqli_fetch_array($tampil)):
            ?>

                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $data['Judul'] ?></td>
                    <td class="text-center"><?= $data['Kategori'] ?></td>
                    <td class="text-center"><?= $data['Isi'] ?></td>
                    <td class="text-center">
                        <img src="<?= $data['File'] ?>" alt="Foto" width="100px" height="100px">
                    </td>
                    <td class="text-center">
                        <div class="action-buttons">
                            <a href="ubahh.php?id=<?= $data['id']; ?>" class="btn btn-primary">Ubah</a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $no ?>">Hapus</a>
                        </div>
                    </td>
                </tr>

                <!-- Modal Hapus -->
                <div class="modal fade" id="hapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi</h5>
                            </div>
                            <form method="post" action="hapus.php">
                                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                <div class="modal-body">
                                    <h5 class="text-center">Apakah Anda yakin ingin menghapus berita ini? <br>
                                        <span class="text-danger"><?= $data['Judul'] ?> - <?= $data['Kategori'] ?></span>
                                    </h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger" name="bhapus">Hapus</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>