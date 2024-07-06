<?php
include "database/database.php";
if ($_SESSION["back"] == 0){
    header("location:http://localhost/fp3/login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Kontak Admin</title>
    <link rel="stylesheet" href="assets/css/style-contact.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/style.js"></script>
</head>
<body>
    <div class="atas">
        <?php include 'template/sidebar.html' ?>
        <section id="header"></section>
        <?php include 'template/header-admin.html' ?>
        <div class="headup"></div>
        <section id="see">
            <div class="s1">
                <div class="slide1">
                    <img src="assets/img/awang.png">
                    <div class="dp1">
                        <header>Awang Dafa Faturiansyah</header>
                        <p class="font-weight-bold">
                            <strong>ID : 12210991</strong>
                        </p>
                        <a href="https://wa.me/6282157308640"><i class="fa-brands fa-whatsapp"></i>082157308640</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="wall"></div>
    <div class="loader"></div>
	<script src="assets/js/loading.js"></script>
</body>
</html>