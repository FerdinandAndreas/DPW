<?php
require_once 'koneksi.php';

if (isset($_POST['input'])) {

    $npm     = (int) $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    
    $stmt = $db->prepare(
        "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP)
         VALUES (?, ?, ?, ?, ?)"
    );

    
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    if (!$stmt->execute()) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewmhs.php");
exit;
?>
