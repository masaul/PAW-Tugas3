<?php
$koneksiDB = mysqli_connect("localhost", "root", "", "faqih");
function query($syntaxQuery){
    global $koneksiDB;
    $query = mysqli_query($koneksiDB, $syntaxQuery);
    $dataDB = [];
    while($data = mysqli_fetch_assoc($query)){
        $dataDB[] = $data;
    }
    return $dataDB;
}
function edit($syntaxQuery){
    global $koneksiDB;
    $id = $syntaxQuery["id"];
    $nis = $syntaxQuery["nis"];
    $nama = $syntaxQuery["nama"];
    $handphone = $syntaxQuery["hp"];
    $email = $syntaxQuery["email"];
    $query = "UPDATE tbl_027 SET nis='$nis', nama='$nama', handphone='$handphone', email='$email' WHERE id = $id";
    mysqli_query($koneksiDB, $query);

    return mysqli_affected_rows($koneksiDB);

}
function delete($id){
    global $koneksiDB;
    $query = "DELETE FROM tbl_027 WHERE id = $id";
    mysqli_query($koneksiDB, $query);

    return mysqli_affected_rows($koneksiDB);
}
function tambah($syntaxQuery){
    global $koneksiDB;
    $nis = $syntaxQuery['nis'];
    $nama = $syntaxQuery['nama'];
    $handphone = $syntaxQuery['handphone'];
    $email = $syntaxQuery['email'];

    $query = "INSERT INTO tbl_027 VALUE ('', '$nis', '$nama', '$handphone', '$email')"; 
    mysqli_query($koneksiDB, $query);
    return mysqli_affected_rows($koneksiDB);

}

?>