<?php
require_once 'koneksi.php';

if (isset($_GET['kodeMK'])) {

    $kodeMK = (int) $_GET['kodeMK'];

    
    $stmt = $db->prepare(
        "DELETE FROM t_matakuliah WHERE kodeMK = ?"
    );

    $stmt->bind_param("i", $kodeMK);

    if (!$stmt->execute()) {
        die("Gagal menghapus: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewmk.php");
exit;
?>
