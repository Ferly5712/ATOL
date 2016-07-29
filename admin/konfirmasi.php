<?php 
	include "../koneksi.php";

	$kd_pesan=$_GET['kd'];
	$a=$_GET['a'];

	$link=koneksi_db();
	$sql="UPDATE pemesanan SET status='$a' WHERE kd_pesan = '$kd_pesan' ";
	$res=mysql_query($sql,$link);
	if ($res) {
		header('Location: list_pembelian.php');

	}
	else{
		echo "$kd_pesan";
		echo "$a";
		echo "gagal";

		}
 ?>