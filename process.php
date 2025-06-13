<?php

include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #007BFF;
        color: white;
        text-align: center;
        padding: 1rem 0;
    }

    .container {
        max-width: 600px;
        margin: 2rem auto;
        padding: 1.5rem;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        text-align: center;
    }

    p {
        font-size: 1rem;
        margin: 0.5rem 0;
        line-height: 1.6;
    }

    a {
        display: inline-block;
        margin-top: 1rem;
        padding: 0.8rem 1.5rem;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <header>
        <h1>Sistem Pakar Diagnosa Skizofrenia</h1>
    </header>
    <div class="container">
        <?php
        // File: proses_diagnosa.php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = isset($_POST['nama']) ? trim($_POST['nama']) : null;
            $gejala_terpilih = isset($_POST['gejala']) ? $_POST['gejala'] : [];

            if (empty($nama)) {
                echo "<p>Nama tidak boleh kosong. Silakan kembali dan isi nama Anda.</p>";
                exit();
            }

            if (empty($gejala_terpilih)) {
                echo "<p>Anda belum memilih gejala. Silakan kembali dan pilih setidaknya satu gejala.</p>";
                exit();
            }

            // Simpan nama pengguna ke tabel `users`
            $stmt_user = $conn->prepare("INSERT INTO users (nama) VALUES (?)");
            $stmt_user->bind_param("s", $nama);
            $stmt_user->execute();
            $user_id = $stmt_user->insert_id;

            // Simpan gejala yang dipilih ke tabel `user_gejala`
            $stmt_gejala = $conn->prepare("INSERT INTO user_gejala (user_id, kode_gejala) VALUES (?, ?)");
            foreach ($gejala_terpilih as $gejala) {
                $stmt_gejala->bind_param("is", $user_id, $gejala);
                $stmt_gejala->execute();
            }

            // Proses Diagnosa
            $cf_total = [];
            foreach ($gejala_terpilih as $gejala) {
                $query = "SELECT * FROM aturan WHERE kode_gejala='$gejala'";
                $result = $conn->query($query);

                while ($row = $result->fetch_assoc()) {
                    $penyakit = $row['kode_penyakit'];
                    $cf_gejala = $row['cf'];

                    if (!isset($cf_total[$penyakit])) {
                        $cf_total[$penyakit] = $cf_gejala;
                    } else {
                        $cf_total[$penyakit] = $cf_total[$penyakit] + $cf_gejala * (1 - $cf_total[$penyakit]);
                    }
                }
            }

            arsort($cf_total);
            $hasil = key($cf_total);

            $query = "SELECT * FROM penyakit WHERE kode_penyakit='$hasil'";
            $result = $conn->query($query);
            $penyakit = $result->fetch_assoc();

            echo "<h1>Hasil Diagnosa</h1>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Tipe Skizofrenia: " . $penyakit['nama_penyakit'] . "</p>";
            echo "<p>Tingkat Kepastian: " . round($cf_total[$hasil] * 100, 2) . "%</p>";
            echo "<p>Rekomendasi: " . $penyakit['rekomendasi'] . "</p>";
            echo "<a href='form_diagnosa.php'>Ulangi Diagnosa</a>";
        }
        ?>
    </div>
</body>

</html>