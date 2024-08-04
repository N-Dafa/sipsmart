<?php
include "database/database.php";
$_SESSION['back'] = 0;
$_SESSION['id'] = 0;
$_SESSION['barrieruser'] = '';

if ($_SESSION['regis'] == 'berhasil'){
    echo "<div class='notif_center'>";
    echo "<div class='notif valid hide' id='removeBox'><i class='fa-regular fa-circle-check'></i>";
    echo "Registrasi Berhasil";
    echo "</div>";
    echo "</div>";
}
$_SESSION['regis'] = '';
?>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/loading.js"></script>
    <script src="assets/js/timer.js"></script>
</head>
<body>
    <div class="background"></div>
    <form action="" method="post">
        <nav>
            <div>
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
                <p class="wordkey">E-Commerce Pertanian</p>
            </div>
        </nav>
    </form>
    <?php
    if (isset($_POST['login'])) {
        $_SESSION['regis'] = '';
        $id = $_POST['id'];
        $pass = $_POST['password'];
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id' AND pass='$pass'");
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
            $_SESSION['barrieruser'] = 'back';
            $_SESSION['mode'] = '';
            header("location:user");
            exit;
        } 
        elseif ($id == "") {
            echo "<div class='notif_center'>";
            echo "<div class='notif invalid hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>ID Kosong / Salah!!</div>";
            echo "</div>";
        }
        elseif ($pass == "") {
            echo "<div class='notif_center'>";
            echo "<div class='notif invalid hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>Password Salah!!</div>";
            echo "</div>";
        }
        elseif ($cek_admin == 0) {
            echo "<div class='notif_center'>";
            echo "<div class='notif invalid hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>Akun tidak ada!!</div>";
            echo "</div>";
        } 
    }
    ?>
    </div>
    <div class="loader"></div>
</body>
</html>