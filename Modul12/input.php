<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Input Data Dosen</title>

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
        Tambah Data Dosen
    </h1>

    <div class="card">

        <div class="card-header">
            Form Input Dosen
        </div>

        <div class="card-body">

            <form 
                action="proses_inputdosen.php" 
                method="post"
            >

                <fieldset>

                    <legend>
                        Informasi Dosen
                    </legend>

                    <div class="form-group">

                        <label for="namaDosen">
                            Nama Dosen
                        </label>

                        <input 
                            type="text"
                            name="namaDosen"
                            id="namaDosen"
                            class="form-control"
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
                            required
                        >

                    </div>

                </fieldset>

                <div style="display:flex; gap:12px;">

                    <input 
                        type="submit"
                        name="input"
                        value="Simpan Data"
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