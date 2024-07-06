<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/css/style-regis.css">
</head>

<body>
    <form action="" method="post">
        <center>
            <header>
                <div class="kotak">
                    <div class="head">Registrasi</div>
                    <ul>
                        <li><input type="text" name="nama" placeholder="Nickname" autofocus autocomplete="off"></li>
                        <li><input type="text" name="id" placeholder="ID 1-8 Number" autocomplete="off"></li>
                        <li><input class="pass" type="password" name="pass" placeholder="Password"><i class="fa-regular fa-eye"></i></li>
                        <input class="regis" type="submit" name="regis" value="Registrasi">
                        <hr>
                        <li><a href="login">Login!</a></li>
                    </ul>
                </div>
            </header>
            <p>Sistem Informasi Pertanian</p>
        </center>
        <?php
        include "database/database.php";
        if (isset($_POST['regis'])) {
            $nama = $_POST['nama'];
            $_SESSION['nama'] = $nama;
            $id = $_POST['id'];
            $pass = $_POST['pass'];
            $kosong = "";
            $query = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama'");
            $cek = mysqli_num_rows($query);
            if ($nama ==="") {
                echo "<div class='notif'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "Nickname Harus di isi..!!";
                echo "</div>";
            } 
            elseif ($nama = $cek) {
                echo "<div class='notif'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "Nama sudah terpakai..!!";
                echo "</div>";
            } 
            elseif ($id <= 0) {
                echo "<div class='notif'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "ID Harus di isi..!!";
                echo "</div>";
            } 
            elseif ($pass === "") {
                echo "<div class='notif'><i class='fa-solid fa-triangle-exclamation'></i>";
                echo "Password Harus di isi..!!";
                echo "</div>";
            } 
            else {
                mysqli_query($koneksi, "insert into user set
                nama = '$_POST[nama]',
                id = '$_POST[id]',
                pass = '$_POST[pass]'");
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
</body>

</html>