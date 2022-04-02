<?php
require "fungsi.php";
$id = $_GET["id"];
if(delete($id) > 0){
    echo 
    "<script> 
        alert('Data Berhasil Dihapus!');
        document.location.href = 'index.php';
    </script>";
} 
?>