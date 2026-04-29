<?php
date_default_timezone_set("Asia/Jakarta");

$nama = "Ferdinand Ganteng";
echo "Hallo, $nama!<br>";

$jam = date("H");
echo "<p>Sekarang Pukul : " . date("H:i:s") . "<br><br><p>";

echo "<h3>Status Waktu Sekarang</h3>";


if ($jam >= 5 && $jam < 10) {
    echo "Selamat pagi, semoga harimu menyenangkan";

} elseif ($jam >= 10 && $jam < 15) {
    echo "Selamat siang, jangan lupa ya untuk istirahat dan makan";

} elseif ($jam >= 15 && $jam < 18) {
    echo "Selamat sore, tetap semangat lekk";

} else {
    echo "Selamat malam, waktunya bersantai dan beristirahat";
}

echo "<br><br>";

echo "<b>Info tambahan :</b><br>";

if ($jam < 12) {
    echo "Sekarang masih pagi menuju siang.";
} else {
    echo "Sekarang sudah masuk waktu siang ke malam.";
}
?>