<?php
require_once 'koneksi.php';

if (isset($_GET['npm'])) {

    $npm = (int) $_GET['npm'];

    $stmt = $db->prepare(
        "DELETE FROM t_mahasiswa WHERE npm = ?"
    );

    $stmt->bind_param("i", $npm);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewmhs.php");
exit;
?>
