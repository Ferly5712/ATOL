<?php
	include "../koneksi.php";
	$kd = $_GET['kd'];
	$t = $_GET['t'];
	if ($t == "pelanggan") {
		$tabel = "pelanggan";
		$prim = "kd_pelanggan";
	}
	else if ($t == "jadwal") {
		$tabel = "jadwal";
		$prim = "kd_jadwal";
	}
	else if ($t == "user") {
		$tabel = "user";
		$prim = "id";
	}

	$link=koneksi_db();
	$sql="DELETE FROM $tabel WHERE $prim ='$kd'"; //susunSQL
	$res=mysql_query($sql,$link);
	if ($res) {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else{
		echo "<center<h1>Gagal Menghapus Data</h1><br>";
		echo "Error :".mysql_error();
		echo "<br>Kembali<br>
		<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
	}
?>