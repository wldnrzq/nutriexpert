<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidup Sehat - Expert System</title>
    <!-- <link rel="stylesheet" href=""> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <style>
        .navbar {
            /* background-color: #d1e3ff; */
        }

        .background-welcome {
            background-color: #d1e3ff;
            height: 40rem;
            /* background-image: url("assets/image/pskiater.jpg"); */
            /* background-color: white; */
            /* height: 500px; */
            /* background-position: center; */
            /* background-repeat: no-repeat; */
            /* background-size: cover; */
            /* position: relative; */
            padding-top: 50px;
        }

        #welcome p {
            font-weight: 3px;
        }

        .title-welcome {
            color: #0355cc;
        }

        .hero-image {
            width: 40%;
            margin-left: 7rem;
        }

        .btn {
            color: white;
            background-color: #0355cc;
            box-shadow: 2px 2px 3px black;
        }

        .tentang-kami {
            /* margin-top: 8rem; */
            background-color: #007BFF;
            height: 25rem;
            /* Warna biru */
            color: white;
            /* Teks putih */
            padding: 50px 20px;
            /* Jarak atas bawah */
            width: 100%;
            /* Memenuhi lebar viewport */
            /* margin-left: 0; */
            /* Hilangkan margin kiri */
            /* margin-right: 20; */
            /* Hilangkan margin kanan */
            /* position: relative; */
            /* Untuk memastikan elemen mengikuti lebar layar */
        }

        .tentang-kami h2 {
            /* background-color:; */
            font-size: 2.5rem;
            /* Ukuran heading */
            margin-bottom: 20px;
            /* Jarak bawah */
        }

        .tentang-kami p {
            margin-top: 80px;
            font-size: 1.2rem;
            /* Ukuran teks paragraf */
            line-height: 1.6;
            /* Jarak antar baris */
        }


        .my-team {
            /* margin: auto; */
            /* margin: 0; */
            /* padding: 0; */
            /* margin-right: 0; */
            background-color: #007bff;
            width: 100%;
            /* transform: scale(1.05); */
        }

        .profil {
            width: 150px;
            height: 150px;
        }

        .footer {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand fw-medium text-white" href="#">NutriExpert</a>
            <!-- <a class="navbar-brand w-25" href=""><img src="assets/image/Screenshot_2025-01-31_220638-removebg-preview.png" alt=""></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-light ms-auto mb-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#team">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="welcome" class="welcome-fluid background-welcome">
        <!-- <div class="container-fluid py-5 text-center">
            <p class="py-3"></p>
            <h1 class="display-3 fw-bold">Selamat Datang</h1>
            <p>di Website Expert Sistem <br> Sistem Pakar Diagnosa Skizofrenia dengan Metode certainty factor</p>
            <a href="main.php" class="btn btn-primary" type="button">Konsultasi Sekarang</a>
        </div> -->
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-md-6 text-center text-md-start">
                    <h1 class="hero-title display-4 fw-bold mt-2 title-welcome">Selamat Datang</h1>
                    <p class="display-5 fw-bold mt-3 py-2 title-welcome">Di NutriExpert - Expert System</p>
                    <p class="hero-subtitle fw-medium mt-3 py-3 title-welcome">
                        NutriExpert adalah website yang dirancang untuk membantu mendiagnosa tipe skizofrenia dengan menggunakan metode Certainty Factor. Dengan sistem pakar ini, pengguna dapat mendapatkan informasi yang akurat dan efisien mengenai kondisi mereka berdasarkan gejala yang dialami.
                    </p>
                    <a href="main.php" class="btn btn-lg">Konsultasi Sekarang</a>
                </div>
                <!-- Image Section -->
                <div class="col-md-6 text-center hero-image">
                    <img src="assets/image/logodokter-removebg-preview.webp" alt="Dokter Ilustrasi" class="img-fluid">
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </section>
    <section>
        <!-- <div class="container mt-5 my-5"> -->
        <!-- <div class="row justify-content-center mt-5"> -->
        <div class="col">
            <section class="tentang-kami text-center">
                <h2>Tentang Kami</h2>
                <p class="text-center ps-2 pe-2">
                    Website ini dirancang sebagai alat bantu berbasis sistem pakar untuk mendiagnosa tipe skizofrenia dengan menggunakan metode Certainty Factor. Kami bertujuan untuk menyediakan solusi yang akurat dan efisien dalam menghitung rasio persentase
                    tingkat keyakinan hasil diagnosa berdasarkan gejala yang dialami pengguna. Sistem ini dikembangkan sebagai wujud kontribusi dalam membantu para profesional kesehatan mental dan masyarakat umum untuk memahami lebih baik kondisi skizofrenia
                    melalui pendekatan berbasis data. Dengan fokus pada keakuratan dan kemudahan penggunaan, kami berharap website ini dapat menjadi referensi awal yang bermanfaat sebelum mendapatkan konsultasi lebih lanjut dari ahli.
                </p>
            </section>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </section>
    <!-- <div class="container">
        <div class="tentangkami text-center mt-5">
            <h3 class="fw-bold">Tentang Kami</h4>
                <p class="pt-3"></p>
                <p class="tentangkami-desc">Website ini dibuat untuk project UAS oleh TIM dari Kelompok Kami yang bertujuan untuk menghitung rasio dengan rate persentase diagnosa Penyakit Tipe Skizofrenia dengan Sistem Pakar dan menggunakan Metode Certainty Factor
                </p>
        </div>
    </div> -->
    <section id="team">
        <!-- <div class="d-flex row text-center">
            <h2 class="mt-5 fw-bold">My Team</h2>
            <div class="d-flex col-6 col-md-4 col-lg-3 mb-4">
                <div class="mt-5">
                    <img class="profil" src="assets/image/wilis.jpg" alt="">
                    <h3>Wildan Habibi</h3>

                    <p>Mahasiswa</p>
                </div>
                <div class="mt-5">
                    <img class="profil" src="assets/image/wilis.jpg" alt="">
                    <h3>Wildan Habibi</h3>

                    <p>Mahasiswa</p>
                </div>
            </div>

        </div> -->
        <div class="container-fluid my-team text-center py-5">
            <h1 class="text-white mb-5">My Team</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="assets/image/wildan2.jpg" class="rounded-circle mx-auto mt-3 profil" alt="Wildan Habibi">
                        <div class="social-icons mt-3">
                            <a href="https://www.linkedin.com/in/wildanhbbrizq/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/wilrizx" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Wildan Habibi</h5>
                            <p class="card-text">Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="assets/image/wijil.webp" class="rounded-circle mx-auto mt-3 profil" alt="Wildan Habibi">
                        <div class="social-icons mt-3">
                            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.github.com" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dimas Wijil</h5>
                            <p class="card-text">Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card">
                        <img src="assets/image/ijul.webp" class="rounded-circle mx-auto mt-3 profil" alt="Wildan Habibi">
                        <div class="social-icons mt-3">
                            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.github.com" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Julianto Jayadi</h5>
                            <p class="card-text">Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan kolom lainnya di sini -->
            </div>
        </div>
    </section>
    <!-- <div class="text-center p-3">
        <i class="bi bi-c-circle-fill footer"></i> Created By <i class="bi bi-heart-fill"></i>
        <a class="footer" href="#">HabibiDev</a>
    </div> -->
    <footer class="bg-light text-center py-3">
        <div class="container">
            <span class="text-dark">
                <i class="bi bi-c-circle-fill"></i> Created By
                <i class="bi bi-heart-fill text-danger"></i>
                <a href="#" class="text-primary text-decoration-none fw-medium">HabibiDev</a>
            </span>
        </div>
    </footer>

</body>

</html>