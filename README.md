# 📚 Sistem Kunjungan Perpustakaan

Sistem ini merupakan aplikasi web sederhana berbasis PHP untuk mencatat kunjungan siswa atau tamu ke perpustakaan. Dikembangkan dengan antarmuka ringan dan fungsionalitas utama seperti pencatatan, penyimpanan, riwayat, dan ekspor data ke Excel.

## ✨ Fitur Utama

- ✅ Formulir input kunjungan (nama, kelas, keperluan)
- ✅ Penyimpanan data kunjungan ke database
- ✅ Tampilan riwayat kunjungan
- ✅ Ekspor data ke file Excel (.xlsx)

## 💻 Teknologi yang Digunakan

- PHP (Plain PHP)
- MySQL (disarankan untuk digunakan dengan phpMyAdmin)
- HTML5, CSS (basic styling)
- PHPSpreadsheet (untuk ekspor Excel, jika digunakan)

## 🧩 Struktur File

├── index.php # Halaman utama (form kunjungan)
├── simpan.php # Backend penyimpanan data ke database
├── riwayat.php # Menampilkan riwayat kunjungan
├── export_excel.php # Mengekspor data kunjungan ke Excel
