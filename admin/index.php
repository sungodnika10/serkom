<?php 
//menyisipkan file tes.php di sini
include('../koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Pesanan - Admin</title>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>

	<section id="header">
		<div class="menu-bar" style="background-color:#228B22">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php"><img src="../images/logo_wonderful1.png" width="80px" height="80px"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="../pesanan.php">Daftar Pesanan</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</section>

	<section id="profile">
		<div class="container">
			<h3>List Pesanan - Admin</h3>
			<div class="row">
				<div class="card-body">
					<div class="table-responsive">
						<table id="dtwisata" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>Nama</th><th>Jadwal Kunjungan</th><th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<!--ambil data dari database, dan tampilkan kedalam tabel-->
								<?php
                  				//buat sql untuk tampilan data, gunakan kata kunci select
								$sql = "SELECT * FROM pemesanan";
								$query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                  				//Baca hasil query dari databse, gunakan perulangan untuk 
                  				//Menampilkan data lebh dari satu. disini akan digunakan
                  				//while dan fungsi mysqli_fecth_array
                  				//Membuat variabel untuk menampilkan nomor urut
								$nomor = 1;
                  				//Melakukan perulangan u/menampilkan data
								while ($result = mysqli_fetch_array($query)) {
                      			$nomor++; //Penambahan satu untuk nilai var nomor
                      			if ($result['wisata']==1){
                      			$wisata="Curug Penganten";
                      			}else if($result['wisata']==2){
                      			$wisata="Hutan Pinus";
                      			}else if($result['wisata']==3){
                      			$wisata="Pancuran Pitu";
                      			}
                      			?>
	                      	<tr>
		                      	<td><?= $result['Nama'] ?></td>
		                      	
		                      	<td><?= $result['jadwal_kunjungan'] ?></td>
		                      
		                      	<td>
		                      		<a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-warning btn-xs">Edit</a>
                              		<a href="hapus.php?id=<?php echo $result['id']?>" class="btn btn-danger btn-xs">Hapus</a>
                              	</td>
                      		</tr>
                      		<!--Tutup Perulangan data-->
                  		<?php } ?>
              		</tbody>
            	<tfoot></tfoot>
        	</table>
    	</div>
	</div>
</div>
</div>
</section>

<script src="js/bootstrap.min.js"></script>
</body>
</html>