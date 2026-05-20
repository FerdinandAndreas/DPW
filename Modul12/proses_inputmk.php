<?php
require_once 'koneksi.php';

if (isset($_POST['input'])) {

    $kodeMK = (int) $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = (int) $_POST['sks'];
    $jam    = (int) $_POST['jam'];

    
    $stmt = $db->prepare(
        "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam)
         VALUES (?, ?, ?, ?)"
    );

    
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);

    if (!$stmt->execute()) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewmk.php");
exit;
?>
