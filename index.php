<!DOCTYPE html>
<html>
<head>
	<title>Serkom - Enjoy Baturaden</title>
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
								<a class="nav-link" href="#"><b>Beranda</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#profile">Tiket Wisata</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#alamat">Tentang Kami</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="banner text-center" style="background-color: #006400;">
			<img src="images/logo_wonderful1.png" width="200px" height="200px" style="margin-top: 80px;" >
			<h5 class="deskripsi">Enjoy Baturaden merupakan Website yang digunakan untuk mencari tiket wisata yang ada di Baturaden dengan menggunakan fitur website sehingga memudahkan guna mencari tiket wisata yang ada di Baturaden</h5>
		</div>
	</section>

	<section id="profile">
		<div class="container">
			<!-- Menampilkan Wisata --> <!-- Untuk menjawab C No.1 -->
			<h3>Wisata Baturaden</h3> 
			<div class="row">
				<div class="col-md-4">
					<div class="card "style="width: 20rem;">
						<img class="card-img-top" src="images/curug_penganten.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><b>Curug Penganten</b></h5>
							<p><b>Rp. 10.000</b></p>
							<p class="card-text">Obyek wisata ini berada di kawasan Dusun Wisata Kalipagu, sebuah daerah yang berada di wilayah Desa Ketenger, yang masih merupakan daerah wisata Baturraden.</p>
							<a href="curug.php" class="btn btn-primary" style="background-color: #006400;" >Detail Lainnya</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<img class="card-img-top" src="images/hutan_pinus.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><b>Hutan Pinus Limpakuwus</b></h5>
							<p><b>Rp. 15.000</b></p>
							<p class="card-text">Obyek wisata yang tengah viral ini terletak di sebelah timur kawasan wisata Baturraden, tepatnya di Desa Limpakuwus, Kecamatan Sumbang, Kabupaten Banyumas.</p>
							<a href="hutan.php" class="btn btn-primary" style="background-color: #006400;" >Detail Lainnya</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 20rem;">
						<img class="card-img-top" src="images/pancuran_pitu.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><b>Pancuran Pitu</b></h5>
							<p><b>Rp. 10.000</b></p>
							<p class="card-text">Obyek wisata ini menawarkan keunikan alam berupa air panas. Pancuran Pitu berlokasi di Lokawisata Baturaden, Kalipagu, Ketenger, Kec. Baturaden, Kab. Banyumas, Jawa Tengah.</p>
							<a href="pancuran.php" class="btn btn-primary" style="background-color: #006400;" >Detail Lainnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="alamat">
		<div class="container text-center" >
			<h3>Tentang Kami</h3>
			<div class="row">
				<div class="col-md-6">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/h1Nl9H7NA90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<ul>
						<li>		
							<i class="fa fa-map-marker fa-2x" aria-hidden="true"style="color:#228B22"></i>
							<span>Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul</span>
						</li>
						<li>	
							<i class="fa fa-phone fa-2x" aria-hidden="true"style="color:#228B22"></i>
							<span>+62 89520310776</span>
						</li>
						<li>	
							<i class="fa fa-envelope fa-2x" aria-hidden="true"style="color:#228B22"></i>
							<span>18102153@ittelkom-pwt.ac.id</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="footer" class="text-center" style="background-color: #006400">
		<img src="images/logo_wonderful1.png" width="200px" height="200px" class="footer-image">
		<hr>
		<p>Made With <i class="fa fa-road"></i> Serkom - Enjoy Baturaden</p>
	</section>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>