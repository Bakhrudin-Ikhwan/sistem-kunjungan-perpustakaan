
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM kunjungan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>riwayat</title>
  <link rel="icon" type="image/png" href="alhikmah.png">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f7f8;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 960px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    h1 {
      text-align: center;
      font-size: 22px;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .links {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .links a {
      color: #2e7d32;
      text-decoration: none;
      font-weight: 500;
    }

    .links a.export {
      color: #1565c0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 12px 15px;
      border: 1px solid #ccc;
      text-align: left;
      font-size: 14px;
    }

    th {
      background-color: #f0f0f0;
      font-weight: 600;
      color: #333;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    @media (max-width: 600px) {
      .links {
        flex-direction: column;
        align-items: start;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
   
<div class="container">
  <h1>Riwayat Kunjungan Perpustakaan</h1>

  <div class="links">
    <a href="index.php">← Kembali ke Form</a>
    <a href="export_excel.php" class="export">Export ke Excel</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Tipe</th>
        <th>Keperluan</th>
        <th>Sekolah</th>
        <th>Pencarian</th>
        <th>Guru/Staff</th>
      </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['tipe_pengunjung'] ?></td>
            <td><?= $row['keperluan'] ?></td>
            <td><?= $row['sekolah_asal'] ?></td>
            <td><?= $row['pencarian'] ?></td>
            <td><?= $row['nama_guru_staff'] ?></td>
        </tr>
        <?php } ?>
		</tbody>
    </table>
</body>
</html>
<?php $conn->close(); ?>
