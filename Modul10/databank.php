<!DOCTYPE html>
<html lang="id">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bank</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

require_once('Kelas/akunbank.php');

$rekeningFerdi = new akunBank(
    nomorAkun: "B001",
    nominal: 4500000000
);

$rekeningFerdi->setNama("Ferdinand BCA Priotitas");


$rekeningAdrian = new akunBank(
    nomorAkun: "B002",
    nominal: 7500000000
);

$rekeningAdrian->setNama("Adrian American Express");

?>

<div class="container">

    <div class="left-panel">
        <h1>Simulasi Bank</h1>

        <p>
            Program sederhana OOP PHP untuk simulasi rekening bank.
        </p>
    </div>

    <div class="right-panel">

        <h2>Data Rekening</h2>

        <div class="card">
            <h3>Saldo Awal</h3>

            <div class="info">
                <?php echo $rekeningFerdi->tampilUang(); ?>
            </div>

            <div class="info">
                <?php echo $rekeningAdrian->tampilUang(); ?>
            </div>
        </div>

        <div class="card">
            <h3>Transaksi Ferdinand BCA Priotitas</h3>

            <div class="info">
                <?php echo $rekeningFerdi->tambahUang(547000000); ?>
            </div>

            <div class="info">
                <?php echo $rekeningFerdi->kurangUang(22500000); ?>
            </div>
        </div>

        <div class="card">
            <h3>Transaksi Adrian American Express</h3>

            <div class="info">
                <?php echo $rekeningAdrian->tambahUang(90000000); ?>
            </div>

            <div class="info">
                <?php echo $rekeningAdrian->kurangUang(550000000); ?>
            </div>
        </div>

    </div>

</div>

</body>
</html>