<?php

include("connection.php");
# menggunakan PDO PHP Data Objects
$query = $db ->query("SELECT * FROM pegawai");
$result = $query->fetchall();

# mengunakan mysqli
// $query = mysqli_query($connection, "SELECT * FROM pegawai");
// $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

# melihat database kita 
// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>

<html>
<body>
    <h1>List</h1>
    
    <form method="GET" action="search.php">
        <input type="text" name="keyword" placeholder="ketikan pencarian ....">
        <button type="submit">Cari</button>
    </form>

    <a href="add.php">Tambah Data</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>nama lengkap</th>
                <th>Alamat</th>
                <th>stutus nikah</th>
                <th>Aski</th>
            </tr>
        </thead>
        <?php foreach($result as $index => $pegawai) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><a href="profile.php?id=<?=$pegawai["id"]?>"> <?= $pegawai["namalengkap"]?> </a></td>
                <td><?= $pegawai["tempat_tinggal"]?></td>
                <td><?= $pegawai["status_kawin"]?></td>
                <td>
                    <a href="edit.php?id=<?= $pegawai["id"]?> ">Edit</a>
                    <a href="delete.php?id=<?= $pegawai["id"]?> ">hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
