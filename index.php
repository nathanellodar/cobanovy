<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sensorValue = $_POST['sensor'];
    // Simpan data ke database atau proses lebih lanjut
    echo "Data received: " . $sensorValue;
} else {
    echo "Invalid request";
}
?>
