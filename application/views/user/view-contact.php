<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/style-contact.css">
</head>

<body>
    <div class="wall"></div>
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
                <li id="b2"><a href="hasilpanen_user">Hasil Panen</a></li>
                <li id="b3"><a href="hasilpadi_user">Jual Beli Padi</a></li>
                <li id="b4"><a style="background: rgb(238, 234, 226);" href="">Kontak</a></li>
            </ul>
        </div>
        <section id="header"></section>
        <div class="head">
            <div class="header">
                <img src="assets/img/logo.png" alt="">
                <h2>SIP Smart</h2>
                <ul>
                    <li><a id="tombol" href="fp_user">Beranda</a></li>
                    <li><a id="tombol" href="hasilpanen_user">Panen</a></li>
                    <li><a id="tombol" href="hasilpadi_user">Produk</a></li>
                    <li><a style="background-color: rgb(150, 209, 55); padding: 10px 20px; border-radius: 20px" id="tombol" href="#header">Kontak</a></li>
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




        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/aurel.png">
                    <div class="dp1">
                        <header>Aurelia Stefani Alda</header>
                        <p class="font-weight-bold">
                            <strong>ID : 12210861</strong>
                        </p>
                        <!-- <div class="h5">Hubungi Kami</div> -->
                        <a href="https://wa.me/6289693226048" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 082251552021</p>
                            </i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/awang.png">
                    <div class="dp1">
                        <header>Awang Dafa Faturiansyah</header>
                        <p class="font-weight-bold">
                            <strong>ID : 12210991</strong>
                        </p>
                        <a href="https://wa.me/6282157308640" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 082157308640</p>
                            </i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/eni.png">
                    <div class="dp1">
                        <header> Eni Restari</header>
                        <p class="font-weight-bold">
                            <strong>ID : 12210880</strong>
                        </p>
                        <a href="https://wa.me/6282159613903" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 082159613903</p>
                            </i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/iqbal.png">
                    <div class="dp1">
                        <header> Muhammad Iqbal</header>
                        <p class="font-weight-bold">
                            <strong>ID : 12210967</strong>
                        </p>
                        <a href="https://wa.me/628152113027" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 08152113027</p>
                            </i></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/ira.png">
                    <div class="dp1">
                        <header> Stani Amyroh</header>
                        <p class="font-weight-bold">
                            <strong>ID : 12210896</strong>
                        </p>
                        <a href="https://wa.me/6289694363748" class="feature bg-success bg-gradient text-white rounded-1 mb-1"><i class="bi bi-whatsapp" <p> 089694363748</p>
                            </i></a>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>