<?php
$x = 4;
$y = 8;


echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulus ".$x % $y."<br>";
echo "Exponensial ".$x ** $y."<br>";
echo("<br>");


$x += 2; //  $x = $x + 2
$y *= 2; //  $y = $y * 2
echo "Penambahan x ".$x."<br>";
echo "Perkalian y ".$y."<br>";
echo("<br>");


echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x = ".$x."<br>";
echo("<br>");

echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo("<br>");


$user = "Ferdinand Andreas Ganteng";

$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status."<br>";

echo $color = $color ?? "red";
echo("<br>");


echo "Post-increment Nilai digunakan dulu, kemudian baru ditambah 1";
echo("<br>");
echo "Pre-increment ditambah 1 terlebih dahulu, kemudian baru digunakan";
?>

