<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hasil Panen</title>
    <style>
body{
	margin: 0;
	padding: 0;
	list-style: none;
	text-decoration: none;
    box-sizing: border-box;
}
table {
    border-collapse: collapse;
}
.table-table{
    top: 0;
    background-color: #ffffff;
    color: #000;
}
.table-table tr th{
    border:1px solid;
    padding-left: 5px;
    text-align: left;
}
.table-table tr td{
    height: 40px;
    border:1px solid;
    padding-left: 5px;
    text-align: left;
}
    </style>
</head>
<body>
<table class="table-table">
    <thead>
        <tr id="atas">
            <th style="width:3%;">No</th>
            <th id="atas-table">Tanggal</th>
            <th id="atas-table">Jenis Padi</th>
            <th id="atas-table">Hasil Panen</th>
            <th id="atas-table">Hari</th>
            <th id="atas-table">Berat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($panen as $row) { ?>
            <tr id="bawah">
                <td style="text-align:center; padding-left: 0px;"><?php echo $no++; ?></td>
                <td><?php echo $row->tanggal; ?></td>
                <td><?php echo $row->jenis_padi; ?></td>
                <td><?php echo $row->hasil_panen; ?> Karung</td>
                <td><?php echo $row->hari; ?> Hari</td>
                <td><?php echo $row->berat; ?> Kg</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script type="text/javascript">
        window.print();
</script>
</body>
</html>