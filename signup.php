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
    <h1>Daftar Baru</h1>
    </div>
      <!-- START THE FEATURETTES -->
      <?php
              

              if (isset($_GET['er'])) { 
                if ($_GET['er']==1) {
                  ?>
                  <div class="alert alert-info" role="alert">
                    <strong>Untuk Melanjutkan,</strong> Silakan Mendaftar Terlebih Dahulu, Atau <u>Login</u> Bila Sudah Mendaftar 
                  </div>                  
                  <?php
                }
                elseif ($_GET['er']==2) {
                  ?>
                  <div class="alert alert-danger" role="alert">
                    <strong>Gagal Mendaftar,</strong> username sudah digunakan
                  </div>                  
                  <?php
                

                }
              
              }
              
      ?>
      <div class="row featurette">
        <div class="col-md-12">
          <h2><?php echo $data['kota']?> <span class="text-muted"></span></h2>
          <p class="lead">
            <div class="row">
                    <div class="col-sm-6">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <form action="proses_signup.php" method="POST" role="form">
                                    <div class="form-group">
                                        <table width="100%">
                                            <tr>
                                                <td width="40%"><label>Nama</label></td>
                                                <td><input class="form-control" name="nama" required autofocus><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>e-mail</label></td>
                                                <td><input type="email" class="form-control" name="email" required email><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>No. HP</label></td>
                                                <td><input class="form-control" name="no_hp" required><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Username</label></td>
                                                <td><input class="form-control" name="username" required><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Password</label></td>
                                                <td><input type="password" class="form-control" name="password" required><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="center">
                                                    <button type="submit" class="btn btn-default">Simpan</button>
                                                    <button type="reset" class="btn btn-default">Reset</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
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
