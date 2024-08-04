<?php
include "database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="assets/img/icon.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Detail Pesanan</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/order.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pencarian.css">
</head>
<body>
    <div class="wall"></div>
    <div class="head">
        <div class="header">
            <div class="bar">
                <a class="a" href="<?php echo base_url(). 'hasilpadi/batal'; ?>"><i class="fa-solid fa-angle-left"></i></a>
            </div> 
            <h2>Detail Pesanan</h2>
        </div>
    </div>
    <div class="header-body">
        <form action="orderan"method="post">
            <i class="fa-solid fa-magnifying-glass"id="logo-cari"></i><input type="text"name="cari"placeholder="Pencarian"autofocus id="pencarian"><input type="submit"id="submit">
        </form>
        <?php include "pencarian/cari.php"?>
    </div>
    <nav>
        <table>
            <div class="isi">
                <tr id="atas">
                    <th width="40px">No</th>
                    <th>ID User</th>
                    <th>Nomor HP</th>
                    <th width="130px">Tanggal<form action="" method="post"><button name="desc_tgl" style="float: right; margin-inline: 5px; margin-top: -20px;"><i class="fa-solid fa-angle-down"></i></button></form></th>
                    <?php if  (isset($_POST['desc_tgl'])){
                        $data = mysqli_query($koneksi,"SELECT * FROM `pesan` ORDER BY `pesan`.`tanggal` DESC");
                    } ?>
                    <th>Alamat</th>
                    <th>ID Padi</th>
                    <th>Nama Barang</th>
                    <th>Harga Beli</th>
                    <th>Metode Transaksi</th>
                    <th>Jumlah Barang</th>
                    <th>Proses</th>
                    <th>Status</th>
                </tr>
                <?php
                    $no = 1;
                    while($row = mysqli_fetch_array($data)) {
                ?>
                    <tr id="bawah">
                        <td><?php echo $no++; ?></td>
                        <td>U<?php echo $row['id_user']; ?></td>
                        <td><?php echo $row['nomorhp']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td class="alamat" style="padding-block: 10px;"><?php echo $row['alamat']; ?></td>
                        <td>P<?php echo $row['id_padi']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td><?php echo $row['harga_beli']; ?></td>
                        <td><?php echo $row['transaksi']; ?></td>
                        <td style="border-left: 1px solid;"><?php echo $row['jumlah']; ?></td>
                        <td>
                            <form action="<?php echo base_url(). 'pesan/tambah_proses'; ?>" method="post">
                                <input type="hidden" name="id_pesan" value="<?php echo $row['id_pesan']; ?>">
                                <input type="submit" name="proses" value="packing" id="proses">
                            </form>
                        </td>
                        <td><?php echo $row['proses']; ?></td>
                    </tr>
                <?php 
                }
                ?>
            </div>
        </table>
    </nav>
    <script>
        document.addEventListener('keydown', function(event) {
            // Memeriksa apakah tombol Backspace atau Esc ditekan
            if (event.key === 'Escape') {
                event.preventDefault(); // Mencegah perilaku default
                window.history.back(); // Kembali ke halaman sebelumnya
            }
        });
    </script>
</body>
</html>