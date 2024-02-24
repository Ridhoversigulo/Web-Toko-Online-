<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Penjualan Produk</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Deskripsi</th>
							<th>Status Produk</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from produk order by harga ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nama_produk']?></td>
							<td><?php echo $row['harga']?></td>
							<td><?php echo $row['stok']?></td>
							<td><?php echo $row['deskripsi']?></td>
							<td><?php echo $row['status_produk']?></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
<?php include "footer.php"; ?>