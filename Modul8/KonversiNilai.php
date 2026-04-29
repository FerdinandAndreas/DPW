<?php

$nilai = 85; 

echo "<h2>Hasil Konversi Nilai</h2>";
echo "<p>Nilai yang dimasukkan: <b>$nilai</b></p>";


if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
    $keterangan = "Sangat Baik";

} elseif ($nilai >= 80) {
    $huruf = "AB";
    $keterangan = "Baik";

} elseif ($nilai >= 70) {
    $huruf = "B";
    $keterangan = "Cukup";

} elseif ($nilai >= 60) {
    $huruf = "BC";
    $keterangan = "Kurang";

} elseif ($nilai >= 0) {
    $huruf = "C";
    $keterangan = "Perlu Perbaikan";

} else {
    $huruf = "-";
    $keterangan = "Nilai tidak valid";
}


echo "<p>Nilai huruf: <b>$huruf</b></p>";
echo "<p>Keterangan: <b>$keterangan</b></p>";

echo "<hr>";


echo "<h3>Rentang Penilaian</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr><th>Nilai Huruf</th><th>Rentang</th><th>Keterangan</th></tr>";
echo "<tr><td>A</td><td>90 - 100</td><td>Sangat Baik</td></tr>";
echo "<tr><td>AB</td><td>80 - 89</td><td>Baik</td></tr>";
echo "<tr><td>B</td><td>70 - 79</td><td>Cukup</td></tr>";
echo "<tr><td>BC</td><td>60 - 69</td><td>Kurang</td></tr>";
echo "<tr><td>C</td><td>0 - 59</td><td>Perlu Perbaikan</td></tr>";
echo "</table>";

?>