<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "header.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            pelanggan <small>Edit Pelanggan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa"></i> <a href="pelanggan.php">Pelanggan</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Edit Pelanggan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa"></i> Edit Pelanggan</h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                    include "../koneksi.php";
                                    $kd2=$_GET["kd"];
                                    $link=koneksi_db();
                                    $sq="SELECT * FROM pelanggan WHERE kd_pelanggan = '$kd2'";
                                    $ress=mysql_query($sq,$link);
                                    $dt=mysql_fetch_array($ress);
                                ?>
                                <form action="edit_pelanggan_proses.php" method="POST" role="form">
                                    <div class="form-group">
                                        <table width="100%">
                                            <tr>
                                                <td width="40%"><label>Nama</label></td>
                                                <input type="hidden" value="<?php echo $kd2; ?>" name="kd_pelanggan">
                                                <td><input class="form-control" name="nama" value="<?php echo "$dt[1]";?>"><p class="help-block"></p></td>
                                            </tr>
                                           
                                            <tr>
                                                <td><label>Username</label></td>
                                                <td><input class="form-control" name="username" value="<?php echo "$dt[4]";?>"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Email</label></td>
                                                <td><input class="form-control" name="email" value="<?php echo "$dt[2]";?>"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>No Handphone</label></td>
                                                <td><input class="form-control" name="no_hp" value="<?php echo "$dt[3]";?>"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="center">
                                                    <button type="submit" class="btn btn-default">Simpan</button>
                                                    <button type="reset" class="btn btn-default">Reset</button>
                                                </td>
                                            </tr>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
