<?php
$koneksi = new mysqli("localhost", "root", "", "dataeskul");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$nama           = $_POST['nama'];
$kelas          = $_POST['kelas'];
$jenis          = $_POST['jenis'];
$telpon         = $_POST['telpon'];
$email          = $_POST['email'];
$alasan         = $_POST['alasan'];

$sql = "INSERT INTO eskul 
        (nama, kelas, jenis, telpon, email, alasan)
        VALUES ('$nama','$kelas','$jenis','$telpon','$email','$alasan')";

$koneksi->query($sql);

$data = $koneksi->query("SELECT * FROM eskul ORDER BY id DESC LIMIT 1")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Sekolah</title>
<style>
body { font-family: Arial, sans-serif; background: #f4f4f9; margin: 0; padding: 20px; }
.container { max-width: 900px; background: #fff; padding: 20px; border-radius: 10px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
img { max-width: 150px; border-radius: 10px; }
table { width: 100%; margin-top: 15px; border-collapse: collapse; }
td { padding: 8px; vertical-align: top; }
iframe { width: 100%; height: 250px; border: none; margin-top: 10px; }
a { color: #007bff; text-decoration: none; }
a:hover { text-decoration: underline; }
</style>
</head>
<body>

<div class="container">
  <table>
    <tr><td><strong>nama</strong></td><td><?= $data['nama'] ?></td></tr>
    <tr><td><strong>kelas</strong></td><td><?= $data['kelas'] ?></td></tr>
    <tr><td><strong>kelas</strong></td><td><?= $data['jenis'] ?></td></tr>
    <tr><td><strong>Telepon</strong></td><td><?= $data['telpon'] ?></td></tr>
    <tr><td><strong>Email</strong></td><td><?= $data['email'] ?></td></tr>
  </table>
</div>

</body>
</html>