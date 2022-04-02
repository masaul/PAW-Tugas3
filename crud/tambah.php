<?php
    require "fungsi.php";
    if(isset($_POST["submit"])){
        // mengecek data berhasil atau tidak
        if(tambah($_POST) > 0 ){
            echo "Data berhasil ditambahkan";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nis">NIS : </label>
        <input type="text" id="nis" name="nis" require> <br>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" require> <br>
        <label for="handphone">Handphone : </label>
        <input type="text" id="handphone" name="handphone" require> <br>
        <label for="email">Email : </label>
        <input type="text" id="email" name="email" require> <br>
        <button type="submit" name="submit">tambah</button>
    </form>
</body>
</html>