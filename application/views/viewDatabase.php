<html>

<body>
    <h2>Daftar Barang</h2>
    <div>
        <table border="1">

            <tr>

                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jenis Barang</th>
                <th>Keterangan</th>

            </tr>
            <?php
$no=1;
foreach($data as $r) {
?>

            <tr>

                <td><?php echo $no ?></td>
                <td><?php echo $r['kode_barang'] ?></td>
                <td><?php echo $r['nama_barang'] ?></td>
                <td><?php echo $r['harga'] ?></td>
                <td><?php echo $r['jenis_barang'] ?></td>
                <td><?php echo $r['keterangan'] ?></td>
                <td><a href="<?=base_url().'index.php/uts_barang/update/'.$r['kode_barang']?>">Edit</a></td>
                <td><a href="<?=base_url().'index.php/uts_barang/delete/'.$r['kode_barang']?>">Hapus</a></td>
                <td><a href="<?=base_url().'index.php/uts_barang/insert/'.$r['kode_barang']?>">Tambah</a></td>

            </tr>
            <?php
$no++;
}
?>
        </table>
    </div>
</body>

</html>