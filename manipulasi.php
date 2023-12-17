<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $check = $_POST['check'];
    $radio = $_POST['radio'];

    // Insert data ke tabel users
    $sql = "INSERT INTO users (nama, check, radio) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nama, $check, $radio);
    $stmt->execute();

    echo "Data berhasil ditambahkan";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi data</title>
</head>

<body>

    <h2>Data Mahasiswa berhasil dimanipulasi</h2>

</body>
</html>