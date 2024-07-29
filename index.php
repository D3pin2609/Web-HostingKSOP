<?php
include 'db.php';

$sql = "SELECT * FROM alat_penolong";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alat Penolong</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="title">CRUD Alat Penolong</h1>
        <a href="create.php" class="btn">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis Kapal</th>
                    <th>Tonase</th>
                    <th>Daerah Pelayaran</th>
                    <th>Kategori Sekoci</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['jenis_kapal']; ?></td>
                    <td><?php echo $row['tonase']; ?></td>
                    <td><?php echo $row['daerah_pelayaran']; ?></td>
                    <td><?php echo $row['kategori_sekoci']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php $conn->close(); ?>
