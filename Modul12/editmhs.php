<?php

require_once 'koneksi.php';

if(isset($_GET['npm'])){

    $npm = (int) $_GET['npm'];

    $stmt = $db->prepare(
        "SELECT * FROM t_mahasiswa
         WHERE npm = ?"
    );

    $stmt->bind_param("i", $npm);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows === 0){
        header("location:viewmhs.php");
        exit;
    }

    $data    = $result->fetch_assoc();
    $npm     = $data['npm'];
    $namaMhs = $data['namaMhs'];
    $prodi   = $data['prodi'];
    $alamat  = $data['alamat'];
    $noHP    = $data['noHP'];

    $stmt->close();

}else{

    header("location:viewmhs.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Data Mahasiswa</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar">

    <a class="navbar-brand" href="index.php">

        <img src="./img/LogoSiakad.png" alt="Logo Kampus">

        <span>Sistem Informasi Akademik</span>

    </a>

    <ul class="navbar-nav">

        <li>
            <a href="viewdosen.php">
                Dosen
            </a>
        </li>

        <li>
            <a href="viewmhs.php" class="active">
                Mahasiswa
            </a>
        </li>

        <li>
            <a href="viewmk.php">
                Mata Kuliah
            </a>
        </li>

    </ul>

</nav>

<div class="container">

    <h1 class="page-title">
        Edit Data Mahasiswa
    </h1>

    <div class="card">

        <div class="card-header">
            Form Edit Mahasiswa
        </div>

        <div class="card-body">

            <form 
                id="form_mahasiswa"
                action="proses_editmhs.php"
                method="post"
            >

                <fieldset>

                    <legend>
                        Edit Informasi Mahasiswa
                    </legend>

                    <div class="form-group">

                        <label for="npmDisabled">
                            NPM
                        </label>

                        <input 
                            type="hidden"
                            name="npm"
                            value="<?php echo $npm; ?>"
                        >

                        <input 
                            type="text"
                            id="npmDisabled"
                            class="form-control"
                            value="<?php echo $npm; ?>"
                            disabled
                        >

                    </div>

                    <div class="form-group">

                        <label for="namaMhs">
                            Nama Mahasiswa
                        </label>

                        <input 
                            type="text"
                            name="namaMhs"
                            id="namaMhs"
                            class="form-control"
                            value="<?php echo htmlspecialchars($namaMhs); ?>"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="prodi">
                            Program Studi
                        </label>

                        <input 
                            type="text"
                            name="prodi"
                            id="prodi"
                            class="form-control"
                            value="<?php echo htmlspecialchars($prodi); ?>"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="alamat">
                            Alamat
                        </label>

                        <input 
                            type="text"
                            name="alamat"
                            id="alamat"
                            class="form-control"
                            value="<?php echo htmlspecialchars($alamat); ?>"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="noHP">
                            Nomor HP
                        </label>

                        <input 
                            type="text"
                            name="noHP"
                            id="noHP"
                            class="form-control"
                            value="<?php echo htmlspecialchars($noHP); ?>"
                            required
                        >

                    </div>

                </fieldset>

                <div style="display:flex; gap:12px;">

                    <input 
                        type="submit"
                        name="edit"
                        value="Update Data"
                        class="btn btn-success"
                    >

                    <a href="viewmhs.php" class="btn btn-warning">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>
