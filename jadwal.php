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
    <h1>Jadwal Keberangkatan</h1>
    </div>
      <!-- START THE FEATURETTES -->
      <?php
              include "koneksi.php";
              $link=koneksi_db();
              $sql="SELECT * FROM lokasi GROUP BY kota ORDER BY kota";
              $res=mysql_query($sql,$link);
              while ($data=mysql_fetch_array($res)) {
                                    ?>

      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading"><?php echo $data[kota]?> <span class="text-muted"></span></h2>
          <p class="lead">
            <div class="row">
              <?php
                $sq="SELECT * FROM jadwal a JOIN lokasi b ON a.kd_lokasi_asal = b.kd_lokasi WHERE b.kota='$data[kota]' GROUP BY a.kd_lokasi_asal,a.kd_lokasi_tujuan ORDER BY b.kd_lokasi";
                $ress=mysql_query($sq,$link);
                while ($data2=mysql_fetch_array($ress)) {
                  $result=mysql_query("SELECT kd_lokasi,kota,lokasi FROM lokasi WHERE kd_lokasi='$data2[2]' ");
                  $row=mysql_fetch_array($result);
                  ?>
                  
                    <div class="col-sm-4">
                      <div class="panel panel-primary">
                        <div class="panel-body">
                          <table class="table">
                            <tr>
                              <td>Keberangkatan</td>
                              <td><?php echo "$data2[kota], $data2[lokasi]"; ?></td>
                            </tr>
                            <tr>
                              <td>Tujuan</td>
                              <td><?php echo "$row[kota], $row[lokasi]"; ?></td><br>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <?php
                                  $sq3="SELECT jam_pergi FROM jadwal WHERE kd_lokasi_asal = '$data2[kd_lokasi]' AND kd_lokasi_tujuan = '$row[kd_lokasi]' ORDER BY jam_pergi";
                                  $res3=mysql_query($sq3,$link);
                                  while ($data3=mysql_fetch_array($res3)) {
                                    echo "<div class='col-sm-3'>$data3[jam_pergi]</div>";
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
                  
                <?php
                }
              ?>

            </div>
        </div>

      </div>
      <?php } ?>


      <hr class="featurette-divider">

      
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      
     </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
