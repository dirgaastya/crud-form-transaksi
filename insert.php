<?php
include 'conn.php';
$nameArr = json_decode($_POST["name"]);
$itemArr = json_decode($_POST["item"]);
$conditionArr = json_decode($_POST["condition"]);

for ($i = 0; $i < count($nameArr); $i++) {

    if(($nameArr[$i] != "")){   
    $sql="INSERT INTO transaksi_tables (nama, item, kondisi) VALUES ('$nameArr[$i]','$itemArr[$i]','$conditionArr[$i]')";
    $conn->query($sql);
    }
}
Print  "Data Berhasil Ditambahkan";
$conn->close();
?>