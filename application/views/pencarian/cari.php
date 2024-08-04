<?php 
if(isset($_POST['cari'])){
    $cari = $_POST['cari'];
    $data = mysqli_query($koneksi,"SELECT * from pesan where id_user like '%".$cari."%' or proses like '%".$cari."%' or alamat like '%".$cari."%' or deskripsi like '%".$cari."%' or nomorhp like '%".$cari."%' or transaksi like '%".$cari."%'");
}else{
    $data = mysqli_query($koneksi,"SELECT * from pesan");
}
$no = 1;
?>