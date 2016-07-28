<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
    <h1>Pesan Tiket</h1>
    </div>
      <!-- START THE FEATURETTES -->
      <?php
              include "koneksi.php";
              $link=koneksi_db();
              $a=$_GET['a'];
              $b=$_GET['b'];
      ?>
      <div class="row featurette">
        <div class="col-md-12">
          <h2><?php echo $data['kota']?> <span class="text-muted"></span></h2>
          <p class="lead">
            <div class="row">
              <?php
                $result=mysql_query("SELECT kd_lokasi,kota,lokasi FROM lokasi WHERE kd_lokasi='$a' ");
                $result2=mysql_query("SELECT kd_lokasi,kota,lokasi FROM lokasi WHERE kd_lokasi='$b' ");
                $asal=mysql_fetch_array($result);
                $tujuan=mysql_fetch_array($result2);
                ?>
                  <div class="col-sm-6">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <table class="table">
                          <tr>
                            <td><strong>Keberangkatan</strong></td>
                            <td><?php echo "$asal[kota], $asal[lokasi]"; ?></td>
                          </tr>
                          <tr>
                            <td><strong>Tujuan</strong></td>
                            <td><?php echo "$tujuan[kota], $tujuan[lokasi]"; ?></td><br>
                          </tr>
                          <tr>
                            <td><strong>Tanggal</strong></td>
                            <td><input class="form-control" name="tanggal" placeholder="Hari/Bulan/Tahun"></td><br>
                          </tr>
                          <tr>
                            <td><strong>Waktu</strong></td>
                            <td>
                              <?php
                                $sq3="SELECT jam_pergi FROM jadwal WHERE kd_lokasi_asal = '$asal[kd_lokasi]' AND kd_lokasi_tujuan = '$tujuan[kd_lokasi]' ORDER BY jam_pergi";
                                $res3=mysql_query($sq3,$link);
                                while ($data3=mysql_fetch_array($res3)) {
                                  echo "<div class='col-sm-4'><input type='radio' name='waktu' value='$data3[jam_pergi]'> $data3[jam_pergi]</div>";
                                }
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2" align="center">
                              <a href="tiket.php?a=<?php echo "$data2[kd_lokasi_asal]&b=$data2[kd_lokasi_tujuan]";?>" class="btn btn-md btn-primary">Beli Tiket</a>
                            </td>
                          </tr>
                          </table>
                      </div>
                    </div>
                  </div>
                  
               

            </div>
        </div>

      </div>
      <hr class="featurette-divider">
      


      <hr class="featurette-divider">

      
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php
        include "footer.php";
      ?>
  </body>
</html>
