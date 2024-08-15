<html>
    <body>
        <form method="POST" action="insert.php">
            <h1>Tambah Data</h1>

            <label>Nama</label><br>
            <input type="text" name="namalengkap"/>
            <br><br>

            <label>Alamat</label><br>
            <textarea name="tempat_tinggal"></textarea>
            <br><br>

            <label>Umur</label><br>
            <input type="number" name="umur" min="1" max="120"/>
            <br><br>

            <label>Nomer HP</label><br>
            <input type="text" name="no_hp"/>
            <br><br>

            <label>Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir"/>
            <br><br>

            <label>Status</label><br>
            <select name="status_kawin">
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
            </select>
            <br><br>

            <button type="submit">Tambah</button>
            <a href="list.php">Kembali</a>
        </form>
    </body>
</html>
