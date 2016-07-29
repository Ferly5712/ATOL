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
      ?>
      <div class="row featurette">
        <div class="col-md-12">
          <h2><?php echo $data['kota']?> <span class="text-muted"></span></h2>
          <p class="lead">
            <div class="row">
              <?php
                $sql="SELECT * FROM pemesanan WHERE kd_pelanggan = '$kd_pelanggan' ";
                $res=mysql_query($sql,$link);
                if (mysql_num_rows ($res)>=1) {?>
                  <div class="col-sm-12">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <table class="table">
                          <tr>
                            <th><strong>Kode Pesan</strong></th>
                            <th><strong>Kode Jadwal</strong></th>
                            <th><strong>Keberangkatan</strong></th>
                            <th><strong>Tujuan</strong></th>
                            <th><strong>Jumlah</strong></th>
                            <th><strong>Total</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>Aksi</strong></th>
                          </tr>
                          <?php
                          while ($data=mysql_fetch_array($res)) 
                          {?>
                            <tr>
                              <td><?php echo $data['kd_pesan'];?></td>
                              <td><?php echo $data['kd_jadwal'];?></td>
                              <td><?php echo $data[''];?></td>
                              <td><?php echo $data[''];?></td>
                              <td><?php echo $data['jumlah'];?></td>
                              <td>Rp. <?php echo $data['total'];?></td>
                              <td>
                                <?php
                                                    if ($data['status']=="0") {
                                                        echo "<span class='label label-danger'>Pending</span>";
                                                    }
                                                    elseif ($data['status']=="1") {
                                                        echo "<span class='label label-warning'>konfirmasi</span>";
                                                    }
                                                    elseif ($data['status']=="2") {
                                                        echo "<span class='label label-success'>Lunas</span>";
                                                    }
                                                ?>
                              </td>
                              <td>
                                <?php
                                  if ($data['status']=="0") {
                                    echo "<a href='#' class='btn btn-sm btn-warning'>Konfirmasi</a>";
                                  }
                                ?>
                              </td>
                            </tr>
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
      


      <hr class="featurette-divider">

      
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php
        include "footer.php";
      ?>
  </body>
</html>
