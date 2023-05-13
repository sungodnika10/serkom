<?php //cek dahulu, jika tombol hitung di klik
if(isset($_POST['hitungtotal'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

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

		?>
	?>