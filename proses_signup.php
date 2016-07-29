<?php
	/*
	if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"] . "?er=1");
    }
	*/
	include "koneksi.php";


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
			header('Location: jadwal.php');
					
		}
		else
		{
        	header("Location: signup.php?er=2");
		}
?>
?>