<?php

$txt = "Hallo Selamat datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 8;
$y = 10.8;

echo "<p>Isi Variable txt adalah : $txt</p>" ;
echo "<p>Isi Variable x adalah : $x</p>" ;
echo "<p>Isi Variable y adalah : $y</p>" ;
echo "<p>Belajar PHP di " . $txt2 . "<br><p>";
echo $x + $y;


define("nama_konstanta", "Ferdinand Andreas Ganteng");
echo "<br>".nama_konstanta;
?>
