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
                            Jadwal
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa"></i> Jadwal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa"></i> Cari Data Jadwal</h3>
                            </div>
                            <div class="panel-body">
                                <form action="index.php" method="POST" role="form">
                                    <div class="form-group">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td><input class="form-control" placeholder="Keyword"></td>
                                                <td><select class="form-control">
                                                        <option>- Cari Berdasarkan -</option>
                                                        <option>Kode Jadwal</option>
                                                        <option>Kota Keberangkatan</option>
                                                        <option>kota Tujuan</option>
                                                    </select></td>
                                                <td width="70">&nbsp<button type="submit" class="btn btn-default">Cari</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <a href="tambah_jadwal.php" class="btn btn-primary">Tambah Jadwal</a>
                <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Jadwal</th>
                                        <th>Keberangkatan</th>
                                        <th>Tujuan</th>
                                        <th>Jam keberangkatan</th>
                                        <th>Jam Kedatangan</th>
                                        <th>Harga Tiket</th>
                                        <th colspan="2" style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "../koneksi.php";
                                        $link=koneksi_db();
                                        $sql="SELECT * FROM jadwal a JOIN lokasi b ON a.kd_lokasi_asal = b.kd_lokasi";
                                        $res=mysql_query($sql,$link);
                                        while ($data=mysql_fetch_array($res)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data[0]?></td>
                                        <td><?php echo "$data[7] | $data[8]"?></td>
                                        <?php
                                            $result=mysql_query("SELECT kota,lokasi FROM lokasi WHERE kd_lokasi='$data[2]'");
                                            $row=mysql_fetch_array($result);
                                            echo "<td>$row[kota] | $row[lokasi]</td>";
                                        ?>
                                        <td><?php echo $data[3]?></td>
                                        <td><?php echo $data[4]?></td>
                                        <td><?php echo $data[5]?></td>
                                        <td><a href="edit_jadwal.php"><img style="width:20px" src="img/edit.png"></a></td>
                                        <td><img style="width:20px" src="img/delete.png"></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                </div>
                <!-- /.row -->

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
