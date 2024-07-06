<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Hasil Panen</title>
    <link rel="stylesheet" href="assets/css/style-panen.css">
    <style>
        
.headup{
    position: relative;
    width: 100%;
    height: 160px;
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
            <div class="sidebar-bg">
                <div class="sidebar-bgs"></div>
            </div>
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
                <li id="b2"><a style="background: rgb(238, 234, 226);" href="">Panen</a></li>
                <li id="b2"><a href="hasilpadi_user">Produk</a></li>
                <li id="b4"><a href="contact_user">Kontak</a></li>
            </ul>
        </div>
        <section id="header"></section>
        <div class="head">
            <div class="header">
                <img src="assets/img/logo.png" alt="">
                <h2>SIP Smart</h2>
                <ul>
                    <li><a id="tombol" href="fp_user">Beranda</a></li>
                    <li><a style="background-color: rgb(150, 209, 55); padding: 10px 20px; border-radius: 20px" id="tombol" href="#header">Panen</a></li>
                    <li><a id="tombol" href="hasilpadi_user">Produk</a></li>
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
            <div class="dp1">
                <table class="table-table" style="margin-top: 160px; margin-left: 30px; float: left;">
                    <tr id="atas">
                        <th style="width:3%;">No</th>
                        <th id="atas-table">Tanggal</th>
                        <th id="atas-table">Jenis Padi</th>
                        <th id="atas-table">Hasil Panen</th>
                        <th id="atas-table">Hari</th>
                        <th id="atas-table">Berat</th>
                    </tr>
                    <?php
                    $no=1;
                    foreach ($panen as $row) { ?>
                        <tr id="bawah">
                            <td style="text-align:center; padding-left: 0px;"><?php echo $no++; ?></td>
                            <td><?php echo $row->tanggal; ?></td>
                            <td><?php echo $row->jenis_padi; ?></td>
                            <td><?php echo $row->hasil_panen; ?> Karung</td>
                            <td><?php echo $row->hari; ?> Hari</td>
                            <td style="height: 50px;"><?php echo $row->berat; ?> Kg</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
</body>
</html>