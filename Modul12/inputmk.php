<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Input Data Mata Kuliah</title>

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
        Input Data Mata Kuliah
    </h1>

    <div class="card">

        <div class="card-header">
            Form Tambah Mata Kuliah
        </div>

        <div class="card-body">

            <form action="proses_inputmk.php" method="post">

                <fieldset>

                    <legend>Input Data Mata Kuliah</legend>

                    <div class="form-group">

                        <label for="kodeMK">
                            Kode Mata Kuliah
                        </label>

                        <input 
                            type="text"
                            name="kodeMK"
                            id="kodeMK"
                            class="form-control"
                            required
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