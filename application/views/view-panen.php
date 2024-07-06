<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/fp3/login");}
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
    <script src="assets/js/style.js"></script>`
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
                <a href="printdata" id="print-laporan">Print Data</a>
                <label for="centang" id="tambah-data" style="position: absolute;">
                    <div id="open">Tambah<br>Hasil Panen</div>
                    <div id="close"></div>
                </label>
                <?php include 'template/inputpanen.php' ?>
                <table class="table-table">
                    <tr id="atas">
                        <th style="width:3%;">No</th>
                        <th id="atas-table">Tanggal</th>
                        <th id="atas-table">Jenis Padi</th>
                        <th id="atas-table">Hasil Panen</th>
                        <th id="atas-table">Jumlah Hari</th>
                        <th id="atas-table">Berat</th>
                        <th id="atas-table">Action</th>
                    </tr>
                    <?php
                    $no=1;
                    foreach ($panen as $row) {
                    ?>
                        <tr id="bawah">
                            <td style="text-align:center; padding-left: 0px;"><?php echo $no++; ?></td>
                            <td><?php echo $row->tanggal; ?></td>
                            <td style="width: 180px; text-align: left;"><?php echo $row->jenis_padi; ?></td>
                            <td><?php echo $row->hasil_panen; ?> Karung</td>
                            <td><?php echo $row->hari; ?> Hari</td>
                            <td><?php echo $row->berat; ?> Kg</td>
                            <td id="action">
                                <a href="<?php echo base_url(); ?>hasilpanen/hapus/<?php echo $row->id; ?>" class="hapus">Hapus</a>
                                <a href="<?php echo base_url(); ?>hasilpanen/edit/<?php echo $row->id; ?>" class="edit">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
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