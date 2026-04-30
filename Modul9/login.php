<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            width: 380px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 4px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #9f196d;
            box-shadow: 0 0 0 2px rgba(159,25,109,0.2);
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #9f196d;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #7d1455;
        }

        .error {
            color: red;
            font-size: 11px;
            font-style: italic;
            margin-top: 3px;
            display: block;
        }

        .field-group { margin-bottom: 18px; }

        .success-msg {
            background: #f9f9f9;
            color: #9f196d;
            padding: 12px;
            border-radius: 6px;
            text-align: center;
            margin-bottom: 15px;
            border-left: 4px solid #9f196d;
        }

        .info-box {
            background: #f9f9f9;
            border-left: 4px solid #9f196d;
            border-radius: 6px;
            padding: 10px 12px;
            margin-top: 15px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Halaman Login</h2>

<?php
function bersihkan_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$name = "";
$email = "";
$nameErr = $emailErr = "";
$loginOk = false;

$valid_username = "ferdinand";
$valid_password = "253307027";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["u"])) {
        $nameErr = "* masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
        if (strlen($name) < 3) {
            $nameErr = "* username minimal 3 karakter";
        }
    }

    if (empty($_POST["p"])) {
        $emailErr = "* masukkan password";
    } else {
        $email = bersihkan_input($_POST["p"]);
        if (strlen($email) < 5) {
            $emailErr = "* password minimal 5 karakter";
        }
    }

    if ($nameErr === "" && $emailErr === "") {
        if ($name === $valid_username && $_POST["p"] === $valid_password) {
            $loginOk = true;
        } else {
            $nameErr = "* username atau password salah";
        }
    }
}
?>

<?php if ($loginOk): ?>
    <div class="success-msg">
        Login berhasil! Selamat datang, <strong><?php echo $name; ?></strong>!
    </div>
<?php else: ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="field-group">
            <label for="u">Username:</label>
            <input type="text" id="u" name="u" value="<?php echo htmlspecialchars($name); ?>" placeholder="Masukkan username">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>

        <div class="field-group">
            <label for="p">Password:</label>
            <input type="password" id="p" name="p" placeholder="Masukkan password">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <input type="submit" value="Login">
    </form>

    <div class="info-box">
        <strong>Akun saya:</strong> ferdinand / 253307027
    </div>

<?php endif; ?>

</div>
</body>
</html>