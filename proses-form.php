
<?php

include "koneksi.php";
$nama_pelanggan = $koneksi->real_escape_string($_POST['nama_pelanggan']); 
$no_hp = $koneksi->real_escape_string($_POST['no_hp']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$nama_barang = $koneksi->real_escape_string($_POST['nama_barang']);
$jenis_barang = $koneksi->real_escape_string($_POST['jenis_barang']);
$jumlah_barang = $koneksi->real_escape_string($_POST['jumlah_barang']);
$tanggal_pembelian = $koneksi->real_escape_string($_POST['tanggal_pembelian']);


$simpan=$koneksi->query("insert into form(nama_pelanggan,no_hp,alamat,nama_barang,jenis_barang,jumlah_barang,tanggal_pembelian) 
                        values ('$nama_pelanggan', '$no_hp', '$alamat', '$nama_barang', '$jenis_barang', '$jumlah_barang', '$tanggal_pembelian')");

if($simpan==true){

    header("location:form.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>