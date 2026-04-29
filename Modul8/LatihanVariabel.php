<?php

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

echo "<h2>Daftar Hari dalam waktu Seminggu</h2>";

foreach ($hari as $index => $namaHari) {
    echo "<p>Hari ke - " . ($index + 1) . " : <b>$namaHari</b></p>";
}

?>