<?php
	include "../koneksi.php";


		$kd_lokasi = $_POST['kd_lokasi'];
		$kota = $_POST['kota'];
		$lokasi = $_POST['lokasi'];
		
		$link=koneksi_db();
		$sql="INSERT INTO lokasi VALUES ('$kd_lokasi','$kota','$lokasi')";
		$res=mysql_query($sql,$link);

		if($res)
		{
			header('Location: lokasi.php');
					
		}
		else
		{
			echo "<center><h1>Gagal Menambahkan Data</h1><br>";
			echo "Error : ".mysql_error();
			echo "<br>Kembali<be>
				 <a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
					
		}
?>