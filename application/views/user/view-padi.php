<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Jual Beli Padi</title>
    <link rel="stylesheet" href="assets/css/style-padi.css">
<style>
.deskripsi,
.alamat{
    display: -webkit-box;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
}
.alamat{
    position: absolute;
    bottom: 10px;
    display: -webkit-box;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    overflow: hidden;
}
</style>
</head>
<body>
    <div class="wall"></div>
    <div class="atas">
        <input type="checkbox" id="check">
        <label for="check">
            <div class="batal" id="btn">></div>
            <div class="a3" id="cancel"></div>
        </label>
        <div class="sidebar">
            <div class="user">
                <?php
                include "database/database.php";
                $nama = $_SESSION['id'];
                if ($nama == "") {
                    header("location:login");
                    exit;
                }
                else {
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$nama'");
                    $data = mysqli_fetch_array($query);
                    echo "<div class='nama'>";
                    echo "$data[nama]";
                    echo "</div>";
                    echo "<i class='fa-solid fa-circle-user'></i>";
                    echo "<div class='id'>";
                    echo $_SESSION['id'];
                    echo "</div><br>";
                }
                ?>
            </div>
            <ul>
                <li id="b1"><a href="fp_user">Beranda</a></li>
                <li id="b2"><a href="hasilpanen_user">Hasil Panen</a></li>
                <li id="b3"><a style="background: rgb(238, 234, 226);" href="">Jual Beli Padi</a></li>
                <li id="b4"><a href="contact_user">Kontak</a></li>
            </ul>
            <div class="sidebar-bg">
                <div class="sidebar-bgs"></div>
            </div>
        </div>
        <section id="header"></section>
        <div class="head">
            <div class="header">
                <img src="assets/img/logo.png" alt="">
                <h2>SIP Smart</h2>
                <ul>
                    <li><a id="tombol" href="fp_user">Beranda</a></li>
                    <li><a id="tombol" href="hasilpanen_user">Panen</a></li>
                    <li><a style="background-color: rgb(150, 209, 55); padding: 10px 20px; border-radius: 20px" id="tombol" href="#header">Produk</a></li>
                    <li><a id="tombol" href="contact_user">Kontak</a></li>
                    <li>
                        <input type="checkbox" id="checklogout">
                        <label for="checklogout">
                            <span>
                                LogOut
                                <div class="labellogout">
                                    <a href="login"><i class="fa-solid fa-right-from-bracket"></i></a>
                                </div>  
                            </span>
                        </label>
                    </li>
                </ul>
                <a id="back" href="#header"><i class="fa-solid fa-up-long"></i></a>
            </div>
        </div>
        <script>
            window.addEventListener("scroll", function() {
                var header = document.querySelector(".header");
                header.classList.toggle("bar", window.scrollY > 0);
            })
        </script>
        <div class="headup"></div>
        <div class="s1">
            <div class="table">
                <table class="table-table">
                    <?php foreach ($padi as $row) { ?>
                        <div class="isitable">
                            <a href="<?php echo base_url(); ?>hasilpadi_user/pesan/<?php echo $row->id; ?>" class="edit">
                                <img src="assets/img/<?php echo $row->foto; ?>">
                                <div class="tanggal"><?php echo $row->tanggal; ?></div>
                                <div class="deskripsi"><?php echo $row->deskripsi; ?></div>
                                <div class="harga">Rp <?php echo number_format($row->harga,0,',','.'); ?></div>
                                <div class="alamat"><?php echo $row->alamat; ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>