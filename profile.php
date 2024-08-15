<?php 
include("connection.php");

$id = $_GET["id"];
#PDO PHP Data Objects
$query = $db ->query("SELECT * FROM pegawai WHERE id = $id");
$pegawai =$query->fetch();

# mysqli
// $query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");
// $pegawai = mysqli_fetch_assoc($query);

# menampilkan data
// echo "<pre>";
// print_r($pegawai);
// echo "</pre>";
?>
<html>
    <body>
        <h3><?= $pegawai["namalengkap"] ?></h3>

        <a href="list.php">Kembali</a>
        <br>
        <br>

        <label>alamat :</label>
        <label><?= $pegawai["tempat_tinggal"] ?></label>
        <br>
        
        <label>Umur :</label>
        <label><?= $pegawai["umur"] ?></label>
        <br>
        
        <label>nomer hp :</label>
        <label><?= $pegawai["no_hp"] ?></label>
        <br>
        
        <label>tanggal lahir :</label>
        <label><?= date("d/m/Y", strtotime($pegawai["tanggal_lahir"])) ?></label>
        <br>

        <label>status :</label>
        <label><?= $pegawai["status_kawin"] ?></label>
        <br>
        
    </body>
</html>
