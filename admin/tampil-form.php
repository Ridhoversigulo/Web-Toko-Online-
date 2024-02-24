<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Pesanan Barang</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nama</th><th>Nomor Telepon</th><th>Alamat</th><th>Nama Barang</th><th>Jenis Barang</th><th>Jumlah Barang</th><th>Tanggal Pembelian</th>




                <th>
                    <a href="input-form.php">
                        <button class="btn btn-success glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from form order by no_hp ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama_pelanggan']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['alamat']?></td>
                 <td><?php echo $row['nama_barang']?></td>
                  <td><?php echo $row['jenis_barang']?></td>
                   <td><?php echo $row['jumlah_barang']?></td>
                    <td><?php echo $row['tanggal_pembelian']?></td>
                <td>

                <a href="edit-form.php?id=<?php echo $row['form_id']?>">
                    <button class="btn btn-xs btn-primary glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-form.php?id=<?php echo $row['form_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>