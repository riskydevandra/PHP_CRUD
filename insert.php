<?php
include("connection.php");

$namalengkap = $_POST["namalengkap"];
$tempat_tinggal = $_POST["tempat_tinggal"];
$umur = $_POST["umur"];
$no_hp = $_POST["no_hp"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$status_kawin = $_POST["status_kawin"];

try {
    $db -> query(
        "INSERT INTO pegawai (namalengkap, tempat_tinggal, umur, no_hp, tanggal_lahir, status_kawin) 
        VALUES ('$namalengkap', '$tempat_tinggal', '$umur', '$no_hp', '$tanggal_lahir', '$status_kawin')"
    );
    header("Location:list.php");
} catch(Exception $e) {
    echo "Gagal insert ke database: " . $e->getMessage();
}
