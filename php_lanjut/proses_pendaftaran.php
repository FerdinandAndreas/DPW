<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
        }

        .card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #9f196d;
            padding-bottom: 10px;
        }

        .info {
            margin: 8px 0;
            font-size: 15px;
        }

        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 180px;
        }

        a {
            color: #9f196d;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Data Pendaftaran Diterima</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim    = htmlspecialchars($_POST["nim"]);
            $nama   = htmlspecialchars($_POST["nama"]);
            $email  = htmlspecialchars($_POST["email"]);
            $tempat = htmlspecialchars($_POST["tempat"]);
            $tgl    = htmlspecialchars($_POST["tgl_lahir"]);
            $alamat = htmlspecialchars($_POST["alamat"]);
            $gender = htmlspecialchars($_POST["gender"]);
        ?>

            <p>Selamat datang, <b><?php echo $nama; ?></b>!</p>

            <div class="info"><span class="label">NIM</span>: <?php echo $nim; ?></div>
            <div class="info"><span class="label">Email</span>: <?php echo $email; ?></div>
            <div class="info"><span class="label">Tempat, Tanggal Lahir</span>: <?php echo $tempat; ?>, <?php echo $tgl; ?></div>
            <div class="info"><span class="label">Alamat</span>: <?php echo $alamat; ?></div>
            <div class="info"><span class="label">Jenis Kelamin</span>: <?php echo $gender; ?></div>

        <?php
        } else {
            echo "<p class='error'>Tidak ada data yang dikirim melalui POST.</p>";
        }
        ?>

        <br>
        <a href="form_pendaftaran.html">&larr; Kembali ke Form</a>
    </div>

</body>
</html>