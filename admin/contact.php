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
        <h1>Kontak Pesan</h1>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Kritik dan Saran</th><th></th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from komentar");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td>
                  <b><?php echo $row['nama']?></b> (<?php echo $row['email']?>) -- <?php echo $row['date']?> <br>
                 "<i><?php echo $row['pesan']?></i>"
               </td>
                <td>
                <a href="hapus-contact.php?id=<?php echo $row['komentar_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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