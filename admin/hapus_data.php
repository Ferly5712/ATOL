<?php
	$kd = $_GET['kd'];
	$tabel = $_GET['tabel'];

	$link=koneksi_db();
	$sql="DELETE FROM $tabel WHERE kd_mk='$kd'"; //susunSQL
	$res=mysql_query($sql,$link);
	if ($res) {
		echo "<center><h1>Sukse Menghapus Data $id</h1>";
		echo "untuk melihatnya silakan klik<br>
				<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
				//header('Location: menu_utama.php?menu=mata_kuliah&action=tampil');
	}
	else{
		echo "<center<h1>Gagal Menghapus Data</h1><br>";
		echo "Error :".mysql_error();
		echo "<br>Kembali<br>
		<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
	}
?>