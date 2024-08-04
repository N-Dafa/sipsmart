<?php
include "database/database.php";
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-produk.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/style.js"></script>
</head>
<body>
    <div class="atas">
        <?php include 'assets/template/sidebar.html' ?>
        <section id="header"></section>
        <?php include 'assets/template/header-admin.html' ?>
        <div class="headup"></div>
        <div class="body_cari">
            <h1>Fitur Pencarian</h1>
            <form action="hasilpadi"method="post">
                <i class="fa-solid fa-magnifying-glass"id="logo-cari"></i>
                <input type="text"name="cari"placeholder="Pencarian"autofocus id="pencarian">
                <input type="submit"id="submit">
            </form>
            <?php 
            if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $data = mysqli_query($koneksi,"SELECT * from padi where deskripsi like '%".$cari."%'");
            }else{
                $data = mysqli_query($koneksi,"SELECT * from padi");
            }
            $no = 1; ?>
        </div>
        <div class="isi">
            <section class="dp1">
                <input type="checkbox" id="centang">
                <div class="border-tambah pemanis">
                    <label for="centang">
                        <div id="open">Tambah<br>Produk</div>
                    </label>
                    <a href="orderan">
                        <div class="order-masuk pemanis">
                            <i class="fa-solid fa-message">
                                <p><?php echo number_format($order1,0,',','.');?></p>
                            </i><div class="orderan">Orderan</div>
                        </div>
                    </a>
                </div>
                <label for="centang">
                    <div id="close"></div>
                </label>
                <div class="tambah-tengah">
                    <form action="<?php echo base_url() . 'hasilpadi/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                        <table class="input">
                                <td class="text" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Tambah Produk Baru</td>
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
                <div class="table">
                    <div class="table-table">
                        <?php
                        while($row = mysqli_fetch_array($data)) { ?>
                        <div class="isitable">
                            <a href="<?php echo base_url(); ?>hasilpadi/edit/<?php echo $row['id_padi']; ?>" class="edit">
                                <img src="assets/upload/<?php echo $row['foto']; ?>">
                                <div class="deskripsi"><?php echo $row['deskripsi']; ?></div>
                                <div class="harga">Rp<?php echo number_format($row['harga_beli'],0,',','.'); ?></div>
                                <div class="alamat"><?php echo $row['alamat']; ?></div>
                                <a href="<?php echo base_url(); ?>hasilpadi/hapus/<?php echo $row['id_padi']; ?>" class="hapus"><i class="fa-solid fa-xmark"></i></a>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
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