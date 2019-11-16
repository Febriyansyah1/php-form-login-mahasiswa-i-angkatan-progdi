<?php
	$nama = $_POST["nama"];
	

	function jenis_kelamin(){
		$jkel = $_POST["jk"];
		if ($jkel == "Pria") {
			echo "Anda Adalah Mahasiswa <br>";
		}else{
			echo "Anda Adalah Mahasiswi <br>";
		}
		}
	
	function angkatan(){
		$ang = $_POST["nim"];
		$sub_ang = substr($ang, 2,4);
		echo $sub_ang;
	}
		
		
	function program_studi(){
		$pro = $_POST["nim"];
		$sub_pro = substr($pro, 0,2);

		$kode = $sub_pro;
		switch ($kode) {
			case 67:
				echo "S1 Teknik Informatika";
				break;
			case 68:
				echo "S1 Sistem Informasi";
				break;
			case 11:
				echo "S1 Pendidikan Bahasa Inggris";
				break;
			case 39:
				echo "S1 Sastra Inggris";
				break;
			case 85:
				echo "S1 Seni Musik";
				break;
			case 13:
				echo "S1 Bimbingan Konseling ";
				break;
			case 15:
				echo "S1 Pendidikan Sejarah ";
				break;
			case 16:
				echo "S1 Pendidikan Ekonomi ";
				break;
			case 17:
				echo "S1 Pendidikan Pancasila dan Kewarganegaraan";
				break;
			case 20:
				echo "S1 Pendidikan Matematika";
				break;
			case 27:
				echo "S1 Pendidikan Guru Pendidikan Anak Usia Dini";
				break;
			case 29:
				echo "S1 Pendidikan Guru Sekolah Dasar";
				break;
			case 94:
				echo "Magister Manajemen Pendidikan";
				break;
			case 21:
				echo "S1 Manajemen";
				break;
			case 22:
				echo "S1 Ilmu Ekonomi";
				break;
			case 23:
				echo "S1 Akuntansi";
				break;
			case 91:
				echo "S2 Manajemen";
				break;
			case 93:
				echo "S2 Akuntansi";
				break;
			case 92:
				echo "Doktor Ilmu Manajemen";
				break;
			case 31:
				echo "S1 Ilmu Hukum";
				break;
			case 32:
				echo "S2 Magister Ilmu Hukum";
				break;
			case 35:
				echo "Sosiologi";
				break;
			case 36:
				echo "S1 Komunikasi";
				break;
			case 37:
				echo "S1 Hubungan Internasional";
				break;
			case 71:
				echo "S1 Teologi";
				break;
			case 75:
				echo "S2 Sosiologi Agama";
				break;
			case 77:
				echo "S3 Sosiologi Agama";
				break;
			case 80:
				echo "S1 Psikologi";
				break;
			case 83:
				echo "S2 Sains Psikologi";
				break;
			case 06:
				echo "D4 Destinasi Pariwisata";
				break;
			case 90:
				echo "S3 Studi Pembangunan";
				break;
			case 19:
				echo "S1 Pendidikan Fisika";
				break;
			case 64:
				echo "S1 Fisika";
				break;
			case 65:
				echo "S1 Kimia";
				break;
			case 66:
				echo "S1 Matematika";
				break;
			case 61:
				echo "S1 Teknik Elektro";
				break;
			case 62:
				echo "S1 Sistem Komputer";
				break;
			case 51:
				echo "S1 Agroekoteknologi";
				break;
			case 52:
				echo "S1 Agribisnis";
				break;
			case 53:
				echo "S2 Magister Ilmu Pertanian";
				break;
			case 41:
				echo "S1 Biologi";
				break;
			case 42:
				echo "S2 Magister Biologi";
				break;
			case 43:
				echo "S1 Pendidikan Biologi";
				break;
			case 55:
				echo "D3 Komputerisasi Akuntansi";
				break;
			case 56:
				echo "D3 Teknik Informatika ";
				break;
			case 60:
				echo "S1 Hubungan Masyarakat ";
				break;
			case 70:
				echo "S1 Hubungan Internasional";
				break;
			case 74:
				echo "S1 Ilmu Perpustakaan";
				break;
			case 97:
				echo "S2 Sistem Informasi";
				break;
			case 98:
				echo "Doktor Ilmu Komputer";
				break;
			case 46:
				echo "S1 Keperawatan";
				break;
			case 47:
				echo "S1 Gizi";
				break;
			case 48:
				echo "S1 Pendidikan Jasmani Kesehatan dan Rekreasi";
				break;
			case 49:
				echo "S1 Teknologi Pangan";
				break;
			case 50:
				echo "Program Profesi Ners";
				break;
			
			default:
				echo "Tidak di temukan";
				break;
		}
	}

	echo "Selamat Datang ".$nama."<br>";
	jenis_kelamin();
	echo "Prodi ";
	program_studi();
	echo " Angkatan ";
	angkatan();

?>