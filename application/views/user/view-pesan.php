<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <title>Pesan</title>
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
        margin: 20px 20px 20px 20px;
        position: relative;
        width: 1100px;
        height: max-content;
        background-color: #fff;
        font-size: 20px;
        padding-bottom: 10px;
    }
    .table img{
        float: right;
        width: 400px;
        height: 400px;
        background-position: center;
        background-size: cover;
        transition: all .2s;
        display: flex;
    }
    .deskripsi{
        margin-top: 8px;
        font-size: 1.25rem;
        font-weight: 600;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }
    .tanggal,
    .alamat{
        margin-top: 8px;
        font-size: 1rem;
    }
    .alamat{
        font-weight: 500;
        display: -webkit-box;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }
    .harga{
        margin-top: 8px;
        width: 450px;
        height: 100px;
        display: flex;
        align-items: center;
        text-align: right;
        font-size: 30px;
        font-weight: 500;
        color: #af3c2b;
        background:rgb(245, 245, 245);
        padding-left: 10px;
    }
    .jumlah input{
        font-size: 20px;
        text-align: center;
        text-decoration: none;
        list-style: none;
        width: 100px;
    }
    h4{
        margin-top: 8px;
        font-weight: 400;
        font-size: 1rem;
    }
    .isi{
        margin: 10px;
    }
    .isi div{
        line-height: 25px;
        font-family: "montserrat",sans-serif;
    }
    .order{
        margin: 0px 20px 20px 20px;
        padding: 10px;
        position: relative;
        width: 1100px;
        height: max-content;
        background-color: #fff;
        font-size: 20px;
    }
    .order button{
        width: 200px;
        height: 60px;
        margin-inline: 100px;
        font-size: 1.25rem;
        font-family: "montserrat",sans-serif;
        background-color: rgb(150, 209, 55);
        box-shadow: 0px 0px 10px rgba(134, 134, 134, 0.333);
        align-items: center;
        justify-content: center;
        display: flex;
        float: right;
        border: none;
        transition: .2s;
        margin-top: 10px;
    }
    .order button:hover{
        font-size: 1.5rem;
        background-color: rgb(114, 166, 29);
    }
    .image{
        width: max-content;
        height: 61px;
        align-items: center;
        justify-content: center;
        display: flex;
    }
    .image ul{
        display: flex;
    }
    .image ul li{
        margin-right: 20px;
        width: 60px;
        height: 60px;
        align-items: center;
        justify-content: center;
        display: flex;
    }
    
    #bank1:checked ~ .image ul .bank1{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    #bank2:checked ~ .image ul .bank2{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    #bank3:checked ~ .image ul .bank3{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    #bank4:checked ~ .image ul .bank4{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    .bank1:hover{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    .bank2:hover{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    .bank3:hover{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
    }
    .bank4:hover{
        box-shadow: 0px 0px 10px rgba(59, 182, 254, 0.808);
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
</style>
</head>
<body>
<div class="wall"></div>
    <div class="head">
        <div class="header">
            <div class="bar">
                <a class="a" href="<?php echo base_url(). 'hasilpadi_user/batal'; ?>"><i class="fa-solid fa-angle-left"></i></a>
            </div> 
        </div>
    </div>
    <div style="width: 100%; display: grid; align-items: center; justify-content: center;">
        <?php
        include "database/database.php";
        foreach ($padi as $row) { ?>
        <div class="table">
            <div class="isi">
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $row->foto; ?>">
                <div class="deskripsi"><?php echo $row->deskripsi; ?></div>
                <div class="tanggal"><?php echo $row->tanggal; ?></div>
                <div class="alamat"><?php echo $row->alamat; ?></div>
                <div class="harga">Rp <?php echo number_format($row->harga,0,',','.'); ?></div>
                <h4>Jumlah</h4>
                <form action="<?php echo base_url(). 'pesan/tambah_aksi'; ?>" method="post">
                    <div class="jumlah"><input type="number" name="jumlah" size="5"></div>
                    <input type="text" name="tanggal" value="<?php echo date("d/F/o"); ?>" style="display: none;">
            </div>
        </div>
        <?php } ?>
        <div class="order">
                <input type="text" name="proses" value="pending" style="display: none;">
                <input type="text" name="deskripsi" value="<?php echo $row->deskripsi; ?>" style="display: none;">
                <button style="cursor: pointer;"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Order</button>
                <p>Pilih Metode Pembayaran :</p>
                <input type="radio" name="transaksi" id="bank1" value="BCA" style="display: none;">
                <input type="radio" name="transaksi" id="bank2" value="BNI" style="display: none;">
                <input type="radio" name="transaksi" id="bank3" value="BRI" style="display: none;">
                <input type="radio" name="transaksi" id="bank4" value="MANDIRI" style="display: none;">
            </form>
            <br>
            <div class="image">
                <ul>
                    <label for="bank1"><li class="bank1"><img src="<?php echo base_url(); ?>assets/img/bca.png" width="60"></li></label>
                    <label for="bank2"><li class="bank2"><img src="<?php echo base_url(); ?>assets/img/bni.png" width="60"></li></label>
                    <label for="bank3"><li class="bank3"><img src="<?php echo base_url(); ?>assets/img/bri.png" width="60"></li></label>
                    <label for="bank4"><li class="bank4"><img src="<?php echo base_url(); ?>assets/img/mandiri.png" width="60"></li></label>
                </ul>
            </div>
        </div>


    </div>
</body>
</html>