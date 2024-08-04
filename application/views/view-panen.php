<?php include "database/database.php";

$get = mysqli_query($koneksi, "SELECT * FROM panen");
$data_panen = mysqli_num_rows($get);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Hasil Panen</title>
    <link rel="stylesheet" href="assets/css/style-panen.css">
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
        <form action="hasilpanen"method="post">
            <i class="fa-solid fa-magnifying-glass"id="logo-cari"></i>
            <input type="text"name="cari"placeholder="Pencarian"autofocus id="pencarian">
            <input type="submit"id="submit">
        </form>
        <?php 
        if(isset($_POST['cari'])){
            $cari = $_POST['cari'];
            $data = mysqli_query($koneksi,"SELECT * from panen where jenis_padi like '%".$cari."%' or hasil_panen like '%".$cari."%'");
        }else{
            $data = mysqli_query($koneksi,"SELECT * from panen");
        }
        $no = 1; ?>
    </div>
        <div class="isi">
            <section class="isi-body">
                <div class="kolom_input">
                    <input type="checkbox" id="centang">
                    <a href="printdata"><button class="print-laporan pemanis">Print Data</button></a>
                    <label for="centang" id="tambah-data">
                        <div id="open">Tambah<br>Hasil Panen</div>
                        <div id="close"></div>
                    </label>
                    <div class="data_panen">Data:<br><?php echo number_format($data_panen,0,',','.');?></div>
                </div>
                <table class="table-table pemanis">
                    <tr id="atas">
                        <th style="width:3%;">No</th>
                        <th id="atas-table" style="width: 13%;">Tanggal<form action="" method="post"><button name="desc_tgl" style="float: right; margin-inline: 5px; margin-top: -20px;"><i class="fa-solid fa-angle-up"></i></button></form></th>
                        <?php if (isset($_POST['desc_tgl'])){
                            $data = mysqli_query($koneksi,"SELECT * FROM `panen` ORDER BY `panen`.`tanggal` ASC");
                        } ?>
                        <th id="atas-table">Jenis Padi</th>
                        <th id="atas-table">Hasil Panen</th>
                        <th id="atas-table">Jumlah Hari</th>
                        <th id="atas-table">Berat per Karung</th>
                        <th id="atas-table">Total Berat</th>
                        <th id="atas-table">Action</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($data)) { ?>
                        <tr id="bawah">
                            <td style="text-align:center;"><?php echo $no++; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td style='overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: min-content; padding: 5px 0px 2px 10px;'><?php echo $row['jenis_padi']; ?></td>
                            <td><?php echo $row['hasil_panen']; ?> Karung</td>
                            <td><?php echo $row['hari']; ?> Hari</td>
                            <td><?php echo $row['berat']; ?> Kg</td>
                            <td><?php echo $row['berat'] * $row['hasil_panen']; ?> Kg</td>
                            <td class="aksi">
                                <a href="<?php echo base_url(); ?>hasilpanen/hapus/<?php echo $row['id']; ?>" class="hapus"><i class="fa-solid fa-trash"></i></a>
                                <a href="<?php echo base_url(); ?>hasilpanen/edit/<?php echo $row['id']; ?>" class="edit"><i class="fa-solid fa-file-pen"></i> Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </section>
            <?php include 'assets/template/inputpanen.php' ?>
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