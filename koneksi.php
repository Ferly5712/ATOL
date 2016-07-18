<?php
	function koneksi_db()
	{
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = 'atol_finall';
		
		$link = mysql_connect($server,$username,$password);
		if (!$link)
		{
			die('Could not connect' . mysql_error());
		}
		
		$db = mysql_select_db($database);
		if (!$db)
		{
			die(' Error : '.mysql_error());
		}
		
		return $link;
	}
?>