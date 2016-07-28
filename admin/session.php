<?php
	session_start();
	
	if ($_SESSION['nama'] == "") {
		header('Location: index.php');
	}
	else{

	}

?>