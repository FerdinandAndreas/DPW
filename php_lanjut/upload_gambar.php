<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="tulis nim anda disini">
    <meta name="author" content="tulis nama anda disini">
    <title>Upload File</title>

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

        .upload-box {
            background: #fff;
            border: 2px dashed #9f196d;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            margin: 20px 0;
        }

        input[type="file"] {
            margin: 10px 0;
        }

        input[type="submit"] {
            background: #9f196d;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            margin-top: 10px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #7d1455;
        }

        .msg {
            padding: 12px;
            border-radius: 6px;
            margin: 15px 0;
            font-weight: bold;
        }

        .success {
            background: #f9f9f9;
            color: #9f196d;
            border-left: 4px solid #9f196d;
        }

        .error {
            background: #ffebee;
            color: #c62828;
            border-left: 4px solid #c62828;
        }

        .warning {
            background: #fff3e0;
            color: #e65100;
            border-left: 4px solid #e65100;
        }

        .preview img {
            max-width: 300px;
            margin-top: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        a {
            color: #9f196d;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>📁 Upload Gambar</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="upload-box">
            <p><label for="gambar1"><b>Pilih Gambar yang akan di upload:</b></label></p>
            <p><input type="file" name="gambar" id="gambar1"></p>
            <input type="submit" value="Upload Image" name="submit">
        </div>
    </form>

<?php
if (isset($_POST["submit"])) {

    $target_dir  = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk    = 1;
    $tipeGambar  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo '<div class="msg success">📤 File berupa gambar - ' . $check["mime"] . '.</div>';
    } else {
        echo '<div class="msg error">❌ File bukan gambar.</div>';
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo '<div class="msg warning">⚠ File sudah ada.</div>';
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        echo '<div class="msg error">❌ File terlalu besar (maks 500KB).</div>';
        $uploadOk = 0;
    }

    if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
        echo '<div class="msg error">❌ Hanya JPG, JPEG, PNG & GIF.</div>';
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo '<div class="msg error">❌ Upload gagal.</div>';
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo '<div class="msg success">📤 File berhasil diupload.</div>';
            echo '<div class="preview"><img src="' . $target_file . '" alt="Preview"></div>';
        } else {
            echo '<div class="msg error">❌ Terjadi error saat upload.</div>';
        }
    }
}
?>

    <br>
    <a href="galery.php">🖼 Lihat Galeri Gambar</a>

</body>
</html>