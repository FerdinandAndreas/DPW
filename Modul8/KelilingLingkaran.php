<?php

$jari_jari = 15; 
$pi = pi(); 


$keliling = 2 * $pi * $jari_jari;


echo "<h2>Perhitungan Keliling Lingkaran</h2>";

echo "<p>Jari-jari lingkaran : <b>$jari_jari cm</b></p>";
echo "<p>Nilai π : <b>" . round($pi, 3) . "</b></p>";

echo "<p>Rumus yang digunakan :</p>";
echo "<p>K = 2 × π × r</p>";

echo "<hr>";

echo "<p>Hasil perhitungan :</p>";
echo "<p><b>Keliling = " . round($keliling, 2) . " cm</b></p>";

?>