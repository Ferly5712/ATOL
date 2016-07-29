<?php
	include "../koneksi.php";


		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$priv = $_POST['priv'];
		
		
		$link=koneksi_db();
		$sql="INSERT INTO user VALUES ('','$username',md5('$password'),'$priv','$nama')";
		$res=mysql_query($sql,$link);
		if($res)
		{
			header('Location: user.php');
					
		}
		else
		{
			echo "<center><h1>Gagal Menambahkan Data</h1><br>";
			echo "Error : ".mysql_error();
			echo "<br>Kembali<be>
				 <a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>";
					
		}
?>