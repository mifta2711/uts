<h2>Tambah data</h2>

<table>
<form action="<?=base_url().'index.php/uts_barang/insert'?>" method="POST">

<tr>
<td>Kode Barang</td>
<td>:</td>
<td><input type="text" name="kode_barang"></td>
</tr>

<tr>
<td>Nama Barang</td>
<td>:</td>
<td><input type="text" name="nama_barang"></td>
</tr>

<tr>
<td>Harga</td>
<td>:</td>
<td><input type="text" name="harga"></td>
</tr>

<tr>
<td>Jenis Barang</td>
<td>:</td>
<td><input type="text" name="jenis_barang"></td>
</tr>

<tr>
<td>Keterangan</td>
<td>:</td>
<td><input type="text" name="keterangan"></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" name="submit" value="Simpan"></td>
</tr>

</form>
</table>