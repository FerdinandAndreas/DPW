<?php


$total = 1387500; 
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

echo "<h2>Soal Cerita 2: Pecahan Uang Ani</h2>";
echo "<p>Total Uang: Rp. " . number_format($total, 0, ',', '.') . ",-</p>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Pecahan</th><th>Jumlah Lembar/Koin</th></tr>";

$sisa = $total;
foreach ($pecahan as $p) {
    $jumlah = (int)($sisa / $p);
    $sisa   = $sisa % $p;
    echo "<tr><td>Rp. " . number_format($p, 0, ',', '.') . ",-</td><td>$jumlah</td></tr>";
}
echo "</table>";
echo "<p>Sisa uang yang tidak bisa dipecah: Rp. " . number_format($sisa, 0, ',', '.') . ",-</p>";

echo "<hr>";



$siswa = array(
    array("no" => 1,  "poin" => 75, "nama" => "Adi"),
    array("no" => 2,  "poin" => 80, "nama" => "Joni"),
    array("no" => 3,  "poin" => 65, "nama" => "Jihan"),
    array("no" => 4,  "poin" => 70, "nama" => "Aya"),
    array("no" => 5,  "poin" => 85, "nama" => "Ita"),
    array("no" => 6,  "poin" => 90, "nama" => "Budi"),
    array("no" => 7,  "poin" => 95, "nama" => "Tini"),
    array("no" => 8,  "poin" => 65, "nama" => "Sari"),
);

echo "<h2>Soal 18: Nilai Akhir Kelas</h2>";


echo "<table border='1' cellpadding='8'>";
echo "<tr><th>No Urut</th><th>Poin</th><th>Siswa</th></tr>";
foreach ($siswa as $s) {
    echo "<tr><td>{$s['no']}</td><td>{$s['poin']}</td><td>{$s['nama']}</td></tr>";
}
echo "</table>";


echo "<h3>a) Poin siswa nomor urut 5:</h3>";
foreach ($siswa as $s) {
    if ($s['no'] == 5) {
        echo "<p>Siswa ke-5: {$s['nama']} | Poin: {$s['poin']}</p>";
    }
}


echo "<h3>b) Siswa dengan poin 90:</h3>";
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo "<p>{$s['nama']}</p>";
        $ada = true;
    }
}
if (!$ada) echo "<p>Tidak ada</p>";


echo "<h3>c) Siswa dengan poin 100:</h3>";
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo "<p>{$s['nama']}</p>";
        $ada = true;
    }
}
if (!$ada) echo "<p>Tidak ada</p>";
?>
