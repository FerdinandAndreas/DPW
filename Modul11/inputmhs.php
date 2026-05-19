<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Input Data Mahasiswa</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar">

    <a href="index.php" class="navbar-brand">

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
        Input Data Mahasiswa
    </h1>

    <div class="card">

        <div class="card-header">
            Form Tambah Mahasiswa
        </div>

        <div class="card-body">

            <form 
                action="proses_inputmhs.php" 
                method="post"
            >

                <fieldset>

                    <legend>
                        Informasi Mahasiswa
                    </legend>

                    <div class="form-group">

                        <label for="npm">
                            NPM
                        </label>

                        <input 
                            type="number"
                            name="npm"
                            id="npm"
                            class="form-control"
                            required
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