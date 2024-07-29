<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM alat_penolong WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_kapal = $_POST['jenis_kapal'];
    $tonase = $_POST['tonase'];
    $daerah_pelayaran = $_POST['daerah_pelayaran'];
    $kategori_sekoci = $_POST['kategori_sekoci'];

    $sql = "UPDATE alat_penolong SET jenis_kapal = '$jenis_kapal', tonase = '$tonase', daerah_pelayaran = '$daerah_pelayaran', kategori_sekoci = '$kategori_sekoci' WHERE id = $id";

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
    <title>Edit Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Edit Data</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label>Jenis Kapal</label>
                <input type="text" name="jenis_kapal" value="<?php echo $row['jenis_kapal']; ?>" required>
            </div>
            <div class="form-group">
                <label>Tonase</label>
                <input type="text" name="tonase" value="<?php echo $row['tonase']; ?>" required>
            </div>
            <div class="form-group">
                <label>Daerah Pelayaran</label>
                <input type="text" name="daerah_pelayaran" value="<?php echo $row['daerah_pelayaran']; ?>" required>
            </div>
            <div class="form-group">
                <label>Kategori Sekoci</label>
                <input type="text" name="kategori_sekoci" value="<?php echo $row['kategori_sekoci']; ?>" required>
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
