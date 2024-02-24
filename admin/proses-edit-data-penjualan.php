<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['produk_id'];
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$deskripsi=$_POST['deskripsi'];
$status_produk=$_POST['status_produk'];

$ubah=$koneksi->query("update produk set nama_produk='$nama_produk', harga='$harga', stok='$stok', deskripsi='$deskripsi', status_produk='$status_produk' where produk_id='$id'");

if($ubah==true){

    header("location:tampil-data-penjualan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>