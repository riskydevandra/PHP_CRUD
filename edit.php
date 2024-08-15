<?php 
include("connection.php");

$id = $_GET["id"];

# PDO
$query = $db -> query( "SELECT * FROM pegawai WHERE id = $id");
$pegawai = $query->fetch();

# mysqli
// $query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id = $id");
// $pegawai = mysqli_fetch_assoc($query);
?>

<html>
    <body>
        <form method="POST" action="update.php">
            <h1>Ubah Data</h1>

            <input type="hidden" name="id" value="<?= $pegawai["id"] ?>" />

            <label>Nama</label><br>
            <input type="text" name="namalengkap" value="<?= $pegawai["namalengkap"]?>"/>
            <br><br>

            <label>Alamat</label><br>
            <textarea name="tempat_tinggal"><?= $pegawai["tempat_tinggal"]?> </textarea>
            <br><br>

            <label>Umur</label><br>
            <input type="number" name="umur" value="<?= $pegawai["umur"] ?>" min="1" max="120" />
            <br><br>

            <label>Nomer HP</label><br>
            <input type="text" name="no_hp" value="<?= $pegawai["no_hp"]?>"/>
            <br><br>

            <label>Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir" value="<?= $pegawai["tanggal_lahir"]?>"  />
            <br><br>

            <label>Status</label><br>
            <select name="status_kawin">
                <option value="Belum Menikah" <?php if($pegawai["status_kawin"] == "Belum Menikah") echo "selected" ?> >Belum Menikah</option>
                <option value="Menikah" <?php if($pegawai["status_kawin"] == "Menikah") echo "selected" ?> >Menikah</option>
            </select>
            <br><br>

            <button type="submit">Ubah</button>
            <a href="list.php">Kembali</a>
        </form>
    </body>
</html>
