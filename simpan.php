<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan";

// Koneksi
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$tipe = $_POST['tipe_pengunjung'];
$keperluan = $_POST['keperluan'];
$sekolah = $_POST['sekolah_asal'];
$pencarian = $_POST['pencarian'];
$guru = $_POST['nama_guru_staff'];
$tanggal = date('Y-m-d');

// Simpan ke database
$sql = "INSERT INTO kunjungan (tanggal, tipe_pengunjung, keperluan, sekolah_asal, pencarian, nama_guru_staff)
        VALUES ('$tanggal', '$tipe', '$keperluan', '$sekolah', '$pencarian', '$guru')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Terima kasih telah membaca'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>