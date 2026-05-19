<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {

    $kodeMK = $_GET['kodeMK'];

    $query = "SELECT * FROM t_matakuliah 
              WHERE kodeMK='$kodeMK'";

    $result = mysqli_query($link, $query);

    if (!$result) {

        die(
            "<div class='alert alert-danger'>
                Query Error :
                " . mysqli_errno($link) . "
                -
                " . mysqli_error($link) . "
            </div>"
        );
    }

    $data = mysqli_fetch_assoc($result);

    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks    = $data['sks'];
    $jam    = $data['jam'];

} else {

    header("location:viewmk.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Mata Kuliah</title>

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
            <a href="viewmhs.php">
                Mahasiswa
            </a>
        </li>

        <li>
            <a href="viewmk.php" class="active">
                Mata Kuliah
            </a>
        </li>

    </ul>

</nav>

<div class="container">

    <h1 class="page-title">
        Edit Mata Kuliah
    </h1>

    <div class="card">

        <div class="card-header">
            Form Edit Mata Kuliah
        </div>

        <div class="card-body">

            <form action="proses_editmk.php" method="post">

                <fieldset>

                    <legend>Edit Data Mata Kuliah</legend>

                    <div class="form-group">

                        <label for="kodeMKDisplay">
                            Kode Mata Kuliah
                        </label>

                        <input 
                            type="hidden"
                            name="kodeMK"
                            value="<?php echo $kodeMK; ?>"
                        >

                        <input 
                            type="text"
                            id="kodeMKDisplay"
                            class="form-control"
                            value="<?php echo $kodeMK; ?>"
                            disabled
                        >

                    </div>

                    <div class="form-group">

                        <label for="namaMK">
                            Nama Mata Kuliah
                        </label>

                        <input 
                            type="text"
                            name="namaMK"
                            id="namaMK"
                            class="form-control"
                            value="<?php echo htmlspecialchars($namaMK); ?>"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="sks">
                            Jumlah SKS
                        </label>

                        <input 
                            type="number"
                            name="sks"
                            id="sks"
                            class="form-control"
                            value="<?php echo $sks; ?>"
                            min="1"
                            max="6"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label for="jam">
                            Jam Perkuliahan
                        </label>

                        <input 
                            type="number"
                            name="jam"
                            id="jam"
                            class="form-control"
                            value="<?php echo $jam; ?>"
                            min="1"
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

                    <a href="viewmk.php" class="btn btn-warning">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>