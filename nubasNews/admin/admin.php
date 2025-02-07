<?php
session_start();
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {
//     // $_SESSION['loggedin'] = TRUE;
//     // $_SESSION['username'] = $username;
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nubas News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
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

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        background-color: #243543;
        border-bottom: 2px solid #64237d;
        position: fixed;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
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

    .span {
        color: #4635B1;
        background-color: #F5F5F5;
        border-radius: 50px;
        padding: 10px
    }

    a {
        text-decoration: none;
        color: #000;
    }

    a{
        color: #F5F5F5;
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
        stroke: #F5F5F5;
        font-size: 40px;
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
        margin-top: 80px;
    }

    .carousel-item img {
        width: 200%;
        height: 700px;
        /* Sesuaikan dengan tinggi yang diinginkan */
        object-fit: cover;
        /* Ini akan menjaga aspek rasio gambar */
        border-radius: 10px;
    }

    .container-fluid {
        border-radius: 10px;
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
                        <h2 class="nav-link active" aria-current="page" style="color: #F5F5F5; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;"><i class="fa-solid fa-user"></i>Admin Panel</h2>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-primary" type="button"><a href="../logout.php">Logout</a></button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- indicator start -->
    <!-- <div class="container-fluid mt-5">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active object-fit-cover" data-bs-interval="1000">
                    <img src="./img/BG_BeachFestival_Night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="2000">
                    <img src="./img/BG_BeachFestival_Night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="3000">
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
    </div> -->
    <!-- indicator end -->

    <!-- text bergerak start -->
    <div class="container">
        <div class="wrapper">
            <svg>
                <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                    Selamat Datang Admin!

                </text>
            </svg>
        </div>
    </div>
    <!-- text bergerak end -->

    <!-- tambah berita start -->

    <!-- script icon start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../fontawesome/js/all.js"></script>
    <!-- script icon end -->

</body>

</html>