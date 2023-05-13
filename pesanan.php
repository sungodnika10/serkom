<?php 
//menyisipkan file tes.php di sini
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pesanan</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>

	<section id="header">
		<div class="menu-bar" style="background-color:#228B22" >
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php"><img src="images/logo_wonderful1.png" width="80px" height="80px" ></a>
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
								<a class="nav-link" href="pesanan.php"><b>Daftar Pesanan</b></a>
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
                       <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th><th>Nomor Identitas</th><th>Nomer Hp</th><th>Wisata</th><th>Jadwal_Kunjungan</th><th>Jumlah_Pengunjung</th><th>Total Harga</th><th>Aksi</th>
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
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) { //data disini adalah array //perulangan
                                $nomor++; //Penambahan satu untuk nilai var nomor

                                if ($data['wisata']==1){
                                    $wisata="Curug Penganten";
                                }else if($data['wisata']==2){
                                    $wisata="Hutan Pinus";
                                }else if($data['wisata']==3){
                                    $wisata="Pancuran Pitu";
                                } 

                                // var_dump($data); //var dump berfungsi untuk debuging

                                ?>
                                <tr>
                                    <td><?= $data['Nama'] ?></td>
                                    <td><?= $data['no_identitas'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $wisata ?></td>
                                    <td><?= $data['jadwal_kunjungan'] ?></td>
                                    <td><?= $data['jumlah_pengunjung']+$data['jumlah_anak'] ?></td>
                                    <td>Rp. <?= $data['total_harga'] ?></td>
                                    <td>
                                        <a href="detail.php?id=<?php echo $data['id']?>" class="btn btn-info btn-xs">Detail</a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>