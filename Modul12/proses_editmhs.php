<?php
if (isset($_POST['edit'])) {

    require_once 'koneksi.php';

    $npm     = (int) $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    
    $stmt = $db->prepare(
        "UPDATE t_mahasiswa
         SET namaMhs = ?, prodi = ?, alamat = ?, noHP = ?
         WHERE npm = ?"
    );

    
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);

    if (!$stmt->execute()) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewmhs.php");
exit;
?>
