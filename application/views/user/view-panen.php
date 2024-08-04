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
        <?php include "database/database.php" ?>
        <?php include 'assets/template/sidebar_member.html' ?>
        <section id="header"></section>
        <?php include 'assets/template/header-member.html' ?>
        <div class="headup"></div>
        <div class="body_cari">
            <h1>Fitur Pencarian</h1>
            <form action="hasilpanen_user"method="post">
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
                <div class="data_panen">Data:<br><?php echo number_format($data_panen,0,',','.');?></div>
                <table class="table-table">
                    <tr id="atas">
                        <th style="width:3%;">No</th>
                        <th id="atas-table" style="width: 13%;">Tanggal<form action="" method="post"><button name="desc_tgl" style="float: right; margin-inline: 5px; margin-top: -20px;"><i class="fa-solid fa-angle-up"></i></button></form></th>
                        <?php if (isset($_POST['desc_tgl'])){
                            $data = mysqli_query($koneksi,"SELECT * FROM `panen` ORDER BY `panen`.`tanggal` ASC");
                        } ?>
                        <th id="atas-table">Jenis Padi</th>
                        <th id="atas-table">Hasil Panen</th>
                        <th id="atas-table">Jumlah Hari</th>
                        <th id="atas-table">Berat</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($data)) { ?>
                        <tr id="bawah">
                            <td style="text-align:center; padding-left: 0px;"><?php echo $no++; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['jenis_padi']; ?></td>
                            <td><?php echo $row['hasil_panen']; ?> Karung</td>
                            <td><?php echo $row['hari']; ?> Hari</td>
                            <td style="height: 50px;"><?php echo $row['berat']; ?> Kg</td>
                        </tr>
                    <?php } ?>
                </table>
            </section>
        </div>
    </div>
    <div class="wall"></div>
    <div class="loader"></div>
	<script src="assets/js/loading.js"></script>
</body>
</html>