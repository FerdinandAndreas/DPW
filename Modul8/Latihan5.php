<?php

$warna = "merah";

switch ($warna) {
    case "merah":
        echo "Kamu memilih warna merah ";
        break;
    case "kuning":
        echo "Kamu memilih warna kuning ";
        break;
    case "hijau":
        echo "Kamu memilih warna hijau ";
        break;
    default:
        echo "Warna yang dipilih tidak tersedia.";
}
echo "<br>";
?>