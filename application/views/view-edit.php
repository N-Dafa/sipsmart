<!DOCTYPE html>
<html>
<head>
    <title>Web Pertanian</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-admin.css">
</head>
<body>
<div class="wall">
    <div class="walls"></div>
</div>
<div style="width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center;">
<?php foreach($dt_admin as $u){ ?>
	<form action="<?php echo base_url(). 'admin/update'; ?>" method="post">
		<table class="input" style="transform: scaleY(1); opacity: 1; pointer-events: all; user-select: none;">
            <td class="text-light" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Ubah Data Panen</td>
            <td><td></td></td>
			<tr>
				<td class="text-light">Nama</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $u->id_admin ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td class="text-light">password</td>
				<td><input type="text" name="pass" value="<?php echo $u->pass ?>"></td>
			</tr>
			<tr>
				<td><hr></td>
				<td><button style="background-color: #74c6fd;">Ubah</button></form><form action="<?php echo base_url(). 'admin/batal'; ?>"><button style="background-color: #d46161;">Batal</button></form></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</div>
</div>
</body>
</html>