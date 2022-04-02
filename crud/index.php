<?php
    require 'fungsi.php';
    $result = query("SELECT * FROM tbl_027");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <p>
        <a href="tambah.php">tambah Data Barang</a>
    </p>
    <table border="1" >
        <tr>
            <td>No</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Handphone</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php $number = 1; ?>
        <?php foreach($result as $dataSiswa): ?>
            <tr>
                <td><?= $number ?></td>
                <td><?= $dataSiswa['nis']; ?></td>
                <td><?= $dataSiswa['nama']; ?></td>
                <td><?= $dataSiswa['handphone']; ?></td>
                <td><?= $dataSiswa['email']; ?></td>
                <td> <a href="edit.php?id=<?= $dataSiswa["id"]; ?>">Edit</a> | <a href="delete.php?id=<?= $dataSiswa["id"]; ?>">Delete</a></td>
            </tr>
        <?php $number++ ?>
        <?php endforeach; ?>   
    </table>
</body>
</html>