<?php

require_once 'koneksi.php';

if(isset($_GET['idDosen'])){

    $id = (int) $_GET['idDosen'];

    // Prepared Statement untuk SELECT by ID
    $stmt = $db->prepare(
        "SELECT * FROM t_dosen
         WHERE idDosen = ?"
    );

    // bind_param: i = integer
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows === 0){
        header("location:viewdosen.php");
        exit;
    }

    $data = $result->fetch_assoc();

    $idDosen   = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP      = $data['noHP'];

    $stmt->close();

}else{

    header("location:viewdosen.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Data Dosen</title>

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
            <a href="viewdosen.php" class="active">
                Dosen
            </a>
        </li>

        <li>
            <a href="viewmhs.php">
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
        Edit Data Dosen
    </h1>

    <div class="card">

        <div class="card-header">
            Form Edit Dosen
        </div>

        <div class="card-body">

            <form 
                id="form_dosen"
                action="proses_editdosen.php"
                method="post"
            >

                <fieldset>

                    <legend>
                        Informasi Dosen
                    </legend>

                    <div class="form-group">

                        <label for="idDosenDisabled">
                            ID Dosen
                        </label>

                        <input 
                            type="hidden"
                            name="idDosen"
                            value="<?php echo $idDosen; ?>"
                        >

                        <input 
                            type="text"
                            id="idDosenDisabled"
                            class="form-control"
                            value="<?php echo $idDosen; ?>"
                            disabled
                        >

                    </div>

                    <div class="form-group">

                        <label for="namaDosen">
                            Nama Dosen
                        </label>

                        <input 
                            type="text"
                            name="namaDosen"
                            id="namaDosen"
                            class="form-control"
                            value="<?php echo htmlspecialchars($namaDosen); ?>"
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

                    <a href="viewdosen.php" class="btn btn-warning">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>
