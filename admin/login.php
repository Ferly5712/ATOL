<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $pw = md5($password);

  

  include "../koneksi.php";
  $link=koneksi_db();
  $sql="SELECT * FROM user WHERE username = '$username' AND password = '$pw' ";
  $res=mysql_query($sql,$link);
  if (mysql_num_rows ($res)>=1) {
    $_SESSION['nama'] = $username;
    $_SESSION['priv'] = $res['priv'];
    header('Location: dashboard.php');
  }
  else{
    header('Location: index.php?er=1');
  }
  //
?>