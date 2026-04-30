<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cookies - Data Identitas</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #9f196d;
            padding-bottom: 8px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
            margin: 12px 0 4px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn {
            padding: 10px 22px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin: 5px 3px;
        }

        .btn-save {
            background: #9f196d;
            color: white;
        }

        .btn-delete {
            background: #ccc;
            color: #333;
        }

        .btn-save:hover {
            background: #7d1455;
        }

        .btn-delete:hover {
            background: #999;
        }

        .cookie-display {
            background: #fff;
            border-left: 4px solid #9f196d;
            border-radius: 8px;
            padding: 18px;
            margin-top: 20px;
        }

        .cookie-display h3 {
            margin-top: 0;
            color: #9f196d;
        }

        .cookie-item {
            margin: 8px 0;
            font-size: 15px;
        }

        .cookie-item span {
            font-weight: bold;
            color: #333;
        }

        .no-cookie {
            color: #777;
            font-style: italic;
        }

        .info {
            background: #fff;
            padding: 12px;
            border-radius: 6px;
            font-size: 12px;
            margin-top: 15px;
            border-left: 4px solid #9f196d;
        }

        .alert {
            background: #f9f9f9;
            color: #9f196d;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 15px;
            border-left: 4px solid #9f196d;
        }

        .alert.error {
            background: #ffebee;
            color: #c62828;
            border-left: 4px solid #c62828;
        }
    </style>
</head>
<body>

<h2>Cookies - Simpan Data Identitas</h2>

<?php
$alert = "";

if (isset($_POST["simpan"])) {
    $nama  = htmlspecialchars(trim($_POST["nama"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $kota  = htmlspecialchars(trim($_POST["kota"]));
    $nim   = htmlspecialchars(trim($_POST["nim"]));

    $expire = time() + (30 * 24 * 60 * 60);

    setcookie("nama",  $nama,  $expire, "/");
    setcookie("email", $email, $expire, "/");
    setcookie("kota",  $kota,  $expire, "/");
    setcookie("nim",   $nim,   $expire, "/");

    $alert = '<div class="alert"> Data berhasil disimpan ke Cookies!</div>';

    $_COOKIE["nama"]  = $nama;
    $_COOKIE["email"] = $email;
    $_COOKIE["kota"]  = $kota;
    $_COOKIE["nim"]   = $nim;
}

if (isset($_POST["hapus"])) {
    setcookie("nama", "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    setcookie("kota", "", time() - 3600, "/");
    setcookie("nim", "", time() - 3600, "/");

    unset($_COOKIE["nama"], $_COOKIE["email"], $_COOKIE["kota"], $_COOKIE["nim"]);

    $alert = '<div class="alert error">Cookies berhasil dihapus!</div>';
}

echo $alert;

$c_nama  = $_COOKIE["nama"]  ?? "";
$c_email = $_COOKIE["email"] ?? "";
$c_kota  = $_COOKIE["kota"]  ?? "";
$c_nim   = $_COOKIE["nim"]   ?? "";
?>

<form method="post">
    <label>Nama Lengkap:</label>
    <input type="text" name="nama" value="<?php echo $c_nama; ?>">

    <label>E-mail:</label>
    <input type="email" name="email" value="<?php echo $c_email; ?>">

    <label>Kota Asal:</label>
    <input type="text" name="kota" value="<?php echo $c_kota; ?>">

    <label>NIM:</label>
    <input type="text" name="nim" value="<?php echo $c_nim; ?>">

    <br><br>
    <button class="btn btn-save" name="simpan">Simpan</button>
    <button class="btn btn-delete" name="hapus">Hapus</button>
</form>

<div class="cookie-display">
    <h3>Data Cookies:</h3>

    <?php if ($c_nama || $c_email || $c_kota || $c_nim): ?>
        <div class="cookie-item">Nama  : <span><?php echo $c_nama ?: '-'; ?></span></div>
        <div class="cookie-item">Email : <span><?php echo $c_email ?: '-'; ?></span></div>
        <div class="cookie-item">Kota  : <span><?php echo $c_kota ?: '-'; ?></span></div>
        <div class="cookie-item">NIM   : <span><?php echo $c_nim ?: '-'; ?></span></div>
    <?php else: ?>
        <p class="no-cookie">Belum ada data cookies.</p>
    <?php endif; ?>
</div>

<div class="info">
    Cookies = data yang disimpan di browser pengguna
</div>

</body>
</html>