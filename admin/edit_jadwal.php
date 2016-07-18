<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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
                            Jadwal <small>Edit Jadwal</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa"></i> <a href="jadwal.php">Jadwal</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Edit Jadwal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa"></i> Edit Jadwal</h3>
                            </div>
                            <div class="panel-body">
                                <form action="index.php" method="POST" role="form">
                                    <div class="form-group">
                                        <table width="100%">
                                            <tr>
                                                <td width="40%"><label>Kode jadwal</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kota Keberangkatan</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kota Tujuan</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Jam Keberangkatan</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Jam Kedatangan</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kapasitas</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
                                            </tr>
                                            <tr>
                                                <td><label>Harga Tiket</label></td>
                                                <td><input class="form-control"><p class="help-block"></p></td>
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
