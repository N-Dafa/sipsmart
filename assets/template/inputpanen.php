<div class="tambah-tengah">
    <form action="<?php echo base_url() . 'hasilpanen/tambah_aksi'; ?>" method="post">
        <table class="input">
            <td class="text-light" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Hasil Panen</td>
            <tr><td></td></tr>
            <tr><td class="inputan">Tanggal
                </td></tr>
            <tr><td><input type="date" name="tanggal"></td></tr>
            <td class="inputan">Jenis Padi
                </td>
            <tr><td><input type="text" name="jenis_padi"></td></tr>
            <td class="inputan">Hasil Panen
                </td>
            <tr><td><input type="text" name="hasil_panen"></td></tr>
            <td class="inputan">Hari
                </td>
            <tr><td><input type="text" name="hari"></td></tr>
            <td class="inputan">Berat
                </td>
            <tr><td><input type="text" name="berat"></td></tr>
            <td style="border-top: 1px solid #c3c3c397;" colspan="2"></td>
            <tr>
                <td><button>Tambah</button></td>
            </tr>
            <td><p>ketuk dibagian kosong untuk batal</p></td>
        </table>
    </form>
</div>