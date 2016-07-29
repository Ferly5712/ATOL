<body bgcolor="#659d7">
<?php 
	include "koneksi.php";
	if (!empty($_POST['kd_pesan']))
	{
		//Deklarasi Variabel
		$kd_pesan = $_POST['kd_pesan'];
		//upload foto
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = $_FILES['foto']['type'];
		$nama_file = $_FILES['foto']['name'];
		$direktori = "images/konfirmasi/$nama_file";
		$extensi = pathinfo($direktori,PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file,$direktori);
		$link=koneksi_db();
		$sql = "INSERT INTO pemesanan(bukti) 
		VALUES
		('$kd_pesan.$extensi');"; //susun SQL
		$res = mysql_query($sql,$link);
		if ($res) 
		{
			echo "<center><h1>Sukses Menambah Data $nim</h1><br>";
			echo "untuk melihatnya silakan klik <br> <a href='menu_utama.php?menu=mahasiswa&action=tampil'>Link ini</a></center>";
			//header('Location: menu_utama.php?menu=mahasiswa&action=tampil');
			if (!empty($lokasi_file)) 
			{
				//merubah nama foto
				rename("images/konfirmasi/$nama_file","images/konfirmasi/$nim.extensi");
			}
		}
		else
		{
			echo "<center<h1>Gagal Menambah Data</h1><br>";
			echo "Error : ".mysql_error();
			echo "<br>Kembali<br><a href='menu_utama.php?menu=mahasiswa&action=tampil'>Link ini</a></center>";
		}
	}
 ?>
	
</body>