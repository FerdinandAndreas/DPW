<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Mata Kuliah</title>

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
            <a href="index.php">
                Beranda
            </a>
        </li>

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
        Data Mata Kuliah
    </h1>

    <div class="card">

        <div class="card-header">
            Daftar Mata Kuliah
        </div>

        <div class="card-body">

            <div class="topbar">

                <a href="inputmk.php" class="btn btn-primary">
                    + Tambah Mata Kuliah
                </a>

                <form class="search-form" method="get" action="viewmk.php">

                    <input 
                        type="text"
                        name="keyword"
                        placeholder="Cari nama mata kuliah..."
                        value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>"
                    >

                    <button type="submit" class="btn btn-primary">
                        Cari
                    </button>

                    <?php if(isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>

                        <a href="viewmk.php" class="btn btn-warning">
                        Reset
                        </a>

                    <?php endif; ?>

                </form>

            </div>

            <?php

            $keyword = isset($_GET['keyword']) 
                ? mysqli_real_escape_string($link, $_GET['keyword']) 
                : '';

            if($keyword !== ''){

                $query = "SELECT * FROM t_matakuliah 
                          WHERE namaMK LIKE '%$keyword%' 
                          ORDER BY kodeMK ASC";

            } else {

                $query = "SELECT * FROM t_matakuliah 
                          ORDER BY kodeMK ASC";
            }

            $result = mysqli_query($link, $query);

            if(!$result){

                die(
                    "<div class='alert alert-danger'>
                        Query Error :
                        " . mysqli_errno($link) . "
                        -
                        " . mysqli_error($link) . "
                    </div>"
                );
            }

            $total = mysqli_num_rows($result);

            ?>

            <?php if($keyword !== ''): ?>

                <div class="alert alert-success">

                    Ditemukan 
                    <strong><?php echo $total; ?></strong> 
                    hasil untuk 
                    "<strong><?php echo htmlspecialchars($keyword); ?></strong>"

                </div>

            <?php endif; ?>

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Kode MK</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Jam</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $no = 1;

                    if($total == 0):

                    ?>

                        <tr>

                            <td colspan="6" class="empty-state">

                                Tidak ada data mata kuliah
                                <?php echo $keyword ? ' yang cocok' : ''; ?>.

                            </td>

                        </tr>

                    <?php else: ?>

                        <?php while($data = mysqli_fetch_assoc($result)): ?>

                        <tr>

                            <td><?php echo $no++; ?></td>

                            <td><?php echo $data['kodeMK']; ?></td>

                            <td><?php echo htmlspecialchars($data['namaMK']); ?></td>

                            <td><?php echo $data['sks']; ?> SKS</td>

                            <td><?php echo $data['jam']; ?> Jam</td>

                            <td>

                                <div class="action-links">

                                    <a 
                                        href="editmk.php?kodeMK=<?php echo $data['kodeMK']; ?>" 
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>

                                    <a 
                                        href="hapusmk.php?kodeMK=<?php echo $data['kodeMK']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    >
                                        Hapus
                                    </a>

                                </div>

                            </td>

                        </tr>

                        <?php endwhile; ?>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>