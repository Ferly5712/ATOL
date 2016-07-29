<?php 
	include "../koneksi.php";

	$kd_pelanggan=$_POST['kd_pelanggan'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$no_hp=$_POST['no_hp'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$link=koneksi_db();
	$sql="UPDATE pelanggan SET kd_pelanggan = '$kd_pelanggan', nama = '$nama', email = '$email', no_hp = '$no_hp', username = '$username', password = '$password' WHERE kd_pelanggan='$kd_pelanggan'";
	$res=mysql_query($sql,$link);
	if ($res) {
		header('Location: pelanggan.php');

	}
	else{
		echo "<center<h1>Gagal Merubah Data</h1><br>";
		echo "Error :".mysql_error();
		echo "<br>Kembali<br>
				<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";

		}
 ?>