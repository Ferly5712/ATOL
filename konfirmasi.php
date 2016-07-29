<?php
  include "session.php";
  if ($_SESSION['user'] == "") {
    header('Location: signup.php?er=1');
  }
  else{

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Travel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    
    <!-- navbar -->
    <?php include "navbar.php";?>
    <!-- navbar -->
    <br>
    <br>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    <div class="panel-heading">
    <h1>Pesanan saya</h1>
    </div>
      <!-- START THE FEATURETTES -->
      <?php
              include "koneksi.php";
              $link=koneksi_db();
              $kd_pelanggan = $_SESSION['id'];
              $kd_pesan = $_GET['kd'];
      ?>
      <div class="row featurette">
        <div class="col-md-6">
          <h2><?php echo $data['kota']?> <span class="text-muted"></span></h2>
          <p class="lead">
            <div class="row">
              <?php
                $sql="SELECT * FROM pemesanan WHERE kd_pesan = '$kd_pesan' ";
                $res=mysql_query($sql,$link);
                if (mysql_num_rows ($res)>=1) {?>
                  <div class="col-sm-12">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <table class="table">
                          <?php
                          while ($data=mysql_fetch_array($res)) 
                          {
                            $result=mysql_query("SELECT * FROM jadwal WHERE kd_jadwal='$data[kd_jadwal]' ");
                            $row=mysql_fetch_array($result);

                            $result2=mysql_query("SELECT * FROM lokasi WHERE kd_lokasi='$row[kd_lokasi_asal]' ");
                            $asal=mysql_fetch_array($result2);

                            $result3=mysql_query("SELECT * FROM lokasi WHERE kd_lokasi='$row[kd_lokasi_tujuan]' ");
                            $tujuan=mysql_fetch_array($result3);
                            ?>
                            <tr>
                              <td>Kode Pesanan</td>
                              <td><?php echo $data['kd_pesan'];?></td>
                              <td>Kode Jadwal</td>
                              <td><?php echo $data['kd_jadwal'];?></td>
                            </tr>
                            <tr>
                              <td colspan="2">Keberangkatan</td>
                              <td colspan="2"><?php echo "$asal[kota], $asal[lokasi]";?></td>
                            </tr>
                            <tr>
                              <td colspan="2">Tujuan</td>
                              <td colspan="2"><?php echo "$tujuan[kota], $tujuan[lokasi]";?></td>
                            </tr>
                            <tr>
                              <td colspan="2">Jumlah</td>
                              <td colspan="2"><?php echo $data['jumlah'];?></td>
                            </tr>
                            <tr>
                              <td colspan="2">Total</td>
                              <td colspan="2">Rp. <?php echo $data['total'];?></td>
                            </tr>
                            <tr>
                              <td colspan="4">Silakan transfer sesuai nominal yang tertera ke salah satu nomor rekening berikut</td>
                            </tr>

                            <tr>
                              <td>No Rekening :<br>a/n : Night Howl Travel</td>
                              <td><img src="images/logo bri.png" width="70px"></td>
                              <td><img src="images/Logo mandiri.png" width="100px"></td>
                              <td><img src="images/Logo-Bca.png" width="100px"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>036 761 283 632 351</td>
                              <td>138-89-4356285-6</td>
                              <td>173 303 5474</td>
                            </tr>
                            <tr>
                              <td colspan="2">Bukti Pembayaran</td>
                              <form role="form" action="proses_konfirmasi.php" method="post">
                                <input type="hidden" value="<?php echo $data[kd_pesan] ?>" name="kd_pesan">
                              <td colspan="2"><input type="file" name="foto" value="cari"></td>
                            </tr>
                            <tr>
                              <td colspan="4" align="center"><button type="submit" class="btn btn-primary">Konfirmasi</button>
                            </tr>
                            </form>
                          <?php 
                          } ?>
                        </table>
                      </div>
                    </div>
                  </div>
                <?php 
                }
                else{
                  echo "<div class='alert alert-info' role='alert'><strong>Anda belum pernah memesan tiket,</strong> <a href='jadwal.php'>Pesan Sekarang</a></div>";
                }
                
                ?>
            </div>
        </div>

      </div>
  </body>
</html>
