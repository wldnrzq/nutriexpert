<?php

include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<style>
    body {
        /* font-family: Arial, sans-serif; */
        /* background-color: #d1e3ff; */
        /* color: #333; */
        /* margin: 0; */
        /* padding: 0; */
        /* display: flex; */
        /* justify-content: center; */
        /* align-items: center; */
        /* height: 100vh; */
    }

    .container-box {
        /* margin-left: 50px;
        margin-right: 30px; */
        background-color: #fff;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* max-width: 400px; */
        text-align: center;
    }



    h1 {
        color: #0355cc;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        margin: 10px 0;
        padding: 5px 0;
        text-align: justify;
        /* word-wrap: break-word; */
    }

    .btn {
        display: inline-block;
        background-color: #0355cc;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .footer {
        width: 100%;
        margin: 0;
        background-color: #f8f9fa;
        /* padding: 15px; */
        text-align: center;
        margin-top: 5rem;
    }
</style>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $gejala_terpilih = $_POST['gejala'];

    // Validasi jika gejala tidak dipilih
    if (empty($gejala_terpilih)) {
        echo "<p>Anda belum memilih gejala. Silakan kembali dan pilih setidaknya satu gejala.</p>";
        exit();
    }

    $cf_total = [];

    // Iterasi melalui gejala yang dipilih
    foreach ($gejala_terpilih as $gejala) {
        // Mengambil data aturan berdasarkan kode gejala
        $query = "SELECT kode_penyakit, cf FROM aturan WHERE kode_gejala='$gejala'";
        $result = $conn->query($query);

        // Memproses hasil query
        while ($row = $result->fetch_assoc()) {
            $penyakit = $row['kode_penyakit'];
            $cf_aturan = $row['cf'];

            // Menghitung CF total menggunakan rumus CF kombinasi
            if (!isset($cf_total[$penyakit])) {
                $cf_total[$penyakit] = $cf_aturan;
            } else {
                $cf_total[$penyakit] = $cf_total[$penyakit] + $cf_aturan * (1 - $cf_total[$penyakit]);
            }
        }
    }

    // Mengurutkan CF total secara menurun
    arsort($cf_total);

    // Mendapatkan penyakit dengan CF tertinggi
    $hasil = key($cf_total);

    // Mengambil detail penyakit berdasarkan kode_penyakit
    $query = "SELECT nama_penyakit, rekomendasi FROM penyakit WHERE kode_penyakit='$hasil'";
    $result = $conn->query($query);
    $penyakit = $result->fetch_assoc();
?>

    <body>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
                <a class="navbar-brand fw-bold text-white" href="index.php">NutriExpert</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="color: white;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-medium" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-medium" href="#">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-medium" href="#team">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">NutriExpert</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-bg-light ms-auto mb-4 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <div class="container-box mt-5">
            <div class="col-lg-5 mx-auto">
                <!-- <div class="card"> -->
                <div class="card-body">
                <?php
                echo "<h1>Hasil Diagnosa</h1>";
                echo "<p>Nama                 : $nama</p><br>";
                echo "<p>Tipe Skizofrenia     : " . htmlspecialchars($penyakit['nama_penyakit']) . "</p><br>";
                echo "<p>Tingkat Kepastian    : " . round($cf_total[$hasil] * 100, 2) . "%</p><br>";
                echo "<p>Rekomendasi          : " . htmlspecialchars($penyakit['rekomendasi']) . "</p><br>";
                echo "<a href='main.php'><button class='btn btn-primary'>Ulangi Diagnosa</button></a>";
            }
                ?>
                </div>
            </div>
            <div class="footer bg-light">
                <div class="text-center p-3">
                    <span>
                        <i class="bi bi-c-circle-fill"></i> Created By
                        <span style="color: red;">❤️</span>
                        <a href="#" class="text-primary text-decoration-none">HabibiDev</a>
                    </span>
                </div>
            </div>
            <?php
            exit();
            ?>
    </body>

</html>
<!-- if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nama = $_POST['nama'];
$gejala_terpilih = $_POST['gejala'];

if (empty($gejala_terpilih)) {
echo "<p>Anda belum memilih gejala. Silakan kembali dan pilih setidaknya satu gejala.</p>";
exit();
}

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
$penyakit = $result->fetch_assoc(); -->

<!-- echo "<h1>Hasil Diagnosa</h1>";
echo "<p>Nama: $nama</p>";
echo "<p>Tipe Skizofrenia: " . $penyakit['nama_penyakit'] . "</p>";
echo "<p>Tingkat Kepastian: " . round($cf_total[$hasil] * 100, 2) . "%</p>";
echo "<p>Rekomendasi: " . $penyakit['rekomendasi'] . "</p>";
echo "<a href='form_diagnosa.php'>Ulangi Diagnosa</a>";
exit();
} -->