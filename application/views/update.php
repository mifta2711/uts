<h2>Perubahan Data</h2>

<table>
    <form action="<?=base_url().'index.php/uts_barang/update'?>" method="POST">

        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td><input type="hidden" name="kode_barang" value="<?=$r['kode_barang']?>"><?=$r['kode_barang']?></td>
        </tr>

        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama_barang" value="<?=$r['nama_barang']?>"></td>
        </tr>

        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="harga" value="<?=$r['harga']?>"></td>
        </tr>

        <tr>
            <td>Jenis Barang</td>
            <td>:</td>
            <td><input type="text" name="jenis_barang" value="<?=$r['jenis_barang']?>"></td>
        </tr>

        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><input type="text" name="keterangan" value="<?=$r['keterangan']?>"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Simpan"></td>
        </tr>

    </form>
</table>