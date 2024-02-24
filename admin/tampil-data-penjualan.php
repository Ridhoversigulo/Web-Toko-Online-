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
        <h1>Data Penjualan</h1>
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
                <th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Deskripsi</th><th>Status Produk</th>
                <th>
                    <a href="input-data-penjualan.php">
                        <button class="btn btn-success glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from produk order by harga ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama_produk']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['stok']?></td>
                <td><?php echo $row['deskripsi']?></td>
                <td><?php echo $row['status_produk']?></td>
                <td>

                <a href="edit-data-penjualan.php?id=<?php echo $row['produk_id']?>">
                    <button class="btn btn-xs btn-primary glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-data-penjualan.php?id=<?php echo $row['produk_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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