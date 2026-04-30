<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login dengan Session & Exception</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 35px;
            width: 400px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        h2 {
            color: #9f196d;
            text-align: center;
            margin-bottom: 25px;
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
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 4px;
        }

        input:focus {
            outline: none;
            border-color: #9f196d;
        }

        .err {
            color: red;
            font-size: 11px;
            font-style: italic;
            margin-bottom: 12px;
            display: block;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 8px;
        }

        .btn-login {
            background: #9f196d;
            color: white;
        }

        .btn-logout {
            background: #ccc;
            color: #333;
        }

        .btn-login:hover { background: #7d1455; }
        .btn-logout:hover { background: #999; }

        .welcome {
            text-align: center;
        }

        .welcome h3 {
            color: #9f196d;
            font-size: 22px;
        }

        .session-info {
            background: #fff;
            border-left: 4px solid #9f196d;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            font-size: 13px;
        }

        .exception-box {
            background: #fff;
            border-left: 4px solid #9f196d;
            border-radius: 8px;
            padding: 14px;
            margin-top: 15px;
            font-size: 13px;
        }

        .exception-box h4 {
            margin-top: 0;
            color: #9f196d;
        }

        .info {
            background: #fff;
            padding: 12px;
            border-radius: 6px;
            font-size: 12px;
            margin-top: 15px;
            border-left: 4px solid #9f196d;
        }

        .nav-links {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
        }

        .nav-links a {
            color: #9f196d;
            text-decoration: none;
            margin: 0 8px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
session_start();

$akun_valid = [
    "ferdinand"=>"253307027",
    "karyawan"=>"karyawan",
    "dosen"=>"dosen"
];

$nameErr = $passErr = $errorMsg = "";

class LoginException extends Exception {}
class UsernameException extends LoginException {}
class PasswordException extends LoginException {}

if (isset($_POST["login"])) {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    try {
        if (empty($username)) throw new UsernameException("Username kosong!");
        if (strlen($username) < 3) throw new UsernameException("Min 3 karakter!");

        if (empty($password)) throw new PasswordException("Password kosong!");
        if (strlen($password) < 5) throw new PasswordException("Min 5 karakter!");

        if (!isset($akun_valid[$username])) throw new UsernameException("Username tidak ada!");
        if ($akun_valid[$username] !== $password) throw new PasswordException("Password salah!");

        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["login_time"] = date("d-m-Y H:i:s");

    } catch (UsernameException $e) {
        $nameErr = "* ".$e->getMessage();
    } catch (PasswordException $e) {
        $passErr = "* ".$e->getMessage();
    } catch (Exception $e) {
        $errorMsg = $e->getMessage();
    }
}

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: ".$_SERVER["PHP_SELF"]);
    exit;
}
?>

<div class="card">

<?php if (isset($_SESSION["logged_in"])): ?>

    <div class="welcome">
        <h2> Dashboard</h2>
        <h3> Selamat Datang, <?php echo $_SESSION["username"]; ?></h3>
    </div>

    <div class="session-info">
        Login: <?php echo $_SESSION["login_time"]; ?><br>
        Session ID: <?php echo session_id(); ?>
    </div>

    <form method="post">
        <button class="btn btn-logout" name="logout"> Logout</button>
    </form>

<?php else: ?>

    <h2>Login</h2>

    <form method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <span class="err"><?php echo $nameErr; ?></span>

        <label>Password:</label>
        <input type="password" name="password">
        <span class="err"><?php echo $passErr; ?></span>

        <button class="btn btn-login" name="login">Login</button>
    </form>

    <div class="exception-box">
        Exception aktif (validasi login)
    </div>

<?php endif; ?>

<div class="nav-links">
    <a href="cookies.php">Cookies</a> |
    <a href="json_data.php">JSON</a> |
    <a href="galery.php">Galeri</a>
</div>

</div>
</body>
</html>