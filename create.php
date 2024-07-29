<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_kapal = $_POST['jenis_kapal'];
    $tonase = $_POST['tonase'];
    $daerah_pelayaran = $_POST['daerah_pelayaran'];
    $kategori_sekoci = $_POST['kategori_sekoci'];

    $sql = "INSERT INTO alat_penolong (jenis_kapal, tonase, daerah_pelayaran, kategori_sekoci) VALUES ('$jenis_kapal', '$tonase', '$daerah_pelayaran', '$kategori_sekoci')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Data</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label>Jenis Kapal</label>
                <input type="text" name="jenis_kapal" required>
            </div>
            <div class="form-group">
                <label>Tonase</label>
                <input type="text" name="tonase" required>
            </div>
            <div class="form-group">
                <label>Daerah Pelayaran</label>
                <input type="text" name="daerah_pelayaran" required>
            </div>
            <div class="form-group">
                <label>Kategori Sekoci</label>
                <input type="text" name="kategori_sekoci" required>
            </div>
            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
</body>
</html>
