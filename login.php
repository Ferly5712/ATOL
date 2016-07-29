<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $pw = md5($password);

  include "koneksi.php";
  $link=koneksi_db();
  $result=mysql_query("SELECT * FROM pelanggan WHERE username='$username' AND password='$pw' ");
  $row=mysql_fetch_array($result);
  if (($row['username']==$username) && ($row['password']==$pw))
  {
  	$_SESSION['id'] = $row['kd_pelanggan'];
  	$_SESSION['user'] = $username;
    header('Location: jadwal.php');
  }
  else{
  	echo "$password";
  	echo "salah";
  }
?>