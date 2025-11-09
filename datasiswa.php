<?php
$koneksi = new mysqli("localhost", "root", "", "siswabaru");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
$result = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        a { text-decoration: none; color: #4CAF50; }
    </style>
</head>
<body>

<h2>Data Pendaftar Siswa Baru</h2>
<a href="daftar.html">+ Tambah Pendaftar Baru</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Jurusan Pilihan</th>
        <th>Tanggal Daftar</th>
    </tr>

    <?php
    $no = 1;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$no++."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jeniskelamin']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['asalsekolah']."</td>
                <td>".$row['jurusan']."</td>
                <td>".$row['tanggaldaftar']."</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>
