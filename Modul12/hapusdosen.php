<?php

require_once 'koneksi.php';

if (isset($_GET['idDosen'])) {

    $id = (int) $_GET['idDosen'];

    $stmt = $db->prepare(
        "DELETE FROM t_dosen WHERE idDosen = ?"
    );

    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewdosen.php");
exit;
?>
