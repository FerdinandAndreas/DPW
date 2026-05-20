<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistem Informasi Akademik</title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">

    <a class="navbar-brand" href="index.php">
        <img src="./img/LogoSiakad.png" alt="Logo Kampus">

        <span> Sistem Informasi Akademik </span>

        
    </a>

    <ul class="navbar-nav">
        <li><a href="index.php" class="active">Beranda</a></li>
        <li><a href="viewdosen.php">Dosen</a></li>
        <li><a href="viewmhs.php">Mahasiswa</a></li>
        <li><a href="viewmk.php">Mata Kuliah</a></li>

    </ul>

</nav>

<div class="container">

    <h1 class="page-title">
        Selamat Datang di Sistem Informasi Akademik
    </h1>

    <div class="card">

        <div class="card-header">
            Dashboard Akademik
        </div>

        <div class="card-body">

            <p style="margin-bottom:25px; color:var(--muted);">
                Sistem ini digunakan untuk mengelola data dosen,
                mahasiswa, dan mata kuliah dengan lebih mudah
                dan terstruktur.
            </p>

            <div style="
                display:grid;
                grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
                gap:20px;
            ">

                <a href="viewdosen.php"
                   style="
                   text-decoration:none;
                   color:inherit;
                ">

                    <div class="card" style="margin:0;">
                        
                        <div class="card-body" style="text-align:center;">

                            <img 
                                src="./img/Dosen.png"
                                width="80"
                                style="margin-bottom:15px;"
                            >

                            <h3 style="margin-bottom:8px;">
                                Data Dosen
                            </h3>

                            <p style="color:var(--muted); font-size:.9rem;">
                                Kelola data tenaga pengajar kampus
                            </p>

                        </div>

                    </div>

                </a>

                <a href="viewmhs.php"
                   style="
                   text-decoration:none;
                   color:inherit;
                ">

                    <div class="card" style="margin:0;">

                        <div class="card-body" style="text-align:center;">

                            <img 
                                src="./img/Mahasiswa.png"
                                width="80"
                                style="margin-bottom:15px;"
                            >

                            <h3 style="margin-bottom:8px;">
                                Data Mahasiswa
                            </h3>

                            <p style="color:var(--muted); font-size:.9rem;">
                                Kelola data mahasiswa aktif
                            </p>

                        </div>

                    </div>

                </a>

                <a href="viewmk.php"
                   style="
                   text-decoration:none;
                   color:inherit;
                ">

                    <div class="card" style="margin:0;">

                        <div class="card-body" style="text-align:center;">

                            <img 
                                src="./img/MataKuliah.png"
                                width="80"
                                style="margin-bottom:15px;"
                            >

                            <h3 style="margin-bottom:8px;">
                                Mata Kuliah
                            </h3>

                            <p style="color:var(--muted); font-size:.9rem;">
                                Kelola daftar mata kuliah kampus
                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>