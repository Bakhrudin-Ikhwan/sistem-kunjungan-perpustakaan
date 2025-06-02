<form method="POST" action="simpan.php">

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>e-Perpustakaan</title>
  <link rel="icon" type="image/png" href="alhikmah.png">
  <link rel="stylesheet" href="style.css">
  <title>Form Kunjungan Perpustakaan</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f7f8;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
      position: relative;
    }

    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 40px;
      height: auto;
    }

    h2 {
      text-align: center;
      font-size: 20px;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 500;
      color: #333;
    }

    select,
    input[type="text"],
    input[type="radio"] {
      margin-top: 5px;
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
    }

    .radio-group {
      display: flex;
      gap: 20px;
      margin-top: 5px;
    }

    .radio-group input {
      width: auto;
    }

    .radio-group label {
      margin: 0;
      font-weight: normal;
    }

    button {
      width: 100%;
      margin-top: 25px;
      padding: 10px;
      background-color: #2e7d32;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1b5e20;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 12px;
      color: #777;
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Ganti src dengan URL/logo Al Hikmah -->
  <img src="alhikmah.png" alt="Logo Al Hikmah" class="logo" />

  <h2>Formulir Kunjungan Perpustakaan<br>AL Hikmah IIBS Batu</h2>

  <form method="POST" action="simpan.php">
    <label>Tipe Pengunjung:</label>
    <div class="radio-group">
      <label><input type="radio" name="tipe_pengunjung" value="SISWA" checked> Siswa</label>
      <label><input type="radio" name="tipe_pengunjung" value="GURU / STAFF"> Guru/Staff</label>
      <label><input type="radio" name="tipe_pengunjung" value="TAMU"> Tamu</label>
    </div>

    <label>Keperluan:</label>
    <div class="radio-group">
      <label><input type="radio" name="keperluan" value="BACA"> Baca</label>
      <label><input type="radio" name="keperluan" value="PINJAM"> Pinjam</label>
      <label><input type="radio" name="keperluan" value="KEMBALI"> Kembali</label>
    </div>

    <label>Sekolah Asal:</label>
    <select name="sekolah_asal">
      <option value="SMP Al Hikmah Boarding School">SMP Al Hikmah Boarding School</option>
      <option value="SMA Al Hikmah Boarding School">SMA Al Hikmah Boarding School</option>
    </select>

    <label>Pencarian:</label>
    <select name="pencarian">
      <option value="Nama">Nama</option>
      <option value="No. Induk">No. Induk</option>
    </select>

    <label>Nama Guru/Staff:</label>
    <input type="text" name="nama_guru_staff" placeholder="Kosongkan jika bukan guru/staff">

    <button type="submit">Kirim</button>
  </form>

  <div class="footer">
    © IT Support Al Hikmah IIBS Batu
  </div>
</div>

</body>
</html>
