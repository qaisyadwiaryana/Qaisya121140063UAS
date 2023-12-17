<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenisKelamin'];
$minat = $_POST['minat1'] . ', ' . $_POST['minat2'];

$sql = "INSERT INTO tabelData (nama, jenisKelamin, minat)
VALUES ('$nama', '$jenisKelamin', '$minat')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>