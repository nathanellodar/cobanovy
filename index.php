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

        // Kirim respons ke ESP32 (ini tidak terlihat oleh klien, hanya untuk ESP32)
        echo "Data received: $sensorValue";
    } else {
        echo "No sensor data received";
    }
} else {
    echo "Invalid request method. Please use POST.";
}
?>
