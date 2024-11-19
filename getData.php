<?php
// Baca data dari file log atau database
$logFile = "data_log.txt";

// Membaca isi file log (dalam contoh ini, hanya mengambil baris terakhir)
$lines = file($logFile, FILE_IGNORE_NEW_LINES);
$lastLine = end($lines);  // Ambil baris terakhir yang berisi data terbaru

// Menampilkan data yang baru saja diterima
echo "<h2>Latest Data</h2>";
echo "<p>$lastLine</p>";
?>
