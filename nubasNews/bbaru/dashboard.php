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
    <title>Nubas News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<!-- style start -->
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #132030;
    }

    html {
        scroll-behavior: smooth;
    }

    a{
        text-decoration: none;
        color: #fff;
    }

    .btn{
        margin-right: 10px;
        border-radius: 20px;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;

        background-color: #243543;
        border-bottom: 2px solid #64237d;

        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    h3 {
        color: #d2d6da;
        font-weight: bold;
        width: 50px;
        height: 50px;
    }

    span {
        color: #ff0000;
    }

    @import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap");

    svg {
        font-family: "Russo One", sans-serif;
        width: 100%;
        height: 100%;
    }

    svg text {
        animation: stroke 10s infinite alternate;
        stroke-width: 2;
        stroke: #CCD1CF;
        font-size: 50px;
    }

    @keyframes stroke {
        0% {
            fill: rgba(204, 209, 207, 0);
            stroke: rgba(204, 209, 207, 1);
            stroke-dashoffset: 25%;
            stroke-dasharray: 0 50%;
            stroke-width: 2;
        }

        70% {
            fill: rgba(204, 209, 207, 0);
            stroke: rgba(204, 209, 207, 1);
        }

        80% {
            fill: rgba(204, 209, 207, 0);
            stroke: rgba(204, 209, 207, 1);
            stroke-width: 3;
        }

        100% {
            fill: rgba(204, 209, 207, 1);
            stroke: rgba(204, 209, 207, 0);
            stroke-dashoffset: -25%;
            stroke-dasharray: 50% 0;
            stroke-width: 0;
        }
    }

    /* .wrapper {background-color: #FFFFFF */

    ;

    .carousel-inner {
        border-radius: 10px;
        margin-top: 50px;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        /* Sesuaikan dengan tinggi yang diinginkan */
        object-fit: cover;
        /* Ini akan menjaga aspek rasio gambar */
        border-radius: 10px;
    }

    .container-fluid {
        border-radius: 10px;
    }

    .box {
        background-color: #132030;
        border-radius: 20px;
        width: 200px;
        height: 70px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }

    .box p {
        color: #fff;
        text-align: center;
        font-weight: bold;
    }

    .mainpage {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .content {
        width: 70%;
    }

    .sidebar {
        width: 28%;
        background: #f9f9f9;
        padding: 10px;
    }

    .boxnews {
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 20px;
        padding: 15px;
        border-bottom: 2px solid #ccc;
    }

    .img img {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
    }

    .boxnews h1 {
        font-size: 22px;
    }

    .isi {
        font-size: 16px;
        color: #fff;
    }
</style>
<!-- style end -->

<body>


    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <h3>NUBAS <span>NEWS</span></h3>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content:center;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="tentangkami.php" style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex">
            <button class="btn btn-outline-primary" type="button"><a href="logout.php">Logout</a></button>
        </form>
        <a href="listberita.php">
            <div class="box"><br>
                <p>Dashboard</p>
            </div>
        </a>
        <!-- gambar akun -->
        <img src="data:image/png;base64,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" alt="external-account-essential-ui-v4-creatype-outline-colourcreatype">
    </nav>
    <!-- navbar end -->

    <!-- indicator start -->
    <div class="container-fluid mt-5">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active object-fit-cover" data-bs-interval="1000">
                    <img src="burger.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="2000">
                    <img src="night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="3000">
                    <img src="esport.jpg" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- indicator end -->

    <!-- text bergerak start -->
    <div class="container">
        <div class="wrapper">
            <svg>
                <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                    Berita Terbaru

                </text>
            </svg>
        </div>
    </div>
    <!-- text bergerak end -->


    <div class="mainpage container-fluid d-flex justify-content-around">
        <div class="content">
            <?php
            include 'koneksi.php';

            // Periksa koneksi database
            if (!$connect) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            // Query SQL untuk mengambil semua data berita
            $sql = mysqli_query($connect, "SELECT ID, Judul, Isi, Kategori, File FROM tb_tambahberita WHERE terbit='1' ORDER BY ID DESC");
            if (!$sql) {
                die("Error dalam query: " . mysqli_error($connect));
            }

            // Cek apakah ada data
            if (mysqli_num_rows($sql) == 0) {
                echo "<p> Tidak ada berita yang tersedia.</p>";
            } else {
                echo '<div class="news-container">';
                while ($b = mysqli_fetch_array($sql)) {
                    // Cek apakah ada file gambar
                    $gambarPath = !empty($b['File']) ? "" . $b['File'] : "default.jpg";



                    echo '
                <div class="boxnews">
                    <div class="img">
                        <img src="' . $gambarPath                                  . '" alt="' . ($b['Judul']) . '">
                    </div>
                    <h1><a href="./?open=detail&id=' . $b['ID'] . '">' . ($b['Judul']) . '</a></h1>
                    <p><strong>Kategori:</strong> ' . ($b['Kategori']) . '</p>
                    <p class="isi">' . nl2br((substr($b['Isi'], 0, 150))) . '...</p>
                    <a href="./?open=detail&id=' . $b['ID'] . '">Baca Selengkapnya</a>
                </div>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>