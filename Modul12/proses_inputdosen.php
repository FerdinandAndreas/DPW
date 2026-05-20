<?php
require_once 'koneksi.php';

if (isset($_POST['input'])) {

    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    
    $stmt = $db->prepare(
        "INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)"
    );

    
    $stmt->bind_param("ss", $namaDosen, $noHP);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewdosen.php");
exit;
?>
