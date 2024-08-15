<?php
include("connection.php");

$id = $_GET["id"];

try {
    $db->query("DELETE FROM pegawai WHERE id = $id");
    header("Location:list.php");
} catch (Exception $e) {
    echo "Gagal hapus data" . $e -> getMessage();
}