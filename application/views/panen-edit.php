<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <title>Web Pertanian</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-panen.css">
</head>

<body>
    <div class="atas">
<div style="width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <?php foreach($panen as $u){ ?>
	<form action="<?php echo base_url(). 'hasilpanen/update'; ?>" method="post">
		<table class="input" style="transform: scaleY(1); opacity: 1; pointer-events: all; user-select: none;">
            <td class="text-light" style="border-bottom: 1px solid #c3c3c397; padding: 10px 0px 5px 16px; font-size: 20px;" colspan="2">Ubah Data Panen</td>
            <td><td></td></td>
			<tr>
				<td class="inputan">Tanggal</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="date" name="tanggal" value="<?php echo $u->tanggal ?>">
				</td>
			</tr>
			<tr>
				<td class="inputan">Jenis Padi</td>
				<td><input type="text" name="jenis_padi" value="<?php echo $u->jenis_padi ?>"></td>
			</tr>
			<tr>
				<td class="inputan">Hasil Panen</td>
				<td><input type="text" name="hasil_panen" value="<?php echo $u->hasil_panen ?>"></td>
			</tr>
            <tr>
				<td class="inputan">Hari</td>
				<td><input type="text" name="hari" value="<?php echo $u->hari ?>"></td>
			</tr>
			<tr>
				<td class="inputan">Berat</td>
				<td><input type="text" name="berat" value="<?php echo $u->berat ?>"></td>
			</tr>
			<tr>
				<td><hr></td>
				<td><button style="background-color: #74c6fd;">Ubah</button></form><form action="<?php echo base_url(). 'hasilpanen/batal'; ?>"><button style="background-color: #d46161;">Batal</button></form></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</div>
</div>
    <div class="wall">
        <div class="walls"></div>
    </div>
</body>
</html>