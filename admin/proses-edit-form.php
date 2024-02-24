<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['form_id'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang$_POST['jenis_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];

$ubah=$koneksi->query("update form set nama_pelanggan='$nama_pelanggan', no_hp='$no_hp', alamat='$alamat', nama_barang='$nama_barang', jenis_barang='$jenis_barang', jumlah_barang='$jumlah_barang', tanggal_pembelian='$tanggal_pembelian' where form_id='$id'");

if($ubah==true){

    header("location:tampil-form.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>