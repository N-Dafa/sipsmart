<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/fp3/login");}
?>
<?php
$get1 = mysqli_query($koneksi, "SELECT * FROM user");
$getmember1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM dt_admin");
$getmember2 = mysqli_num_rows($get2);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/style-admin.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <script src="assets/js/style.js"></script>
</head>
<body>
    <div class="wall"></div>
    <div class="atas">
        <?php include 'template/sidebar.html' ?>
        <section id="header"></section>
        <?php include 'template/header-admin.html' ?>
        <div class="headup"></div>
        <div class="isi">
            <section class="dp1">
                <input type="checkbox" id="centang">
                    <label for="centang">
                        <div id="open">Tambah<br>Admin Baru</div>
                        <div id="close"></div>
                    </label>
                <div class="kolom">
                    <div id="total-member" style="margin-left: 11%;"><p><?php echo number_format($getmember1,0,',','.');?></p><span>Member Regis</span></p></div>
                    <div id="total-member" style="margin-left: 0;"><p><?php echo $getmember2;?></p><span>Admin</span></p></div>
                </div>
                <div class="tambah-tengah">
                    <form action="<?php echo base_url() . 'admin/tambah_aksi'; ?>" method="post">
                        <table class="input">
                            <input id="admin" type="text" name="id" value="44441" style="display: none;">
                            <td class="text-light" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Tambah Admin</td>
                            <tr><td></td></tr>
                            <tr>
                            <td class="text-light">Nama</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="nama" autocomplete="off"></td>
                            </tr>
                            <td class="text-light">password</td>
                            <tr>
                                <td><input type="text" name="pass" autocomplete="off"></td>
                            </tr>
                            <td style="border-top: 1px solid #c3c3c397;" colspan="2"></td>
                            <tr>
                                <td>
                                    <button>Tambah</button>
                                </td>
                            </tr>
                            <td><p>ketuk dibagian kosong untuk kembali</p></td>
                        </table>
                    </form>
                </div>
                <table class="table-table">
                    <tr id="atas">
                        <th style="width: 5px; padding-right: 3px;">No</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th id="atas-table">Action</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($dt_admin as $row) { ?>
                    <tr>
                        <td widtd="5%"><?php echo $no++; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->pass; ?></td>
                        <td id="action">
                            <a href="<?php echo base_url(); ?>admin/hapus/<?php echo $row->nim; ?>" class="hapus">Hapus</a>
                            <a href="<?php echo base_url(); ?>admin/edit/<?php echo $row->nim; ?>" class="edit">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </section>
        <script>
            const open = document.querySelector('#open');
            const close = document.querySelector('#close');
            const modal = document.querySelector('.input');
    
            open.onclick = function() {
                modal.classList.add('show');
            }
            close.onclick = function() {
                modal.classList.remove('show');
            }
        </script>
        </div>
    </div>
    <div class="loader"></div>
	<script src="assets/js/loading.js"></script>
</body>
</html>