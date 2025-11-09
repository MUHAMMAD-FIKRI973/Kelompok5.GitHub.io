<?php
include 'koneksi1.php';

$nama = $_POST['nama'];
$jk = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$asal = $_POST['asalsekolah'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO siswa (nama, jeniskelamin, alamat, asalsekolah, jurusan)
          VALUES ('$nama', '$jk', '$alamat', '$asal', '$jurusan')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Pendaftaran berhasil!'); window.location='data_siswa.php';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>