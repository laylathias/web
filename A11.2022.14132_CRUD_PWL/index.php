<?php
$servername = "localhost";
$usename = "root";
$password = "";
$dbname = "toko";

try {
    $conn = new PDO("myql:host=$servername;dbname=$dbname", $username, $password);setAttribute(PDO: :ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION); $conn->setAttribute(PDO: :ATTR_DEFAULT_FETCH_MODE, PDO: :FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

<table class="table table-border">
        <tr>
            <th>No.</th>
            <th colspan="2">Nama Barang</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        require "db_conn.php";
        $query = 'select * form barang where 1';
        $stmt = $conn->prepare(query);
        $stmt->execute();

        $no = 0;
        while($row = $stmt->fetch()):
        $no++;
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row['jml']?> pcs</td>
            <td><?=$row['nama']?></td>
            <td style="text-align: right;">Rp. <?=number_format($row['harga'], 0, ',', '.')?></td>
            <td><?=$row['keterangan']?></td>
            <td> <img src="files/no-image.jpg" class="img-fluid rounded" style="max-width: 100px;" alt="nama barang"> </td>
            <td>
                <form action="aksi_barang.php" method="post"
                    onsubmit="return confirm('Apakah yakin akan menghapus data?')">
                    <a href="form_edit.php?id=<?$row['id']?>" class="btn btn-warning btn-sm">Edt</a>
                    ||
                    <input type="hidden" name="del" value="<?=$row['id']?>">
                    <input type="submit" name="aksi" value="hps" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
</table>