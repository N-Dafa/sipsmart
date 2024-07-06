<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/fp3/login");}
?>
<?php
$get1 = mysqli_query($koneksi, "SELECT * FROM pesan");
$order1 = mysqli_num_rows($get1);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Jual Beli Barang</title>
    <link rel="stylesheet" href="assets/css/style-produk.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/style.js"></script>
</head>
<body>
<div class="atas">
    <?php include 'template/sidebar.html' ?>
    <section id="header"></section>
    <?php include 'template/header-admin.html' ?>
    <div class="headup"></div>
    <div class="isi">
        <section class="dp1">
            <input type="checkbox" id="centang">
            <div class="border-tambah">
                <label for="centang">
                    <div id="open">Tambah<br>Produk</div>
                </label>
                <a href="orderan" style="color: black;"><div class="order-masuk"><i class="fa-solid fa-message"><p><?php echo number_format($order1,0,',','.');?></p></i><div class="orderan">Orderan</div></div></a>
            </div>
            <label for="centang">
                <div id="close"></div>
            </label>
            <div class="tambah-tengah">
                <form action="<?php echo base_url() . 'hasilpadi/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <table class="input">
                            <td class="text-light" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Tambah Produk Baru</td>
                            <tr><td></td></tr>
                            <tr>
                                <td class="inputan">Gambar</td>
                            </tr>
                            <td><input type="file" name="foto"></td>
                            <tr>
                                <td class="inputan">Tanggal</td>
                            </tr>
                            <td><input type="date" name="tanggal"></td>
                            <tr>
                                <td class="inputan">Deskripsi</td>
                            </tr>
                            <td><input type="textarea" name="deskripsi" autocomplete="off" autofocus></td>
                            <tr>
                                <td class="inputan">Alamat</td>
                            </tr>
                            <td><input type="text" name="alamat"></td>
                            <tr>
                                <td class="inputan">Harga</td>
                            </tr>
                            <td><input type="text" name="harga"></td>
                            <td style="border-top: 1px solid #c3c3c397;" colspan="2"></td>
                            <tr>
                                <td>
                                    <button>Tambah</button>
                                </td>
                            </tr>
                            <td><p>ketuk dibagian kosong untuk kembali</p></td>
                        </table>
                </form>
            </div>


            <div class="table" style="margin-left: 23%;">
                <table class="table-table">
                    <?php { ?>
                    <?php foreach ($padi as $row) { ?>
                    <div class="isitable">
                        <a href="<?php echo base_url(); ?>hasilpadi/edit/<?php echo $row->id; ?>" class="edit">
                            <img src="assets/img/<?php echo $row->foto; ?>">
                            <div class="deskripsi"><?php echo $row->deskripsi; ?></div>
                            <div class="harga">Rp<?php echo number_format($row->harga,0,',','.'); ?></div>
                            <div class="alamat"><?php echo $row->alamat; ?></div>
                            <!-- <div class="tanggal"><?php echo $row->tanggal; ?></div> -->
                            <a href="<?php echo base_url(); ?>hasilpadi/hapus/<?php echo $row->id; ?>" class="hapus"><i class="fa-solid fa-xmark"></i></a>
                        </a>
                    </div>
                    <?php 
                        } 
                    }
                    ?>
                </table>
            </div>
        </section>
        <script>
            const open = document.querySelector('#open');
            const close = document.querySelector('#close');
            const modal = document.querySelector('.input');
    
            open.onclick = function() {
                modal.classList.add('show');
            }
            close.onclick = function() {
                modal.classList.remove('show');
            }
        </script>
    </div>
</div>
<div class="wall"></div>
    <div class="loader"></div>
	<script src="assets/js/loading.js"></script>
</body>
</html>