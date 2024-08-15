<?php
include("connection.php");

$id = $_POST["id"];
$namalengkap = $_POST["namalengkap"];
$tempat_tinggal = $_POST["tempat_tinggal"];
$umur = $_POST["umur"];
$no_hp = $_POST["no_hp"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$status_kawin = $_POST["status_kawin"];

try {
    $db->query(
        "UPDATE pegawai
        SET namalengkap = '$namalengkap',
            tempat_tinggal = '$tempat_tinggal',
            umur = '$umur',
            no_hp = '$no_hp',
            tanggal_lahir = '$tanggal_lahir',
            status_kawin = '$status_kawin'
        WHERE id = $id    
    ");
    header("Location:list.php");
} catch(Exception $e) {
    echo "Gagal update ke database: " . $e->getMessage();
}
