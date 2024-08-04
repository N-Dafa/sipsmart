<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/sipsmart");}
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <title>Input Padi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-padi.css">
</head>

<body>
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
                elseif($nama=="44441"){
                    echo "<div class='nama'>";
                    echo "Admin";
                    echo "</div>";
                    echo "<i class='fa-solid fa-star'></i>";
                    echo "<div class='id'>";
                    echo "********";
                    echo "</div><br>";
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
                <li id="b1"><a href="finalproject">Home</a></li>
                <li id="b2"><a href="hasilpanen">Hasil Panen</a></li>
                <li id="b3"><a href="admin">Admin</a></li>
                <li id="b4"><a style="background: rgb(238, 234, 226);" href="padi">Jual Beli Padi</a></li>
                <li id="b5"><a href="contact">Contact</a></li>
            </ul>
        </div>
        <script>
            window.addEventListener("scroll", function() {
                var header = document.querySelector(".header");
                header.classList.toggle("bar", window.scrollY > 0);
            })
        </script>
<div class="s1">
<form action="<?php echo base_url(). 'hasilpadi/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td class="text">Gambar</td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td class="text">Tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td class="text">Deskripsi</td>
				<td><input type="textarea" name="deskripsi"></td>
			</tr>
            <tr>
				<td class="text">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td class="text">Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><button>Tambah</button></form><form action="<?php echo base_url(). 'hasilpadi/batal'; ?>"><button>batal</button></form></td>
			</tr>
		</table>
      
</div>
</div>
        <div class="footer">
            <div class="info" style="float: left;">
                <img src="assets/img/bsi.png" height="120" width="120" style=" margin-top: 100px;">
                <h3>Universitas Bina Sarana Informatika</h3><br>
                <div class="footer-address">
                    Jl. Abdul Rahman Saleh No.18, <br> Bangka Belitung Laut,
                    <br> Kec. Pontianak Tenggara, <br> Kota Pontianak,
                    <br> Kalimantan Barat 78124
                    <br>
                    <br>
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