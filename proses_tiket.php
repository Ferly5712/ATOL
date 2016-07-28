<?php
	include "koneksi.php";


		$kd_lokasi_asal = $_POST['kd_lokasi_asal'];
		$kd_lokasi_tujuan = $_POST['kd_lokasi_tujuan'];
		$tanggal = $_POST['tanggal'];
		$waktu = $_POST['waktu'];
		$jumlah = $_POST['jumlah'];

		
		$link=koneksi_db();
		$result=mysql_query("SELECT kd_jadwal,harga FROM jadwal WHERE kd_lokasi_asal='$kd_lokasi_asal' AND kd_lokasi_tujuan='$kd_lokasi_tujuan' AND jam_pergi='$waktu' ");
        $row=mysql_fetch_array($result);
        $total=$jumlah*$row['harga'];

		
		$sql="INSERT INTO pemesanan VALUES ('','$row[kd_jadwal]','$tanggal','$jumlah','$total','$status')";
		$res=mysql_query($sql,$link);
		if($res)
		{
			header('Location: tiket.php');
					
		}
		else
		{
			echo "<center><h1>Gagal Menambahkan Data</h1><br>";
			echo "Error : ".mysql_error();
			echo "<br>Kembali<be>
				 <a href='tiket.php'>Link ini</a></center>";
					
		}
		
?>