<?php 
//menyisipkan file tes.php di sini
include('koneksi.php');
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Pesanan</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>

	<section id="header">
		<div class="menu-bar" style="background-color:#228B22">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php"><img src="images/logo_wonderful1.png" width="80px" height="80px"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="pesan.php">Form Pesanan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="grafik.php">Grafik Pengunjung</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="pesanan.php">Daftar Pesanan</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</section>

	<section id="profile">
		<div class="container">
			<h3>Daftar Pesanan</h3>
			<div class="row">
				<div class="card-body">
					<div class="table-responsive">
						<div class="panel-body">
							<!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pemesanan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                     if ($data['wisata']==1){
                                    $wisata="Curug Penganten";
                                }else if($data['wisata']==2){
                                    $wisata="Hutan Pinus";
                                }else if($data['wisata']==3){
                                    $wisata="Pancuran Pitu";
                                }
                    
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Nama</td> <td><?= $data['Nama'] ?></td>
                        </tr>
						<tr>
                            <td>Nomer Identitas</td> <td><?= $data['no_identitas'] ?></td>
                        </tr>
                        <tr>
                            <td>Wisata</td> <td><?= $wisata ?></td>
                        </tr>
                        <tr>
                            <td>Jadwal Kunjungan</td> <td><?= $data['jadwal_kunjungan'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah Pengunjung</td> <td><?= $data['jumlah_pengunjung'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Anak</td> <td><?= $data['jumlah_anak'] ?></td>
                        </tr>
                        	<tr>
                            <td>Harga Tiket</td> <td>Rp. <?= $data['tiket'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Tiket Anak</td> <td>Rp. <?= $data['potongan'] /2 ?></td>
                        </tr>
						<tr>
                            <td><b>Total Bayar</b></td> <td>Rp. <?= $data['total_harga'] ?></td>
                        </tr>
                    </table>
						</div> 
						<!--end panel-body-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>