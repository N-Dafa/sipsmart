<a href="">Reload Web</a>
<center>
    <table border="1">
        <?php
        include "database/database.php";
        $no = 1;
        $ambil = mysqli_query($koneksi, "SELECT * FROM user");
        echo "
        <td>id</td>
        <td>ID User</td>
        <td>nama</td>
        <td>password</td>
        <td>Hapus</td>
        <tr>";
        while ($tampil = mysqli_fetch_array($ambil)) {
            echo "
            <tr>
                <td>$tampil[id]</td>
                <td>$tampil[id_user]</td>
                <td>$tampil[nama]</td>
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