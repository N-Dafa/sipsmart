<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/fp3/login");}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Web Pertanian</title>
    <link rel="stylesheet" href="assets/css/style-beranda.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/slideshow.js"></script>
</head>
<body loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    <div class="atas">
        <?php include 'template/sidebar.html' ?>
        <section id="header"></section>
        <?php include 'template/header-admin.html' ?>
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
                    <h2>E-Commerce</h2>
                    <h1>SISTEM INFORMASI<br>HASIL PANEN PADI</h1>
                    <a id="btnproduk" href="hasilpadi">PRODUK</a>
                </div>
            </div>
        </div>
        <div class="batas"></div>
        <div class="bg-btn-info">
            <div class="penghias kiri kanan"></div>
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
                            <a href="hasilpanen">
                                <div class="btn2" id="box">
                                    <p>Hasil Panen</p>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="hasilpadi">
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
                        <div class="penj-pertanian">
                            <header>PERTANIAN</header>
                            <p class="penj">Sebagai Negara Agraris, sektor pertanian memegang peranan yang cukup penting dalam kehidupan perekonomian masyarakat Indonesia, khususnya di Desa Kerohok Kabupaten Landak. Pertanian merupakan suatu kegiatan para petani yang memanfaatkan sumber daya hayati dengan cara bertanam pada tanah atau media lahan lainnya guna menghasilkan kebutuhan pangan bagi kehidupan manusia.</p>
                            <div class="more">Lebih Banyak</div>
                            <div class="border-opac"><p class="penj_lebih"><img src="assets/img/foto1.jpg">Penjelasan Lebih Lanjut<br>Sistem Informasi pertanian adalah suatu cara yang dilakukan untuk memberi informasi pertanian yang penting dan akurat datang ada pada suatu daerah tertentu. Strategi pengembangan sistem informasi pertanian perlu dilakukan dengan berbagai cara salah satunya dengan pemanfaatan internet, sehingga setiap orang dapat mengakses informasi pertanian yang ada didalamnya tidak terbatas waktu dan ruang. Dengan sistem informasi pertanian berbasis website diharapkan dapat memberikan informasi yang lebih detail dan mampu menjawab persoalan yang ada dalam transfer informasi pertanian</p></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="penghias kanan" style="margin-bottom: 50px;"></div>
        </div>
        <?php include 'template/footer.html' ?>
    </div>
    <div class="wall"></div>
    <div class="loader"></div>
	<script src="assets/js/loading.js"></script>
</body>
</html>