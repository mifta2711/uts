<h2>
    Perubahan Data
</h2>
<table>
    <form action="<?=base_url() . 'index.php/uts_barang/update'?>" method="POST">
        <tr>
            <td>
                Kode Barang
            </td>
            <td>
                :
            </td>
            <td>
                <input name="kode_barang" type="hidden" value="<?=$r['kode_barang']?>">
                    <?=$r['kode_barang']?>
                </input>
            </td>
        </tr>
        <tr>
            <td>
                Nama Barang
            </td>
            <td>
                :
            </td>
            <td>
                <input name="nama_barang" type="text" value="<?=$r['nama_barang']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Harga
            </td>
            <td>
                :
            </td>
            <td>
                <input name="harga" type="text" value="<?=$r['harga']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Barang
            </td>
            <td>
                :
            </td>
            <td>
                <input name="jenis_barang" type="text" value="<?=$r['jenis_barang']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Keterangan
            </td>
            <td>
                :
            </td>
            <td>
                <input name="keterangan" type="text" value="<?=$r['keterangan']?>"/>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
                <input name="submit" type="submit" value="Simpan"/>
            </td>
        </tr>
    </form>
</table>