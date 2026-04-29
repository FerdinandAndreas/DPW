<?php

echo "<h3>Perulangan While </h3>";
$x = 10;
while ($x >= 5) {
    echo "Hitungan mundur : $x<br>";
    $x--;
}

echo "<br><h3>Perulangan Do While</h3>";
$x = 1;
do {
    echo "Perulangan ke - $x<br>";
    $x++;
} while ($x <= 5);

echo "<br><h3>Daftar Warna</h3>";
$colors = array("Merah", "Hijau", "Biru", "Kuning");
foreach ($colors as $value) {
    echo "Warna : $value <br>";
}

echo "<br><h3>Perulangan For</h3>";
for ($x = 0; $x <= 10; $x++) {
    echo "Angka ke - $x<br>";
}

echo "<br><h3>Perulangan dengan Break</h3>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        echo "Perulangan dihentikan pada angka $x<br>";
        break;
    }
    echo "Nilai : $x <br>";
}

?>