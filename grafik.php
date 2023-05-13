<?php 
//menyisipkan file tes.php di sini
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Grafik Pengunjung</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

	<section id="header">
		<div class="menu-bar" style="background-color:#228B22">
			<nav class="navbar navbar-expand-lg navbar-light" >
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
								<a class="nav-link" href="grafik.php"><b>Grafik Penumpang</b></a>
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
			<h3>Grafik Pemesanan Tiket Wisata</h3>
			<div class="row">
				<div>
					<canvas id="myChart"></canvas>
				</div>	
			</div>
		</div>
	</section>

	<script>
		const labels = [
		'Curug Penganten',
		'Hutan Pinus',
		'Pancuran Pitu',
		];

		const data = {
			labels: labels,
			datasets: [{
				label: 'List Pemesanan Tiket',
				backgroundColor: 'rgb(255, 99, 132)',
				borderColor: 'rgb(255, 99, 132)',
				data: [ 
				<?php 
				$jumlah_1 = mysqli_query($koneksi,"select * from pemesanan where wisata='1'");
				echo mysqli_num_rows($jumlah_1);
				?>, 
				<?php 
				$jumlah_2 = mysqli_query($koneksi,"select * from pemesanan where wisata='2'");
				echo mysqli_num_rows($jumlah_2);
				?>, 
				<?php 
				$jumlah_3 = mysqli_query($koneksi,"select * from pemesanan where wisata='3'");
				echo mysqli_num_rows($jumlah_3);
				?>,
				],
			}]
		};

		const config = {
			type: 'line',
			data: data,
			options: {}
		};

		var myChart = new Chart(
			document.getElementById('myChart'),
			config
			);
		</script>


		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>