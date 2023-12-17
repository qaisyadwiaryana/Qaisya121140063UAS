<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $check = $_POST['check'];
    $radio = $_POST['radio'];
    // Validasi dan pengolahan data
    // Contoh: Simpan data ke database atau gunakan untuk kebutuhan lain
    // ...
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olah data</title>
</head>

<body>

    <h2>Data Mahasiswa berhasil diolah</h2>

</body>
</html>
