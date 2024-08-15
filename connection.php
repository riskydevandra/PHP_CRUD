<?php

try {
    // $connection = mysqli_connect("localhost", "root", "", "kepegawaian");
    $db = new PDO("mysql:host=localhost;dbname=kepegawaian", "root", "");
    // echo "berhasil";
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage();
}