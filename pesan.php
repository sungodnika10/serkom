<?php 
//menyisipkan file tes.php di sini
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Pesanan</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>

	<section id="header">
		<div class="menu-bar" style="background-color:#228B22">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid" >
					<a class="navbar-brand" href="index.php"><img src="images/logo_wonderful1.png" width="80px" height="80px"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="pesan.php"><b>Form Pesanan</b></a>
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
			<h3>Form Pemesanan</h3>
			<div class="row">
				<div class="panel-body">
					<!--membuat form untuk tambah data--><!-- Untuk menjawab C No.2 -->
					<form class="form-horizontal" action="" method="post">		
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required><br>
						<input type="number" name="no_identitas" class="form-control" placeholder="No Identitas" minlength="16" maxlength="16"><br>	
						<input type="number" name="no_hp" class="form-control" placeholder="No HP" required><br>
						<div class="col-sm-6">
							<select name="wisata" id="wisata" class="form-control">
								<option value="1">Curug Penganten - IDR 10.000</option>
								<option value="2">Hutan Pinus - IDR 15.000</option>
								<option value="3">Pancuran Pitu - IDR 10.000</option>
							</select>
						</div><br>
						<input type="date" name="jadwal_kunjungan" class="form-control" required><br>
						<input type="number" name="jumlah_pengunjung" id="dewasa" class="form-control" placeholder="Pengunjung Dewasa" required><br>
						<input type="number" name="jumlah_anak" id="anak" class="form-control" placeholder="Pengunjung Anak Anak" required><small id="emailHelp" class="form-text text-muted">Pengunjung anak-anak (usia dibawah 12 tahun) memperoleh potongan harga 50%.</small><br><br>
						<input type="number" id="hasil" class="form-control" placeholder="Total Bayar"><br>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="checky">
							<label class="form-check-label" for="flexCheckDefault">
								Saya dan atau rombongan telah membaca, memahami, dan setuju bedasarkan syarat dan ketentuan yang telah ditetapkan
							</label>
						</div><br>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" id="postme" class="btn btn-success" disabled>
									<span class="fa fa-save"></span> Simpan Pesanan</button>
									<button type="button" id="hitungtotal" class="btn btn-warning" onclick="hitungTotal()">
										<span class="fa fa-map"></span> Hitung Total</button>
										<a href="index.php" type="submit" class="btn btn-secondary">
											<span class="fa"></span> Cancel </a>									
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>

		<?php //fungsi untuk menghitung
		function hitung($a, $b){
			$hasil = $a * $b;
			return $hasil;
		}
		
		if ($_POST){
    	//Ambil data dari form
			$nama=$_POST['nama'];
			$no_identitas=$_POST['no_identitas'];
			//$number    = preg_match('@[0-9]@', $no_identitas);
				//if(strlen($no_identitas) < 16) {
				//echo 'harus masukan 16 digit NIK';}
			$no_hp=$_POST['no_hp'];
			$wisata=$_POST['wisata'];
			$jadwal_kunjungan=$_POST['jadwal_kunjungan'];
			$jumlah_pengunjung=$_POST['jumlah_pengunjung'];
			$jumlah_anak=$_POST['jumlah_anak'];
			if ($wisata==1){
				$harga=10000;
			}else if($wisata==2){
				$harga=15000;
			}else if($wisata==3){
				$harga=10000;
			}
			$tiket=$harga;
			$total = hitung($harga, $jumlah_pengunjung);        
			$potongan= hitung($harga, $jumlah_anak);
			$diskon= $potongan*0.5;
			$total_harga= $total + $diskon;

			

			$errors = array();
			if (strlen($no_identitas) < 16 ) {
				array_push($errors, "NIK harus 16");
			} else {
				if (strlen($no_identitas) > 16 ) {
					array_push($errors, "NIK harus 16");
				} else {


    		//buat sql
					$sql="INSERT INTO pemesanan VALUES ('','$nama','$no_identitas','$no_hp','$wisata','$jadwal_kunjungan',
					'$jumlah_pengunjung','$jumlah_anak','$tiket','$total','$potongan','$total_harga')";
					$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pemesanan Error");
					if($query){
						echo "<script>window.location.assign('pesanan.php');</script>";
					}else{
						echo "<script>alert('Simpan Data Gagal');<script>";
					}
				}
			}
		}

		?>

		<script> //fungsi untuk menghitung
		
		function hitungTotal(){
			var selectWisata = document.getElementById('wisata');
			var selectedValue = selectWisata.value;

			var pengunjungdewasa = document.getElementById('dewasa').value;
			var pengunjunganak = document.getElementById('anak').value;

			var harga=0;

			if(selectedValue == 1) {
				harga = 10000;
			} else if(selectedValue == 2) {
				harga = 15000;
			} else if(selectedValue == 3) {
				harga = 10000;
			}

			var hasil = (pengunjungdewasa*harga)+pengunjunganak*(harga/2);

			document.getElementById('hasil').value = hasil;
		}
	</script>

	<script>
			// Retrieve reference to checkbox
			const disableCheckBox = document.getElementById("checky");
			// Retrieve reference to button
			const submitButton = document.getElementById("postme");

			disableCheckBox.addEventListener("change", (e) => {
				if (e.target.checked) {
  			// Disable button when checkbox is selected
  			submitButton.disabled = false;
  		} else {
    		// Enable button when checkbox is deselected
    		submitButton.disabled = true;
    	}
    });
</script>
 
<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script>

</script>
</body>
</html>