<?php
$nama = "";
$email = "";
$nilai = "";
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $nilai = $_POST["nilai"];

    if ($nilai > 70) {
        $hasil = "Lulus";
    } elseif ($nilai < 70) {
        $hasil = "Remedial";
    } else {
        $hasil = "Nilai tepat 70";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
</head>
<body>
    <h2>Form Nilai Ujian</h2>

    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" min="0" max="100" required>
        <br><br>

        <button type="submit">Periksa Nilai</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <h3>Hasil Ujian</h3>
        <p>Nama: <?= $nama ?></p>
        <p>Email: <?= $email ?></p>
        <p>Nilai: <?= $nilai ?></p>
        <p>Status: <strong><?= $hasil ?></strong></p>
    <?php endif; ?>
</body>
</html>
