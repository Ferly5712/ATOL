<?php
	include "../koneksi.php";


		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		$link=koneksi_db();
		$sql="INSERT INTO pelanggan VALUES ('','$nama','$email','$no_hp','$username',md5('$password'))";
		$res=mysql_query($sql,$link);
		if($res)
		{
			header('Location: pelanggan.php');
					
		}
		else
		{
			echo "<center><h1>Gagal Menambahkan Data</h1><br>";
			echo "Error : ".mysql_error();
			echo "<br>Kembali<be>
				 <a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
					
		}
?>