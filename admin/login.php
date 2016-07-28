<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $_SESSION['nama'] = $username;

  include "../koneksi.php";
  /*$link=koneksi_db();
  $sql="SELECT * FROM pelanggan ORDER BY nama";
  $res=mysql_query($sql,$link);
  while ($data=mysql_fetch_array($res)) {
  }*/
  header('Location: dashboard.php');
?>