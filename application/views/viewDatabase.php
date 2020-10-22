<html>

<body>
<h2>Daftar Barang</h2>
<div>
	<a href="<?=base_url().'index.php/uts_barang/insert/'; ?>">Tambah</a>
<table border="1">

<tr>
<th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Harga</th>
<th>Jenis Barang</th>
<th>Keterangan</th>
<th>Action</th>

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
<td><a href="<?=base_url().'index.php/uts_barang/update/'.$r['kode_barang']?>">Edit</a>
	<a href="<?=base_url().'index.php/uts_barang/delete/'.$r['kode_barang']?>">Hapus</a>
</td>

            </tr>
            <?php
$no++;
}
?>
        </table>
    </div>
</body>

</html>