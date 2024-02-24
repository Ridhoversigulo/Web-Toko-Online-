<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$deskripsi=$_POST['deskripsi'];
$status_produk=$_POST['status_produk'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into produk(nama_produk,harga,stok,deskripsi,status_produk) 
                        values ('$nama_produk', '$harga', '$stok', '$deskripsi', '$status_produk')");

if($simpan==true){

    header("location:tampil-data-penjualan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

if($ubah==true){

  echo"<script>alert('Update profile sukses');document.location.href='profile.php';</script>";
} else{
  echo"<script>alert('Update profile gagal');document.location.href='profile.php';</script>";
}

?>


?>