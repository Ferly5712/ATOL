<?php 
	include "../koneksi.php";

	$kd_jadwal=$_POST['kd_jadwal'];
	$kd_asal=$_POST['kd_asal'];
	$kd_tujuan=$_POST['kd_tujuan'];
	$jam_berangkat=$_POST['jam_berangkat'];
	$jam_sampai=$_POST['jam_sampai'];
	$harga=$_POST['harga'];

	$link=koneksi_db();
	$sql="UPDATE jadwal SET kd_jadwal = '$kd_jadwal', kd_lokasi_asal = '$kd_asal', kd_lokasi_tujuan = '$kd_tujuan', jam_pergi = '$jam_berangkat', jam_tiba = '$jam_sampai', harga = '$harga' WHERE kd_jadwal='$kd_jadwal'";
	$res=mysql_query($sql,$link);
	if ($res) {
		header('Location: jadwal.php');

	}
	else{
		echo "<center<h1>Gagal Merubah Data</h1><br>";
		echo "Error :".mysql_error();
		echo "<br>Kembali<br>
				<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";

		}
 ?>