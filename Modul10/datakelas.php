<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

require_once('Kelas/mahasiswa.php');


$mhs1 = new mahasiswa(nama: "Ferdinand BCA Prioritas");
$mhs1->setNIM("253307027");
$mhs1->setKelas("TI 2A");
$mhs1->setJurusan("Teknologi Informasi");
$mhs1->setUmur(19);

$mhs2 = new mahasiswa(nama: "Adrian American Express");
$mhs2->setNIM("253307014");
$mhs2->setKelas("TI 2A");
$mhs2->setJurusan("Teknologi Informasi");
$mhs2->setUmur(20);

$mhs3 = new mahasiswa(nama: "Fauzy BCA Solitaire");
$mhs3->setNIM("253307024");
$mhs3->setKelas("TI 2A");
$mhs3->setJurusan("Teknologi Informasi");
$mhs3->setUmur(19);


$daftarMhs = [$mhs1, $mhs2, $mhs3];

?>

<div class="container">

    
    <div class="left-panel">

        <h1>Data Mahasiswa</h1>

        <p>
            Program OOP PHP menggunakan konsep inheritance
            untuk menampilkan data mahasiswa
        </p>

    </div>

    <div class="right-panel">

        <h2>Informasi Mahasiswa</h2>

        <div class="card">

            <h3>Data Mahasiswa 1</h3>

            <div class="info">
                Nama :
                <?php echo $mhs1->getNama(); ?>
            </div>

            <div class="info">
                NIM :
                <?php echo $mhs1->getNIM(); ?>
            </div>

            <div class="info">
                Kelas :
                <?php echo $mhs1->getKelas(); ?>
            </div>

            <div class="info">
                Jurusan :
                <?php echo $mhs1->getJurusan(); ?>
            </div>

            <div class="info">
                Umur :
                <?php echo $mhs1->getUmur(); ?> tahun
            </div>

            <div class="info">
                <?php echo $mhs1->getNIK(); ?>
            </div>

        </div>

        <div class="card">

            <h3>Daftar Semua Mahasiswa</h3>

            <table class="table">

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Umur</th>
                </tr>

                <?php foreach($daftarMhs as $i => $mhs): ?>

                <tr>
                    <td><?php echo $i + 1; ?></td>

                    <td>
                        <?php echo $mhs->getNama(); ?>
                    </td>

                    <td>
                        <?php echo $mhs->getNIM(); ?>
                    </td>

                    <td>
                        <?php echo $mhs->getJurusan(); ?>
                    </td>

                    <td>
                        <?php echo $mhs->getKelas(); ?>
                    </td>

                    <td>
                        <?php echo $mhs->getUmur(); ?> thn
                    </td>
                </tr>

                <?php endforeach; ?>

            </table>

        </div>

    </div>

</div>

</body>
</html>