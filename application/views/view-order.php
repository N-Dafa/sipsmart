<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>orderan</title>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
    }
    .head{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .header{
        width: 100%;
        height: 150px;
        background-color: #1a1a1aab;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .bar{
        margin-inline: 20px;
        width: 1100px;
    }
    .header a{
        display: flex;
        align-items: center;
        list-style: none;
        text-decoration: none;
        width: min-content;
        height: 60px;
        width: 120px;
        padding: 0px 15px;
        font-size: 40px;
        border-radius: 40px;
        border: 1px solid;
        background-color: rgb(150, 209, 55);
        color: black;
        transition: .4s;
        justify-content: right;
    }
    .header i{
        transition: .2s;
    }
    .header a:hover i{
        padding-right: 60px;
    }
    .table{
        font-family: "montserrat",sans-serif;
        margin: 20px 20px 20px 20px;
        padding: 20px;
        position: relative;
        width: 1100px;
        height: max-content;
        background-color: #fff;
        font-size: 20px;
        padding-bottom: 10px;
    }
    .table .isi{
        border-collapse: collapse;
    }
    .table #atas th{
        height: 50px;
        border-bottom: 1px solid;
    }
    .table #bawah td{
        height: 40px;
        border-bottom: 1px solid;
    }
    .table #bawah input{
        width: max-content;
        height: 30px;
        padding-inline: 10px;
        font-size: 15px;
        background-color: rgb(150, 209, 55);
    }
    .wall{
        background: rgb(245, 245, 245);
        background-size: cover;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
    }
    #atas th{
        text-align: left;
    }
    #deskripsi{
        width: 200px;
        margin-right: 10px;
    }
    .deskripsi{
        height: 25px;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
    }
</style>
</head>
<body>
<div class="wall"></div>
    <div class="head">
        <div class="header">
            <div class="bar">
                <a class="a" href="<?php echo base_url(). 'hasilpadi/batal'; ?>"><i class="fa-solid fa-angle-left"></i></a>
            </div> 
        </div>
    </div>
    <div style="width: 100%; display: grid; align-items: center; justify-content: center;">
        <table class="table">
            <div class="isi">
                <tr id="atas">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th id="deskripsi">Deskripsi</th>
                    <th style="padding-left: 10px;">Transaksi</th>
                    <th>Jumlah</th>
                    <th>Proses</th>
                    <th>Status</th>
                </tr>
                <?php
                include "database/database.php";
                $no=1;
                foreach ($pesan as $row){ 
                    ?>
                    <tr id="bawah">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->tanggal; ?></td>
                        <td class="deskripsi"><?php echo $row->deskripsi; ?></td>
                        <td style="padding-left: 10px;"><?php echo $row->transaksi; ?></td>
                        <td><?php echo $row->jumlah; ?></td>
                        <td>
                            <form action="<?php echo base_url(). 'pesan/tambah_proses'; ?>" method="post">
                                <input type="submit" name="proses" value="packing" id="proses">
                            </form>
                        </td>
                        <td><?php echo $row->proses; ?></td>
                    </tr>
                <?php 
                }
                ?>
            </div>
        </table>
    </div>
</body>
</html>