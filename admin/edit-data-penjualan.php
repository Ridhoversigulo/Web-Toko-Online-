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
                <form action="proses-edit-data-penjualan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from produk where produk_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama_barang">Nama Produk</label>
                        <input type="hidden" name="produk_id" value="<?php echo $row['produk_id']?>" class="form-control">
                        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>

                      <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" value="<?php echo $row['stok']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"><?php echo $row['deskripsi']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status_produk">Status Produk</label>
                        <select name="status_produk" class="form-control">
                            <option value="<?php echo $row['status_produk']?>" selected><?php echo $row['status_produk']?></option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>

                    

                    

                    <br><br><input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>