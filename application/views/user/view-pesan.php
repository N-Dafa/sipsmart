<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/sipsmart");}

$nama = $_SESSION['id'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$nama'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Pesan</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/detail-pesan.css">
</head>
<body>
    <div class="wall"></div>
    <div class="head">
        <div class="header">
            <div class="bar">
                <a class="a" href="<?php echo base_url(). 'hasilpadi_user/batal'; ?>"><i class="fa-solid fa-angle-left"></i></a>
            </div> 
        </div>
    </div>
    <div style="width: 100%; display: grid; align-items: center; justify-content: center;">
        <?php
        include "database/database.php";
        foreach ($padi as $row) { ?>
        <div class="table">
            <div class="isi">
                <img src="<?php echo base_url(); ?>assets/upload/<?php echo $row->foto; ?>">
                <div class="deskripsi"><?php echo $row->deskripsi; ?></div>
                <div class="tanggal"><?php echo $row->tanggal; ?></div>
                <div class="alamat"><?php echo $row->alamat; ?></div>
                <div class="harga">Rp <?php echo number_format($row->harga_beli,0,',','.'); ?></div>
                <h4>Jumlah</h4>
                <form action="#body_checkout" method="post">
                <div class="jumlah"><input type="number" name="jumlah" value="1" size="5" style="font-size: 20px; padding: 5px;"></div>
            </div>
        </div>
        <?php } ?>
        <div class="order" style="user-select: none;">
                <button style="cursor: pointer;" class="pemanis" name="beli-skrg"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>
                    Beli Langsung</button>
            </form>
        </div>
        <section id="body_checkout">
            <nav class="checkout pemanis">
                <?php
                if (isset($_POST['beli-skrg'])) { ?>
                <h2>Barang yang dibeli</h2>
                <div class="barang-yg-dibeli">
                    <img class="pemanis" src="<?php echo base_url(); ?>assets/upload/<?php echo $row->foto; ?>">
                    <h4><?php echo $row->deskripsi; ?></h4>
                    <h4 style="font-weight: 700;">Rp<?php echo number_format($row->harga_beli,0,',','.'); ?></h4>
                </div>
                <hr style="margin-top: 80px;">
                <h3>Pengiriman dan Pembayaran</h3>
                <div class="rmh">Rumah - <?php echo "$data[nama]"; ?>
                <form action="<?php echo base_url().'pesan/tambah_aksi'; ?>" method="post">
                    <input onclick="autoNomor()" type="text" id="nomorhp" name="nomorhp" placeholder="Masuk Nomor HP" required><i class="fa-solid fa-angle-left"></i>
                    <br>Alamat<input onclick="autoFillAddress()" id="address" name="address" placeholder="Masukkan Alamat Rumah" required>
                </div>
                <hr>
                <input type="checkbox" id="centang">
                <input type="radio" id="mp1" name="transaksi" value="BCA Virtual Account" style="display: none;"required>
                <input type="radio" id="mp2" name="transaksi" value="BNI Virtual Account" style="display: none;"required>
                <input type="radio" id="mp3" name="transaksi" value="BRI Virtual Account" style="display: none;"required>
                <input type="radio" id="mp4" name="transaksi" value="MANDIRI Virtual Account" style="display: none;"required>
                <input type="radio" id="mp5" name="transaksi" value="QRIS" style="display: none;"required>
                <label for="centang">
                    <div id="close"></div>
                </label>
                <div class="metode_p">
                    <div class="isi_mp">
                        <ul>
                            <div class="batal"><h3>Pilih Pembayaran</h3><label for="centang"><i class="fa-solid fa-xmark"></i></label></div>
                            <h4><i class="fa-solid fa-circle-exclamation"></i><p>Metode bayar untuk Beli Langsung masih terbatas. Pilihan lain tersedia lewat keranjang.</p></h4>
                            <h3>Virtual Account</h3>
                            <li><img src="<?php echo base_url(); ?>assets/img/bca.png"><label for="mp1"><div>BCA Virtual Account</div></label><i class="fa-solid fa-angle-right"></i></li>
                            <hr>
                            <li><img src="<?php echo base_url(); ?>assets/img/bni.png"><label for="mp2"><div>BNI Virtual Account</div></label><i class="fa-solid fa-angle-right"></i></li>
                            <hr>
                            <li><img src="<?php echo base_url(); ?>assets/img/briva.png"><label for="mp3"><div>BRI Virtual Account</div></label><i class="fa-solid fa-angle-right"></i></li>
                            <hr>
                            <li><img src="<?php echo base_url(); ?>assets/img/mandiri.png"><label for="mp4"><div>MANDIRI Virtual Account</div></label><i class="fa-solid fa-angle-right"></i></li>
                            <hr>
                            <h3>QR Code</h3>
                            <li class="qris"><img src="<?php echo base_url(); ?>assets/img/qris.jpg"><label for="mp5"><div>QRIS</div></label><i class="fa-solid fa-angle-right"></i></li>
                        </ul>
                    </div>
                </div>
                <?php
                    $metode_bay = 'BCA Virtual Account';
                    $img='bca.png';
                    if  (isset($_POST['pilih_metode'])){
                        $metode = $_POST['pilih_metode'];
                        if ($metode == 'BCA Virtual Account'){
                        $metode_bay='BCA Virtual Account';
                        $img='bca.png';
                        }
                        elseif ($metode=='BNI Virtual Account'){
                            $metode_bay='BNI Virtual Account';
                            $img='bni.png';
                        }
                        elseif ($metode=='BRI Virtual Account'){
                            $metode_bay='BRI Virtual Account';
                            $img='briva.png';
                        }
                        elseif ($metode=='MANDIRI Virtual Account'){
                            $metode_bay='Mandiri Virtual Account';
                            $img='mandiri.png';
                        }
                        elseif ($metode=='QRIS'){
                            $metode_bay='QRIS';
                            $img='qrcode.png';
                        }
                    }
                ?>
                <div class="border_metbay">
                    <label for="centang">
                        <div class="img_method">
                            <img class="mp1" src="<?php echo base_url(); ?>assets/img/bca.png" alt="BCA">
                            <img class="mp2" src="<?php echo base_url(); ?>assets/img/bni.png" alt="BNI">
                            <img class="mp3" src="<?php echo base_url(); ?>assets/img/briva.png" alt="BRI">
                            <img class="mp4" src="<?php echo base_url(); ?>assets/img/mandiri.png" alt="MANDIRI">
                            <img class="mp5" src="<?php echo base_url(); ?>assets/img/qris.jpg" alt="QRIS">
                            <p>Metode Pembayaran</p>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </label>
                </div>
            </nav>
            <?php } ?>
            
            <?php if (isset($_POST['beli-skrg'])) { ?>
            <nav class="bayar pemanis">
                <h2>Ringkasan Belanja</h2>
                <?php
                    $jmlh = $_POST['jumlah'];
                    $total_hbrg = $row->harga_beli;
                    $jmlh_brg = $total_hbrg * $jmlh;
                    $ongkir = 40000;
                    $asuransi_p = 1000;
                    $t_brg = $jmlh_brg + $ongkir + $asuransi_p;
                    $b_layanan = 1000;
                    $b_jasa_apk = 0;
                    $t_jasa = $b_layanan + $b_jasa_apk;
                    $total_tagihan = $t_brg + $t_jasa;
                    ?>
                <h3>Total Belanja</h3>
                <table>
                    <tr>
                        <td><h4>Total Harga Barang (<?php echo $jmlh; ?>) Brg</h4></td>
                        <td><p>Rp<?php echo number_format($jmlh_brg,0,',','.'); ?></p></td>
                    </tr>
                    <tr>
                        <td><h4>Total Ongkos Kirim</h4></td>
                        <td><p>Rp<?php echo number_format($ongkir,0,',','.'); ?></p></td>
                    </tr>
                    <tr>
                        <td><h4>Asuransi Pengiriman</h4></td>
                        <td><p>Rp<?php echo number_format($asuransi_p,0,',','.'); ?></p></td>
                    </tr>
                </table>
                <hr>
                <h3>Biaya Transaksi</h3>
                <table>
                    <tr>
                        <td><h4>Biaya Layanan</h4></td>
                        <td><p>Rp<?php echo number_format($b_layanan,0,',','.'); ?></p></td>
                    </tr>
                    <tr>
                        <td><h4>Biaya Jasa Aplikasi</h4></td>
                        <td><p>Rp<?php echo number_format($b_jasa_apk,0,',','.'); ?></p></td>
                    </tr>
                </table>
                <hr>
                <table>
                    <td><h3>Total Tagihan</h3></td>
                    <td><p>Rp<?php echo number_format($total_tagihan,0,',','.'); ?></p></td>
                </table>
                <hr>
                    <input type="text" name="jumlah" value="<?php echo $jmlh; ?>" style="display: none;">
                    <input type="text" name="tanggal" value="<?php echo date('o/m/d'); ?>" style="display: none;">
                    <input type="text" name="proses" value="pending" style="display: none;">
                    <input type="text" name="id_user" value="<?php echo $_SESSION['id']; ?>" style="display: none;">
                    <input type="text" name="id_padi" value="<?php echo $row->id_padi; ?>" style="display: none;">
                    <input type="text" name="harga_beli" value="<?php echo $total_tagihan; ?>" style="display: none;">
                    <input type="text" name="deskripsi" value="<?php echo $row->deskripsi; ?>" style="display: none;">
                    <button name="beli-skrg" class="pemanis"><i class="fa-brands fa-shopify" style="margin-right: 5px;"></i>
                        Bayar
                    </button>
                </form>
                <?php } ?>
            </nav>
        </section>
    </div>
    <script>
        function autoNomor() {
            const defaultAddress = "082157308640";
            document.getElementById('nomorhp').value = defaultAddress;
        }
        function autoFillAddress() {
            const defaultAddress = "Desa Jeruju Besar, Jl. Jeruju Besar (Rumah di kiri bukan sebrang parit), Sungai Kakap, Kab. Kubu Raya";
            document.getElementById('address').value = defaultAddress;
        }
    </script>
</body>
</html>