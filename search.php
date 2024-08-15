<?php

include("connection.php");

$keyword = $_GET["keyword"];

// PHP Data Objects
$query = $db->query("SELECT * FROM pegawai WHERE namalengkap LIKE '%$keyword%' OR tempat_tinggal LIKE '%$keyword%'");
$result = $query->fetchAll();

# mysqli
// $query = mysqli_query($connection, "SELECT * FROM pegawai WHERE namalengkap LIKE '%$keyword%' OR tempat_tinggal LIKE '%$keyword%'");
// $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<body>
    <h1>Search</h1>
    
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
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Status Nikah</th>
                <th>Aksi</th>
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
                    <a href="delete.php?id=<?= $pegawai["id"]?> ">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
