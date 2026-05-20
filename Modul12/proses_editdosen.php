<?php

if (isset($_POST['edit'])) {

    require_once 'koneksi.php';

    $id        = (int) $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    
    $stmt = $db->prepare(
        "UPDATE t_dosen
         SET namaDosen = ?, noHP = ?
         WHERE idDosen = ?"
    );

    
    $stmt->bind_param("ssi", $namaDosen, $noHP, $id);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewdosen.php");
exit;
?>
