<?php

include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Anda</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            /* background-color: #007BFF; */
            /* background-color: rgba(red, green, blue, alpha); */
            margin: 0;
            padding: 0;
        }

        /* .container {
        margin: ;
    } */

        .container-form {
            border: 1px black;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Menyesuaikan tinggi layar */
            /* width: 100%;
            background-color: #d1e3ff; */
        }

        .form-inputdata {
            /* border: 1px black; */
            margin-top: 20px;
            /* text-align: center; */
            justify-content: center;
            align-items: center;
            max-width: 100vh;
        }

        .inputdata {
            border: #0056b3;
        }

        header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            /* padding: 1rem; */
        }

        h1 {
            margin-top: 50px;
            text-align: center;
        }

        form {
            /* max-width: auto; */
            /* margin: 1rem auto; */
            padding: 1.5rem;
            /* background-color: whitesmoke; */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            /* border: 2px black; */
            background-color: #007BFF;
        }

        h1 {
            color: white;
        }

        p {
            /* width: 100%; */
            /* background-color: #0056b3; */
            color: white;
            text-align: center;
            /* font-size: 1.8rem; */
            /* margin: 20px; */
            /* margin-bottom: 1.5rem; */
            /* text-align: center; */
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        form label {
            font-size: 1rem;
            flex: 0 0 120px;
            /* Lebar tetap untuk label */
            margin-right: 1rem;
        }

        form input[type="text"] {
            flex: 1;
            /* Input mengisi ruang yang tersisa */
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="checkbox"] {
            margin-right: 0.5rem;
        }

        form button {
            width: 100%;
            margin-top: 1rem;
            /* padding: 0.8rem; */
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand fw-medium text-white" href="index.php">NutriExpert</a>
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
                        <a class="nav-link active text-white" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-form">
        <div class="form-inputdata">
            <!-- <h1>Form Diagnosa</h1> -->
            <form method="POST" action="process_diagnosa.php" class="inputdata">
                <!-- <div class="form-floating mb-3">
                <input type="nama" class="form-control" id="nama" placeholder="Kelompok 2">
                <label for="nama">Masukkan Nama anda...</label>
            </div> -->
                <div class="form-title">
                    <h1>Form Diagnosa</h1>
                    <p>Membantu anda untuk mendiagnosa penyakit tipe skezofrenia dan menemukan rekomendasi kesehatan tentang gejala yang anda alami</p>
                </div>
                <!-- <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required> -->
                <div class="mb-3">
                    <!-- <label for="basic-url" class="form-label">Nama : </label> -->
                    <div class="input-group">
                        <span class="input-group-text" name="nama" id="basic-addon3">Nama : </span>
                        <input type="text" name="nama" class="form-control" id="basic-url" aria-describe dby="basic-addon3 basic-addon4" placeholder="Masukkan Nama Kamu, Contoh : Wildan">
                    </div>
                    <div class="form-text" id="basic-addon4">Harap Masukkan Nama dengan Benar!</div>
                </div>


                <h3>Pilih Gejala yang Dialami:</h3>
                <?php
                $query = "SELECT * FROM gejala";
                $result = $conn->query($query);

                while ($row = $result->fetch_assoc()) {
                    echo "<label><input type='checkbox' name='gejala[]' value='" . $row['kode_gejala'] . "'> " . $row['nama_gejala'] . "</label>";
                }
                ?>
                <button type="submit" class="btn btn-lg btn-primary">Diagnosa sekarang</button>
                <!-- <button type="submit">Diagnosa</button> -->
            </form>
        </div>
    </div>
    <!-- <div class="text-center p-3">
        <i class="bi bi-c-circle-fill footer"></i> Created By <i class="bi bi-heart-fill"></i>
        <a class="footer" href="#">HabibiDev</a>
    </div> -->
    <footer class="bg-light text-center py-3 mt-5">
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