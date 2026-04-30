<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #9f196d;
            padding-bottom: 8px;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background: #9f196d;
            color: white;
            padding: 9px 22px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 14px;
            margin-right: 8px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #7d1455;
        }

        input[type="reset"] {
            background: #ccc;
            color: #333;
            padding: 9px 22px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 14px;
        }

        .hasil {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-left: 4px solid #9f196d;
            border-radius: 6px;
            padding: 15px;
            margin-top: 20px;
        }

        .hasil h3 {
            margin-top: 0;
            color: #9f196d;
        }

        .note {
            margin-top: 20px;
            padding: 12px;
            background: #f9f9f9;
            border-left: 4px solid #9f196d;
            border-radius: 4px;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <h2>Form Komentar</h2>

<?php
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = bersihkan_input($_POST["name"]);
    $email   = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);

    echo '<div class="hasil">';
    echo '<h3>Komentar Diterima!</h3>';
    echo "Nama : " . $name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Komentar : " . $comment . "<br>";
    echo "<hr>";
    echo "<small>
        <strong>Keamanan:</strong> Input telah difilter dengan htmlspecialchars().
    </small>";
    echo '</div>';
}
?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" placeholder="Masukkan nama Anda">

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email Anda">

        <label for="comment">Komentar:</label>
        <textarea name="comment" id="comment" rows="5" placeholder="Tulis komentar Anda..."></textarea>

        <input type="submit" value="Simpan">
        <input type="reset" value="Bersihkan">
    </form>

    <div class="note">
        <strong>⚠ Percobaan XSS:</strong> Coba masukkan kode seperti 
        <code>&lt;img src="x" onerror=alert('hacked');&gt;</code>. 
        Dengan <code>htmlspecialchars()</code>, kode hanya tampil dalam bentuk teks.
    </div>

</body>
</html>