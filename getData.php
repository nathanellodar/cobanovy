<?php
session_start();  // Memulai session PHP

// Periksa apakah ada data sensor yang disimpan di session
if (isset($_SESSION['sensorData'])) {
    // Ambil data sensor dari session
    $sensorData = $_SESSION['sensorData'];
    echo "<h2>Latest Data</h2>";
    echo "<p>Sensor Value: <strong>$sensorData</strong></p>";
} else {
    echo "<p>No data received yet.</p>";
}
?>
