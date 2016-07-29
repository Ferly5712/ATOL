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

    <title>Travel Admin</title>

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
                            Tiket <small>Pembelian Tiket</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa"></i> Pembelian Tiket
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Pesan</th>
                                        <th>Id Pelanggan</th>
                                        <th>Kode Jadwal</th>
                                        <th>Tanggal Keberangkatan</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "../koneksi.php";
                                        $link=koneksi_db();
                                        $sql="SELECT * FROM pemesanan";
                                        $res=mysql_query($sql,$link);
                                        while ($data=mysql_fetch_array($res)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data[0] ?></td>
                                            <td><?php echo $data[1] ?></td>
                                            <td><?php echo $data[2] ?></td>
                                            <td><?php echo $data[3] ?></td>
                                            <td><?php echo $data[4] ?></td>
                                            <td><?php echo $data[5] ?></td>
                                            <td><font size="4">
                                                <?php
                                                    if ($data[6]=="0") {
                                                        echo "<span class='label label-danger'>Pending</span>";
                                                    }
                                                    elseif ($data[6]=="1") {
                                                        echo "<span class='label label-warning'>konfirmasi</span>";
                                                    }
                                                    elseif ($data[6]=="2") {
                                                        echo "<span class='label label-success'>Lunas</span>";
                                                    }
                                                ?>
                                                </font>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($data[6]=="0") {
                                                        echo "<a href='#' class='btn btn-sm btn-warning'>Konfirmasi</a>";
                                                    }
                                                    elseif ($data[6]=="1") {
                                                        echo "<a href='#' class='btn btn-sm btn-success'>Lunas</a>";
                                                        ?>
                                                        <script>
                                                        function konfirm() {
                                                          window.open("<?php echo "../images/konfirmasi/$data[7]" ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=600,height=600");
                                                        }
                                                        </script>
                                                        <?php

                                                        echo "<button onclick='konfirm()' class='btn btn-sm btn-info'>Bukti Transfer</a>";
                                                    }
                                                ?>
                                            </td>
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
