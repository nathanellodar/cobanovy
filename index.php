<?php
session_start();  // Memulai session PHP

// Periksa apakah request adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai yang dikirim oleh ESP32
    $sensorValue = isset($_POST['sensor']) ? $_POST['sensor'] : null;

    if ($sensorValue !== null) {
        // Simpan data ke session (langsung mengirimkan data ke halaman web)
        $_SESSION['sensorData'] = $sensorValue;

        // Kirim respons ke ESP32 (sekadar konfirmasi)
        echo "Data received: $sensorValue";
    } else {
        echo "No sensor data received";
    }
} else {
    echo "Invalid request method. Please use POST.";
}
?>
