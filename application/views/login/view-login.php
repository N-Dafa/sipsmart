<?php
include "database/database.php";
$_SESSION['back'] = 0;
$_SESSION['id'] = 0;
?>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link rel="stylesheet" href="assets/css/loader.css">
</head>
<body>
    <section class="wall">
        <div class="walls"></div>
    </section>
    <form action="" method="post">
        <center>
            <header>
                <div class="kotak">
                    <img style="width: 225px; height:338px;" src="https://img.freepik.com/premium-photo/beautiful-view-rice-fields-morning-with-reflection-sunrise_80375-470.jpg?w=740" alt="">
                    <div class="head">Welcome</div>
                    <ul>
                        <li><input type="text" name="id" autofocus placeholder="ID"></li>
                        <li><input type="password" name="password" placeholder="Password"></li>
                        <button class="login" type="submit" name="login" required="">Login</button>
                        <hr>
                        <li><a href="registrasi">Registrasi!</a></li>
                    </ul>
                </div>
            </header>
            <p>Sistem Informasi Pertanian</p>
        </center>
    </form>
    <?php
    if (isset($_POST['login'])) {
        $id = $_POST['id'];
        $pass = $_POST['password'];
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id' AND pass='$pass'");
        $cek = mysqli_num_rows($query);
        $query_admin = mysqli_query($koneksi, "SELECT * FROM dt_admin WHERE id='$id' AND pass='$pass'");
        $cek_admin = mysqli_num_rows($query_admin);
        if ($cek_admin == 1) {
            $_SESSION['id'] = $id;
            $_SESSION['back'] = $id;
            $_SESSION['mode'] = '';
            header("location:Beranda");
            exit;
        } elseif ($cek == 1) {
            $_SESSION['id'] = $id;
            $_SESSION['back'] = $id;
            $_SESSION['mode'] = '';
            header("location:fp_user");
            exit;
        } elseif ($id == "") {
            echo "<input onclick='salah()'><script>function salah(){confirm('ID Tidak Ditemukan')}</script>";
        } else {
            echo "<div class='notif'><i class='fa-solid fa-triangle-exclamation'></i>Password Salah!!</div>";
        }
    }
    ?>
    </div>
    <div class="loader"></div>
	<script src="assets/js/loading.js"></script>
</body>
</html>