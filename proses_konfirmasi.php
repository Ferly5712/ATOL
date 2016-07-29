<?php 
	include "koneksi.php";

	$kd_pesan=$_POST['kd_pesan'];

	$link=koneksi_db();
	$sql="UPDATE pemesanan SET status=1 WHERE kd_pesan='$kd_pesan'";
	$res=mysql_query($sql,$link);
	if ($res) {
		header('Location: mybook.php');

	}
	else{
		echo "<center<h1>Gagal Merubah Data</h1><br>";
		echo "Error :".mysql_error();
		echo "<br>Kembali<br>
				<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";

		}
 ?>