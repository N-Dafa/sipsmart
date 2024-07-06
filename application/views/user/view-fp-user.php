<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Web Pertanian</title>
    <link rel="stylesheet" href="assets/css/style-beranda.css">
</head>

<body>
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
                <li id="b1"><a style="background: rgb(238, 234, 226);" href="">Beranda</a></li>
                <li id="b2"><a href="hasilpanen_user">Panen</a></li>
                <li id="b2"><a href="hasilpadi_user">Produk</a></li>
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
                    <li><a style="background-color: rgb(150, 209, 55); padding: 10px 20px; border-radius: 20px" id="tombol" href="#header">Beranda</a></li>
                    <li><a id="tombol" href="hasilpanen_user">Panen</a></li>
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
        <div class="container">
            <div class="sliders">
                <div class="slider">
                    <div class="slides">
                      <input type="radio" name="radio-btn" id="radio1">
                      <input type="radio" name="radio-btn" id="radio2">
                      <input type="radio" name="radio-btn" id="radio3">
                      <div class="slidee first">
                        <img src="https://i.pinimg.com/564x/ab/4c/9f/ab4c9feb09bccd1764da378d0f5f3aa1.jpg" alt="">
                      </div>
                      <div class="slidee">
                        <img src="https://i.pinimg.com/564x/64/0d/47/640d47f5358a1b997814e4ec3493eefe.jpg" alt="">
                      </div>
                      <div class="slidee">
                        <img src="assets/img/bg3.jpg" alt="">
                      </div>
                      <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                      </div>
                    </div>
                    <div class="navigation-manual">
                      <label for="radio1" class="manual-btn"></label>
                      <label for="radio2" class="manual-btn"></label>
                      <label for="radio3" class="manual-btn"></label>
                    </div>
                  </div>
                  <script type="assets/js/style.js"></script>
                <div class="blur">
                        <h1>SISTEM INFORMASI PENGOLAHAN<br>HASIL PANEN PADI</h1>
                        <a id="btn1" href="hasilpadi_user">PRODUK</a>
                </div>
            </div>
        </div>
        <div class="batas"></div>
        <div class="bg-btn-info">
            <div class="penghias kiri"></div>
            <div class="btn-info">
                <center>
                    <table>
                        <td>
                            <a href="#see">
                                <div class="btn1" id="box" style="background-color: rgb(150, 209, 55);">
                                    <p>Sistem<br>Informasi<br>Pertanian</p>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="hasilpanen_user">
                                <div class="btn2" id="box">
                                    <p>Hasil Panen</p>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="hasilpadi_user">
                                <div class="btn3" id="box">
                                    <p>Produk</p>
                                </div>
                            </a>
                        </td>
                    </table>
                </center>
            </div>
        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/foto6.jpg">
                    <div class="dp1">
                        <header>PERTANIAN</header>
                        <p>Sebagai Negara Agraris, sektor pertanian memegang peranan yang cukup penting dalam kehidupan perekonomian masyarakat Indonesia, khususnya di Desa Kerohok Kabupaten Landak. Pertanian merupakan suatu kegiatan para petani yang memanfaatkan sumber daya hayati dengan cara bertanam pada tanah atau media lahan lainnya guna menghasilkan kebutuhan pangan bagi kehidupan manusia.</p>
                        <a href="pertanian_user">
                            <p></p>
                            <div class="more">See More</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="penghias kanan" style="margin-bottom: 50px;"></div>
    </div>

        <div class="footer">
            <div class="info" style="float: left;">
                <img src="assets/img/bsi.png" height="120" width="120" style=" margin-top: 100px;">
                <h3>Universitas Bina Sarana Informatika</h3><br>
                <div class="footer-address">
                    Jl. Abdul Rahman Saleh No.18, <br> Bangka Belitung Laut,
                    <br> Kec. Pontianak Tenggara, <br> Kota Pontianak,
                    <br> Kalimantan Barat 78124
                    <span>Telp/Whatsapp:</span>
                    <a href="tel:+6282157308640">0821-5730-8640</a><br>

                </div>
            </div>
        </div>

        <div class="logo-icon">
            <center>
                <table>
                    <td>
                        <div class="logo-ig">
                            <a href="https://www.instagram.com/reel/CkPvT_qjhU-/?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </td>
                    <td>
                        <div class="logo-yt">
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </td>
                </table>
            </center>
        </div>
    </div>
    <div class="wall">
        <div class="walls"></div>
    </div>
</body>

</html>