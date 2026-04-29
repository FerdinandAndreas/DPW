<?php

$nama = "Obi";
$gaji_pokok    = 3250000; 
$tunjangan     = 1200000;  
$persen_pajak  = 10 / 100; 


$gaji_kotor  = $gaji_pokok + $tunjangan;
$pajak       = $persen_pajak * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;


function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

echo "<h2>Rincian Gaji Karyawan</h2>";
echo "<p>Nama: <b>$nama</b></p>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Keterangan</th><th>Jumlah</th></tr>";

echo "<tr><td>Gaji Pokok</td><td>" . rupiah($gaji_pokok) . "</td></tr>";
echo "<tr><td>Tunjangan</td><td>" . rupiah($tunjangan) . "</td></tr>";
echo "<tr><td>Gaji Kotor</td><td>" . rupiah($gaji_kotor) . "</td></tr>";
echo "<tr><td>Pajak (10%)</td><td>" . rupiah($pajak) . "</td></tr>";

echo "<tr style='background-color:#f2f2f2;'>
        <td><b>Gaji Bersih</b></td>
        <td><b>" . rupiah($gaji_bersih) . "</b></td>
      </tr>";

echo "</table>";

?>