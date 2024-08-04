<?php
include "database/database.php";
if ($_SESSION["back"] == 0){header("location:http://localhost/sipsmart");}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="assets/img/icon.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <title>Edit Padi</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-panen.css">
</head>
<body>
<div class="wall">
    <div class="walls"></div>
</div>
<div style="width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <?php
	foreach($padi as $u){ ?>
	<form action="<?php echo base_url(). 'hasilpadi/update'; ?>" method="post" enctype="multipart/form-data">
		<table class="input" style="transform: scaleY(1); opacity: 1; pointer-events: all; user-select: none;">
            <td class="text-light" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Ubah Data Produk</td>
            <td><td></td></td>
			<tr>
				<td class="text">Gambar</td>
				<td>
					<input type="hidden" name="id_padi" value="<?php echo $u->id_padi ?>">
					<input type="file" name="foto">
				</td>
			</tr>
			<tr>
				<td class="text">Tanggal</td>
				<td>
					<input type="date" name="tanggal" value="<?php echo $u->tanggal ?>">
				</td>
			</tr>
			<tr>
				<td class="text">Deskripsi</td>
				<td><input type="areatext" name="deskripsi" value="<?php echo $u->deskripsi ?>"></td>
			</tr>
            <tr>
				<td class="text">Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td class="text">Harga</td>
				<td><input type="text" name="harga_beli" value="<?php echo $u->harga_beli ?>"></td>
			</tr>
			<tr>
				<td><hr></td>
				<td><button style="background-color: #74c6fd;">Ubah</button></form><form action="<?php echo base_url(). 'hasilpadi/batal'; ?>"><button style="background-color: #d46161;">Batal</button></form></td>
			</tr>
		</table>
	<?php } ?>
</div>
</body>
</html>