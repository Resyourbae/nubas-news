<?php
session_start();

// Mengecek apakah user sudah login
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {
//     // Jika belum login, arahkan ke halaman login
//     exit(); // Pastikan tidak ada kode yang dieksekusi setelah redirect
// }

// // Jika sudah login, tampilkan pesan selamat datang
// echo "Selamat datang, " . htmlspecialchars($_SESSION['username']) . "!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nubas News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #132030;
            padding-top: 70px; /* Berikan margin untuk navbar fixed */
        }

        html {
            scroll-behavior: smooth;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.4rem 7%;
            background-color: #243543;
            border-bottom: 2px solid #64237d;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        h3 {
            color: #d2d6da;
            font-weight: bold;
        }

        span {
            color: #ff0000;
        }

        a {
            text-decoration: none;
            color: #F5F5F5;
        }

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
            }

            100% {
                fill: rgba(204, 209, 207, 1);
                stroke: rgba(204, 209, 207, 0);
            }
        }

        .carousel-inner {
            border-radius: 10px;
            margin-top: 50px;
        }

        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .container-fluid {
            border-radius: 10px;
        }
    </style>

</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <h3>NUBAS <span>NEWS</span></h3>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content:center;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sepak Bola</a></li>
                            <li><a class="dropdown-item" href="#">Esport</a></li>
                            <li><a class="dropdown-item" href="#">Basket</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <!-- Form logout -->
                        <form action="logout.php" method="POST" style="display:inline;">
                            <button class="btn btn-outline-primary" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Carousel start -->
    <div class="container-fluid mt-5">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="./img/BG_BeachFestival_Night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./img/BG_BeachFestival_Night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./img/BG_BigPlaza_Night.jpg" class="d-block" alt="...">
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
    <!-- Carousel end -->

    <!-- Moving text start -->
    <div class="container">
        <div class="wrapper">
            <svg>
                <text x="50%" y="50%" dy=".35em" text-anchor="middle">Berita Terbaru</text>
            </svg>
        </div>
    </div>
    <!-- Moving text end -->

</body>

</html>
