<?php 
$alasan = $_POST['alasan'];

$conn = new mysqli("localhost", "root", "", "keluhan");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO laporan (pesan) VALUES (?)");
    $stmt->bind_param("s", $alasan);
    $stmt->execute();
    echo "Data berhasil disimpan";
    $stmt->close();
    $conn->close();
}
?>
