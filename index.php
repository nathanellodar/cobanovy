<?php
// Periksa apakah request adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai yang dikirim oleh ESP32
    $sensorValue = isset($_POST['sensor']) ? $_POST['sensor'] : null;

    if ($sensorValue !== null) {
        // Lakukan sesuatu dengan data, misalnya menyimpannya ke file log
        $logFile = "data_log.txt";
        $currentTime = date("Y-m-d H:i:s");
        file_put_contents($logFile, "[$currentTime] Sensor Value: $sensorValue\n", FILE_APPEND);

        // Tampilkan data yang diterima di halaman web
        echo "<h2>Data received successfully!</h2>";
        echo "<p>Sensor Value: <strong>$sensorValue</strong></p>";
    } else {
        echo "<h2>No sensor data received.</h2>";
    }
} else {
    echo "<h2>Invalid request method. Please use POST.</h2>";
}
?>
