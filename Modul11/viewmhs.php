<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Mahasiswa</title>

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
         Data Mahasiswa
    </h1>

    <div class="card">

        <div class="card-header">
            Daftar Mahasiswa
        </div>

        <div class="card-body">

            <div class="topbar">

                <a href="inputmhs.php" class="btn btn-primary">
                    + Tambah Mahasiswa
                </a>

                <form 
                    class="search-form"
                    method="get"
                    action="viewmhs.php"
                >

                    <input 
                        type="text"
                        name="keyword"
                        placeholder="Cari nama mahasiswa..."
                        value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>"
                    >

                    <button type="submit" class="btn btn-primary">
                        Cari
                    </button>

                    <?php if(isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>

                        <a href="viewmhs.php" class="btn btn-warning">
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

                $query = "SELECT * FROM t_mahasiswa
                          WHERE namaMhs LIKE '%$keyword%'
                          ORDER BY npm ASC";

            }else{

                $query = "SELECT * FROM t_mahasiswa
                          ORDER BY npm ASC";
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
                            <th>NPM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Program Studi</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $no = 1;

                    if($total == 0):

                    ?>

                        <tr>

                            <td colspan="7" class="empty-state">

                                Tidak ada data mahasiswa
                                <?php echo $keyword ? ' yang cocok' : ''; ?>.

                            </td>

                        </tr>

                    <?php else: ?>

                        <?php while($data = mysqli_fetch_assoc($result)): ?>

                        <tr>

                            <td>
                                <?php echo $no++; ?>
                            </td>

                            <td>
                                <?php echo $data['npm']; ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($data['namaMhs']); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($data['prodi']); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($data['alamat']); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($data['noHP']); ?>
                            </td>

                            <td>

                                <div class="action-links">

                                    <a 
                                        href="editmhs.php?npm=<?php echo $data['npm']; ?>"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>

                                    <a 
                                        href="hapusmhs.php?npm=<?php echo $data['npm']; ?>"
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