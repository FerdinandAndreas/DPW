<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Manusia</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

require_once('Kelas/manusia.php');

$adrian = new Manusia();
$adrian->setNama("Adrian American Express");
$adrian->setUmur(20);

$ferdinand = new Manusia();
$ferdinand->setNama("Ferdinand BCA Prioritas");
$ferdinand->setUmur(19);

$Fauzy = new Manusia();
$Fauzy->setNama("Fauzy BCA Solitaire");
$Fauzy->setUmur(19);

?>

<div class="container">

    <div class="left-panel">

        <h1>Praktikum OOP PHP</h1>

        <p>
            Program sederhana untuk memahami konsep class,
            object, getter setter, dan access modifier
            pada Object Oriented Programming PHP
        </p>

    </div>

    <div class="right-panel">

        <h2>Data Manusia</h2>

        <div class="card">

            <h3>Ferdinand BCA Prioritas</h3>

            <div class="info">
                <strong>Nama Lengkap :</strong>
                <?php echo $ferdinand->getNama(); ?>
            </div>

            <div class="info">
                <strong>NIK :</strong>
                <?php echo $ferdinand->getNIK(); ?>
            </div>

            <div class="info">
                <strong>Umur :</strong>
                <?php echo $ferdinand->getUmur(); ?> tahun
            </div>

        </div>

        <div class="card">

            <h3>Adrian American Express</h3>

            <div class="info">
                <strong>Nama :</strong>
                <?php echo $adrian->getNama(); ?>
            </div>

            <div class="info">
                <strong>Umur :</strong>
                <?php echo $adrian->getUmur(); ?> tahun
            </div>

        </div>

        <div class="card">

            <h3>Fauzy BCA Solitaire</h3>

            <div class="info">
                <strong>Nama :</strong>
                <?php echo $Fauzy->getNama(); ?>
            </div>

            <div class="info">
                <strong>Umur :</strong>
                <?php echo $Fauzy->getUmur(); ?> tahun
            </div>

            <div class="info">
                <?php echo $Fauzy->getNIK(); ?>
            </div>

        </div>

        <div class="card">

            <h3>Kesimpulan</h3>

            <div class="info">

                    <li>
                        <strong>Class</strong> merupakan blueprint
                        atau cetakan untuk membuat object
                    </li>

                    <li>
                        <strong>Access Modifier</strong> digunakan
                        untuk menentukan hak akses property
                        dan method dalam class
                    </li>

                    <li>
                        <strong>Getter dan Setter</strong>
                        dipakai untuk mengakses property
                        protected atau private secara aman
                    </li>

                    <li>
                        Method <strong>getNIK()</strong>
                        harus bersifat public agar bisa
                        dipanggil dari luar class
                    </li>

                    <li>
                        Setiap object memiliki data masing-masing
                        walaupun berasal dari class yang sama
                    </li>

            </div>

        </div>

    </div>

</div>

</body>
</html>