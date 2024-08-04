<?php
include "database/database.php";
$_SESSION['back'] = 0;
$_SESSION['id'] = 0;
$_SESSION['barrieruser'] = '';
?>
<html>
<head>
<link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/css/style-regis.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/timer.js"></script>
</head>
<body>
    <div class="background"></div>
    <form action="" method="post">
        <nav>
            <div>
                <header>
                    <div class="kotak">
                        <div class="head">Registrasi</div>
                        <ul>
                            <li><input type="text" name="nama" placeholder="Nickname" autofocus autocomplete="off"></li>
                            <li><input type="number" name="id_user" placeholder="ID 1-8 Number" autocomplete="off"></li>
                            <li><input class="pass" type="password" name="pass" placeholder="Password"><i class="fa-regular fa-eye"></i></li>
                            <input class="regis" type="submit" name="regis" value="Registrasi">
                            <hr>
                            <li><a href="login">Login!</a></li>
                        </ul>
                    </div>
                </header>
                <p class="wordkey">E-Commerce Pertanian</p>
            </div>
        </nav>
        <?php
        include "database/database.php";
        if (isset($_POST['regis'])) {
            $nama = $_POST['nama'];
            $_SESSION['nama'] = $nama;
            $id = $_POST['id_user'];
            $pass = $_POST['pass'];
            $kosong = "";
            $query_nama = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama'");
            $query_id = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
            $cek_nama = mysqli_num_rows($query_nama);
            $cek_id = mysqli_num_rows($query_id);
            if ($nama ==="") {
                echo "<div class='notif_center'>";
                echo "<div class='notif hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "Nickname Harus di isi..!!";
                echo "</div>";
                echo "</div>";
            }
            elseif ($nama = $cek_nama) {
                echo "<div class='notif_center'>";
                echo "<div class='notif hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "Nama sudah terpakai..!!";
                echo "</div>";
                echo "</div>";
            }
            elseif ($id <= 0) {
                echo "<div class='notif_center'>";
                echo "<div class='notif hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "ID Harus di isi..!!";
                echo "</div>";
                echo "</div>";
            }
            elseif ($id = $cek_id) {
                echo "<div class='notif_center'>";
                echo "<div class='notif hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "ID sudah terpakai..!!";
                echo "</div>";
                echo "</div>";
            }
            elseif ($pass == "") {
                echo "<div class='notif_center'>";
                echo "<div class='notif hide' id='removeBox'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "Password Harus di isi..!!";
                echo "</div>";
                echo "</div>";
            }
            else {
                mysqli_query($koneksi, "insert into user set
                nama = '$_POST[nama]',
                id_user = '$_POST[id_user]',
                pass = '$_POST[pass]'");
                $_SESSION['regis'] = 'berhasil';
                header("location:login");
            }
        }
        ?>
    </form>
    <script>
        const password = document.querySelector(".pass");
        const btn_show = document.querySelector("i");
        btn_show.addEventListener("click", function() {
            if (password.type === "password") {
                password.type = "text";
                btn_show.classList.add("hide");
            } else {
                password.type = "password";
                btn_show.classList.remove("hide");
            }
        })
    </script>
    <div class="loader"></div>
    <script src="assets/js/loading.js"></script>
</body>
</html>