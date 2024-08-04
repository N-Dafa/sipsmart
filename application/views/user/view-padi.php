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
        <?php include 'assets/template/sidebar_member.html' ?>
        <section id="header"></section>
        <?php include 'assets/template/header-member.html' ?>
        <div class="headup"></div>
        <div class="body_cari">
            <h1>Fitur Pencarian</h1>
            <form action="hasilpadi_user"method="post">
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
        <div class="s1">
            <div class="table">
                <div class="table-table">
                    <?php
                    while($row = mysqli_fetch_array($data)) { ?>
                        <div class="isitable">
                            <a href="<?php echo base_url(); ?>hasilpadi_user/pesan/<?php echo $row['id_padi']; ?>" class="edit">
                                <img src="assets/upload/<?php echo $row['foto']; ?>">
                                <div class="deskripsi"><?php echo $row['deskripsi']; ?></div>
                                <div class="harga">Rp<?php echo number_format($row['harga_beli'],0,',','.'); ?></div>
                                <div class="alamat"><?php echo $row['alamat']; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="wall"></div>
    <div class="loader"></div>
    <script src="assets/js/loading.js"></script>
</body>
</html>