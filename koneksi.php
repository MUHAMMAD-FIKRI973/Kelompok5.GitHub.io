<?php 

$id     = $_POST['nama'];
$nama   = $_POST['nama'];
$jk     = $_POST['jk'];
$alamat = $_POST['alamat'];
$email  = $_POST['email'];
$sosmed = $_POST['sosmed'];
$info   = $_POST['info'];
$pesan  = $_POST['pesan'];

$conn = new mysqli("localhost", "root", "", "bukutamu");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO tamu (id, nama, jk, alamat, email, sosmed, info, pesan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $id, $nama, $jk, $alamat, $email, $sosmed, $info, $pesan);
    $stmt->execute();
    echo "Data berhasil disimpan";
    $stmt->close();
    $conn->close();
}
?>