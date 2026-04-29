<?php

$angka = 7;


$terbilangList = [
    1 => "Satu",
    2 => "Dua",
    3 => "Tiga",
    4 => "Empat",
    5 => "Lima",
    6 => "Enam",
    7 => "Tujuh",
    8 => "Delapan",
    9 => "Sembilan"
];

echo "<h2>Konversi Angka ke Kata</h2>";
echo "<p>Angka yang dimasukkan: <b>$angka</b></p>";


if (isset($terbilangList[$angka])) {
    echo "<p>Hasil: <b>{$terbilangList[$angka]}</b></p>";
} else {
    echo "<p>Angka tidak tersedia (gunakan 1 - 9)</p>";
}

echo "<hr>";

echo "<h3>Daftar Angka 1 - 9</h3>";
foreach ($terbilangList as $key => $value) {
    echo "<p>$key → $value</p>";
}

?>