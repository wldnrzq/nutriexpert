<?php
$name = $_GET['name'];
$status = $_GET['status'];
$recommendation = $_GET['recommendation'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Analisis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Hasil Analisis untuk <?php echo htmlspecialchars($name); ?></h1>
        <p>Status Tubuh Anda: <strong><?php echo $status; ?></strong></p>
        <h3>Rekomendasi Pola Hidup Sehat:</h3>
        <p><?php echo $recommendation; ?></p>
        <a href="main.php" class="button">Coba Lagi</a>
    </div>
</body>

</html>