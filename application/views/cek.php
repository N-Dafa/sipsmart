<a href="">Reload Web</a>
<center>
    <table border="1">
        <?php
        include "database/database.php";
        $no = 1;
        $ambil = mysqli_query($koneksi, "SELECT * FROM user");
        echo "
        <td>No</td>
        <td>nama</td>
        <td>id</td>
        <td>password</td>
        <td>Hapus</td>
        <tr>";
        while ($tampil = mysqli_fetch_array($ambil)) {
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[nama]</td>
                <td>$tampil[id]</td>
                <td>$tampil[pass]</td>
                <td><a href='?kode=$tampil[nama]'>Hapus</a></td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <?php
        if(isset($_GET['kode'])){
            mysqli_query($koneksi, "DELETE FROM user WHERE nama='$_GET[kode]'");
            echo "<meta http-equiv=refresh content=0.2;URL='cek'>";
        }
    ?>
</center>