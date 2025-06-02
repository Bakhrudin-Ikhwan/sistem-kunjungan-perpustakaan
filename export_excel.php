<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=riwayat_kunjungan.xls");

$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM kunjungan ORDER BY id DESC");

echo "<table border='1'>
<tr>
    <th>Tanggal</th>
    <th>Tipe Pengunjung</th>
    <th>Keperluan</th>
    <th>Sekolah Asal</th>
    <th>Pencarian</th>
    <th>Guru/Staff</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['tanggal']}</td>
        <td>{$row['tipe_pengunjung']}</td>
        <td>{$row['keperluan']}</td>
        <td>{$row['sekolah_asal']}</td>
        <td>{$row['pencarian']}</td>
        <td>{$row['nama_guru_staff']}</td>
    </tr>";
}

echo "</table>";
$conn->close();
?>
