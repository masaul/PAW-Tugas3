<?php
    require "fungsi.php";
    $id = $_GET["id"];
    $result = query("SELECT * FROM tbl_027 WHERE id = $id")[0];
    if(isset($_POST["submit"])){
        // mengecek data berhasil atau tidak
        if(edit($_POST) > 0 ){
            echo "Data berhasil diubah";
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
        <input type="hidden" name="id" value="<?= $result["id"] ?>"><br>
        <label for="nis">NIS : </label>
        <input type="text" name="nis" id="nis" value="<?= $result["nis"] ?>" require> <br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $result["nama"] ?>" require> <br>
        <label for="hp">Handphone : </label>
        <input type="number" name="hp" id="hp" value="<?= $result["handphone"] ?>" require> <br>
        <label for="nis">Email : </label>
        <input type="email" name="email" id="email" value="<?= $result["email"] ?>" require> <br>
        <button type="submit" name="submit">Edit</button>
    </form>
</body>
</html>