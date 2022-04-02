<?php
require "myCode/fungsi.php";
$id = $_GET["id"];
if(delete($id) > 0){
    header("Location: index.php");
} 
?>