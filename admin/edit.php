<?php 
//menyisipkan file tes.php di sini
include('../koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Pesanan</title>
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
								<a class="nav-link" href="../pesan.php"><b>Form Pesanan</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../grafik.php">Grafik Penumpang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../pesanan.php">Daftar Pesanan</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</section>

	<?php // ini adalah prosedur
		$id=$_GET['id'];
		$ambil=  mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id ='$id'") or die ("SQL Edit error");
		$data= mysqli_fetch_array($ambil);
	?>

	<section id="profile">
		<div class="container">
			<h3>Form Pemesanan</h3>
			<div class="row">
				<div class="panel-body">
					<!--membuat form untuk tambah data-->
					<form class="form-horizontal" action="" method="post">		
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required><br>
						<input type="date" name="jadwal_kunjungan" class="form-control" required><br>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-success">
									<span class="fa fa-save"></span> Simpan Pesanan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<?php
		if($_POST){
    	//Ambil data dari form
		$nama=$_POST['nama'];
    	$jadwal_kunjungan=$_POST['jadwal_kunjungan'];
 
    	//buat sql
    	$sql="UPDATE pemesanan SET Nama='$nama',jadwal_kunjungan='$jadwal_kunjungan' WHERE id ='$id'"; 
    	$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pemesanan Error");
    	if ($query){
    		echo "<script>window.location.assign('index.php');</script>";
    	}else{
    		echo "<script>alert('Simpan Data Gagal');<script>";
    	}
    }
    ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>