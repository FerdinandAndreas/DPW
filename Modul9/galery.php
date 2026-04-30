<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #9f196d;
            display: inline-block;
            padding-bottom: 5px;
        }

        .header {
            text-align: center;
        }

        .btn-upload {
            display: inline-block;
            margin: 15px auto 20px;
            background: #9f196d;
            color: white;
            padding: 10px 22px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-upload:hover {
            background: #7d1455;
        }

        .count {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            max-width: 1100px;
            margin: 0 auto;
        }

        .galeri-item {
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
            overflow: hidden;
            width: 200px;
            transition: 0.3s;
        }

        .galeri-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        .galeri-item img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }

        .galeri-item p {
            font-size: 12px;
            color: #666;
            padding: 8px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
        }

        .empty-msg {
            text-align: center;
            color: #777;
            font-size: 16px;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>🖼 Galeri Gambar</h2><br>
    <a class="btn-upload" href="upload_gambar.php">+ Upload Gambar Baru</a>
</div>

<?php
$fileList = glob('gambar/*');

$jumlah = 0;
foreach ($fileList as $filename) {
    if (is_file($filename)) {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $jumlah++;
        }
    }
}

echo '<p class="count">Total ' . $jumlah . ' gambar tersedia</p>';

if ($jumlah === 0) {
    echo '<div class="empty-msg">📂 Belum ada gambar. Silakan upload gambar terlebih dahulu.</div>';
} else {
    echo '<div class="galeri">';
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $namaFile = htmlspecialchars(basename($filename));
                echo '<div class="galeri-item">';
                echo '<img src="' . htmlspecialchars($filename) . '" alt="' . $namaFile . '">';
                echo '<p>' . $namaFile . '</p>';
                echo '</div>';
            }
        }
    }
    echo '</div>';
}
?>

</body>
</html>