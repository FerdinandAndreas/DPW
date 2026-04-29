<?php

echo "<h3>Contoh Fungsi pada PHP</h3>";

function tampilkanPesan($nama) {
    echo "Halo $nama! Selamat datang di halaman ini<br>";
}

tampilkanPesan("Ferdinand Ganteng");

echo "<br>";

function hitungPenjumlahan(int $angka1, int $angka2) {
    return $angka1 + $angka2;
}

$hasil = hitungPenjumlahan(9, 5);

echo "Hasil penjumlahan: $hasil";

?>