<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Dosen</title>

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
        Data Dosen
    </h1>

    <div class="card">

        <div class="card-header">
            Daftar Dosen
        </div>

        <div class="card-body">

            <div class="topbar">

                <a href="input.php" class="btn btn-primary">
                    + Tambah Dosen
                </a>

                <form 
                    class="search-form"
                    method="get"
                    action="viewdosen.php"
                >

                    <input 
                        type="text"
                        name="keyword"
                        placeholder="Cari nama dosen..."
                        value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>"
                    >

                    <button type="submit" class="btn btn-primary">
                        Cari
                    </button>

                    <?php if(isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>

                        <a href="viewdosen.php" class="btn btn-warning">
                            ✕ Reset
                        </a>

                    <?php endif; ?>

                </form>

            </div>

            <?php

            $keyword = isset($_GET['keyword']) 
                ? mysqli_real_escape_string($link, $_GET['keyword']) 
                : '';

            if($keyword !== ''){

                $query = "SELECT * FROM t_dosen
                          WHERE namaDosen LIKE '%$keyword%'
                          ORDER BY idDosen ASC";

            }else{

                $query = "SELECT * FROM t_dosen
                          ORDER BY idDosen ASC";
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
                            <th>ID</th>
                            <th>Nama Dosen</th>
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

                            <td colspan="5" class="empty-state">

                                Tidak ada data dosen
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
                                <?php echo $data['idDosen']; ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($data['namaDosen']); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($data['noHP']); ?>
                            </td>

                            <td>

                                <div class="action-links">

                                    <a 
                                        href="editdosen.php?idDosen=<?php echo $data['idDosen']; ?>"
                                        class="btn btn-warning btn-sm"
                                    >
                                    Edit
                                    </a>

                                    <a 
                                        href="hapusdosen.php?idDosen=<?php echo $data['idDosen']; ?>"
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