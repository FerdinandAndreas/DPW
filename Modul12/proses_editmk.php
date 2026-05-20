<?php
if (isset($_POST['edit'])) {

    require_once 'koneksi.php';

    $kodeMK = (int) $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = (int) $_POST['sks'];
    $jam    = (int) $_POST['jam'];

    
    $stmt = $db->prepare(
        "UPDATE t_matakuliah
         SET namaMK = ?, sks = ?, jam = ?
         WHERE kodeMK = ?"
    );

    
    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);

    if (!$stmt->execute()) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location:viewmk.php");
exit;
?>
